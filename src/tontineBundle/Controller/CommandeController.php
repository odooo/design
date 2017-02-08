<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use tontineBundle\Entity\CommandeModele;
use tontineBundle\Entity\CommandePagne;
use tontineBundle\Entity\FicheTravail;

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
                        var_dump($pagne->getId());
                        $i = 0;
                        foreach ( $cmdPagne as $cmd_p)
                        {
                            var_dump($cmd_p->getPagne()->getId());
                            $array_id[$i] = $cmd_p->getPagne()->getId();
                            $i++;
                        }
                        if(in_array($pagne->getId(),$array_id))
                        {
                            $cmd_p = $this->getDoctrine()->getManager()->getRepository('tontineBundle:CommandePagne')->findByCommande(array(
                                'commande' => $commande,
                                'pagne' => $pagne,
                            ));
//                            var_dump($cmd_p);
//                            die();
//                            $cmd_p->setPagne($pagne);
                        }
                        else
                        {
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

            if(isset($modeles) && !empty($modeles))
            {
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

    public function setFicheAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $pagnes = $commande->getCmdPagne();

        $fiche = new FicheTravail();

        $form = $this->createForm('tontineBundle\Form\FicheTravailType', $fiche);
        $form->handleRequest($request);

        $user = $this->getUser();

         if ($form->isSubmitted() && $form->isValid()) {

            $fiche->setCommande($commande);
            $fiche->setDateCommande($commande->getCreatedAt());
            $fiche->setCreatedBy($user);

            $em->persist($fiche);

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

    public function indexFicheAction($id){

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
