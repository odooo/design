<?php

namespace tontineBundle\Controller;

//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use tontineBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use tontineBundle\Entity\CommandeModele;
use tontineBundle\Entity\CommandePagne;
use tontineBundle\Entity\Facture;
use tontineBundle\Entity\FicheTravail;

use Dompdf\Dompdf;

/**
 * Commande controller.
 *
 */
class CommandeController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('tontineBundle:Commande')->findAll();
        $fiches = $em->getRepository('tontineBundle:FicheTravail')->findAll();

        return $this->render('tontineBundle:commande:index.html.twig', array(
            'commandes' => $commandes,
            'fiches' => $fiches,
        ));
    }

    /**
     * Creates a new commande entity.
     *
     */
    public function newAction(Request $request)
    {
        $commande = new Commande();
        $form = $this->createForm('tontineBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);

        $user = $this->getUser();

        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted() && $form->isValid()) {

            $pagnes = $form['pagne']->getData();
            $modeles = $form['modele']->getData();

            $commande->setCreatedBy($user);
            $commande->setCreatedAt(new \DateTime());
            $commande->setMontant(0);
            $commande->setHasBill(0);

            $em->persist($commande);
            $i = 0;
            foreach ($pagnes as $pagne) {
                $i++;
                $cmdPagne = new CommandePagne();
                /*$fiche = new FicheTravail();
                $fiche->setDateCommande($commande->getCreatedAt());
                $fiche->setCommande($commande);
                $em->persist($fiche);*/
                $cmdPagne->setPagne($pagne);
                $cmdPagne->setCommande($commande);
                $cmdPagne->setFiche(null);
                $cmdPagne->setHasFiche(0);
                $em->persist($cmdPagne);
            }

            $commande->setNbrePagne($i);

            if ($modeles) {
                foreach ($modeles as $modele) {
                    $cmdModele = new CommandeModele();
//                    $fiche = new FicheTravail();
//                    $fiche->setPagne($pagne);
                    $cmdModele->setModele($modele);
                    $cmdModele->setCommande($commande);
                    $cmdModele->setHasFiche(0);
                    $em->persist($cmdModele);
//                    $em->persist($fiche);
                }
            }

            $em->flush();

            return $this->redirectToRoute('shop_command_index');
        }

        return $this->render('tontineBundle:commande:new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);

        return $this->render('tontineBundle:commande:show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing commande entity.
     *
     */
    public function editAction(Request $request, Commande $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);
        $form = $this->createForm('tontineBundle\Form\CommandeType', $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $pagnes = $form['pagne']->getData();
            $modeles = $form['modele']->getData();

            if (isset($pagnes) && !empty($pagnes)) {
                $cmdPagne = $commande->getCmdPagne();

                if ($cmdPagne) {
                    $array_id = array();
                    foreach ($pagnes as $pagne) {
                        $i = 0;
                        foreach ($cmdPagne as $cmd_p) {
                            $array_id[$i] = $cmd_p->getPagne()->getId();
                            $i++;
                        }
                        if (in_array($pagne->getId(), $array_id)) {
                            $cmd_p = $this->getDoctrine()->getManager()->getRepository('tontineBundle:CommandePagne')->findByCommande(array(
                                'commande' => $commande,
                                'pagne' => $pagne,
                            ));
//                            var_dump($cmd_p);
//                            die();
//                            $cmd_p->setPagne($pagne);
                        } else {
                            $cmdPagne = new CommandePagne();
                            $fiche = new FicheTravail();
                            $fiche->setDateCommande(new \DateTime());
                            $em->persist($fiche);
                            $cmdPagne->setPagne($pagne);
                            $cmdPagne->setCommande($commande);
                            $cmdPagne->setFiche($fiche);
                            $em->persist($cmdPagne);
                        }
                    }
                }
            }

            if (isset($modeles) && !empty($modeles)) {
                $cmdModele = $this->getDoctrine()->getManager()->getRepository('tontineBundle:CommandeModele')->findBy(array(
                    'commande' => $commande,
                ));

                if ($cmdModele) {
                    foreach ($cmdModele as $cmd_m) {
                        $commande->removeCmdModele($cmd_m);
                        $em->flush();
                    }
                }
            }

            $em->flush();

            return $this->redirectToRoute('shop_command_edit', array('id' => $commande->getId()));
        }

        return $this->render('tontineBundle:commande:edit.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commande entity.
     *
     */
    public function deleteAction(Request $request, Commande $commande)
    {
        $form = $this->createDeleteForm($commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commande);
            $em->flush($commande);
        }

        return $this->redirectToRoute('shop_command_index');
    }

    /**
     * Creates a form to delete a commande entity.
     *
     * @param Commande $commande The commande entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commande $commande)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('shop_command_delete', array('id' => $commande->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    public function printBillAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $fiches = $em->getRepository('tontineBundle:FicheTravail')->findBy(array(
            'commande' => $commande,
        ));

        if ($commande->getHasBill() == 0) {
            $facture = $em->getRepository('tontineBundle:Facture')->findAll();

            $fact_index = 0;

            if (count($facture) > 0) {
                $count = count($facture);
                $countlength = strlen((string)$count) + 4;
                $fact_index = str_pad($count + 1, $countlength, "0", STR_PAD_LEFT);
            } else {
                $fact_index = str_pad(1, 5, "0", STR_PAD_LEFT);
            }

            $facture = new Facture();

            $facture->setTotal($commande->getMontant());
            $facture->setCommande($commande);
            $facture->setNumero($fact_index);

            $em->persist($facture);

            $commande->setHasBill(1);

            $em->flush();
        }

        $facture = $em->getRepository('tontineBundle:Facture')->findBy(array(
            'commande' => $commande,
        ));

        if ($facture) {
//            $new_index = str_pad(123, 8, "0", STR_PAD_LEFT);
//            var_dump($new_index);
//            die();
            $html = $this->render('tontineBundle:commande:facture.html.twig', [
                'commande' => $commande,
                'fiches' => $fiches,
                'facture' => $facture,
            ])->getContent();

            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);

            // (Optional) Setup the paper size and orientation
            $dompdf->setPaper('A4', 'landscape');

            // Render the HTML as PDF
            $dompdf->render();

            // Output the generated PDF to Browser
            $dompdf->stream('facture_' . $facture[0]->getNumero(), array('Attachment' => 0));
        }
    }

    public function payerAvanceAction(Request $request, $id, $action)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $fiches = $em->getRepository('tontineBundle:FicheTravail')->findBy(
            array('commande' => $commande));

        if ($request->getMethod() == 'POST') {
            $form = $request->request->get('shop_paid_form');

            switch ($action) {
                case 'avance':
                    if (isset($form['date']) && !empty($form['date'])) {
                        $date = new \DateTime($form['date'] . ' 00:00:00');
                        $commande->setDatePaidAvance($date);
                    } else {
                        return false;
                    }
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $avance = $form['montant'];
                        $commande->setAvance($avance);
                        $commande->setReteAPayer(0);
                        if ($avance > $commande->getMontant()) {
                            $relicat = $avance - $commande->getMontant();
                            $commande->setRelicat($relicat);
                            $commande->setStatus(2);
                        } else {
                            $commande->setStatus(1);
                        }
                    } else {
                        return false;
                    }
                    break;
                case 'reste':
//                    if(isset($form['date']) && !empty($form['date']))
//                    {
//                        $date = new \DateTime($form['date'].' 00:00:00');
//                        $commande->setDatePaidAvance($date);
//                    }
//                    else
//                    {
//                        return false;
//                    }
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $reste = $form['montant'];
                        $restePaye = $commande->getReteAPayer() + $reste;
                        $totalPaye = $restePaye + $commande->getAvance();

                        if ($commande->getMontant() <= $totalPaye) {
                            $relicat = $commande->getMontant() - $totalPaye;
                            if ($relicat <= 0) {
                                $commande->setRelicat($relicat * (-1));
                                $commande->setStatus(2);
                            }
                            $commande->setReteAPayer($restePaye);
                        } else {
                            $commande->setReteAPayer($restePaye);
                            $commande->setStatus(1);
                        }

                    } else {
                        return false;
                    }
                    break;
                case 'reliquat':
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $commande->setStatus(3);
                    } else {
                        return false;
                    }
                    break;
                default:

            }

            $em->flush();

            return $this->redirectToRoute('shop_command_index');
        }

        return new Response($this->renderView('tontineBundle:commande/modal:paid-avance-modal.html.twig', array(
            'fiches' => $fiches,
            'commande' => $commande,
            'action' => $action,
        )));
    }

    public function setFicheAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $pagnes = $commande->getCmdPagne();

        $fiche = new FicheTravail();

        $form = $this->createForm('tontineBundle\Form\FicheTravailType', $fiche);
        $form->handleRequest($request);

        $user = $this->getUser();

        $date = $request->request->get('dateLivraison');
        $pagneId = $request->request->get('pagne');

        if ($form->isSubmitted() && $form->isValid()) {

            $fiche->setCommande($commande);
            $fiche->setDateCommande($commande->getCreatedAt());
            $fiche->setCreatedBy($user);

            $pagne = $em->getRepository('tontineBundle:Pagne')->find($pagneId);
            $fiche->setPagne($pagne);

            $em->persist($fiche);

            $montant = $commande->getMontant() + $fiche->getMontant();

            $commande->setMontant($montant);

            $em->flush();

            return $this->redirectToRoute('shop_command_index');
        }

        return $this->render('tontineBundle:commande:fiche/new.html.twig', array(
            'commande' => $commande,
            'pagnes' => $pagnes,
            'client' => $commande->getClient(),
            'form' => $form->createView(),
        ));

    }

    public function indexFicheAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $fiches = $em->getRepository('tontineBundle:FicheTravail')->findBy(
            array('commande' => $commande));

        return $this->render('tontineBundle:commande:fiche/index.html.twig', array(
            'fiches' => $fiches,
            'commande' => $commande,
        ));
    }
}
