<?php

namespace tontineBundle\Controller;

//use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;
use tontineBundle\Entity\Commande;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use tontineBundle\Entity\CommandeModele;
use tontineBundle\Entity\CommandeNomodele;
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

        $commandes = $em->getRepository('tontineBundle:Commande')->findBy(
            array(), array('id' => 'desc'));
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

        if ($form->isSubmitted() /*&& $form->isValid()*/) {

            $formm = $request->request->get('tontinebundle_commande');

            $commande->setTypeCommande($formm['typeCommande']);

            if($formm['typeCommande'] == 'v') $pagnes = $formm['pagne'];//->getData();
            if($formm['typeCommande'] == 'a') $modeles = $formm['modele'];//->getData();
            if($formm['typeCommande'] == 'o') $nomodeles = $formm['nomodele'];//->getData();

            $commande->setCreatedBy($user);
            $commande->setCreatedAt(new \DateTime());
            $commande->setMontant(0);
            $commande->setHasBill(0);
            $commande->setPrixAchat(0);
            $commande->setReteAPayer(0);
            $commande->setEtat(false);

            $client = $em->getRepository('tontineBundle:Client')->find($formm['client']);
            $commande->setClient($client);

            $em->persist($commande);
            $i = 0;
            if(isset($pagnes)){
                foreach ($pagnes as $idPagne) {
                    $i++;
                    $cmdPagne = new CommandePagne();
                    $pagne = $em->getRepository('tontineBundle:Pagne')->find($idPagne);
                    $cmdPagne->setPagne($pagne);
                    $cmdPagne->setCommande($commande);
                    $cmdPagne->setFiche(null);
                    $cmdPagne->setHasFiche(0);
                    $em->persist($cmdPagne);
                }
            }

            $commande->setNbrePagne($i);

            $j = 0;
            if (isset($modeles)) {
                foreach ($modeles as $idModele) {
                    $j++;
                    $cmdModele = new CommandeModele();
                    $modele = $em->getRepository('tontineBundle:Modele')->find($idModele);
                    $cmdModele->setModele($modele);
                    $cmdModele->setCommande($commande);
                    $cmdModele->setHasFiche(0);
                    $em->persist($cmdModele);
                }
            }

            $commande->setNbreModele($j);

            $k = 0;
            if (isset($nomodeles)) {
                foreach ($nomodeles as $idNomodele) {
                    $k++;
                    $cmdNomodele = new CommandeNomodele();
                    $nomodele = $em->getRepository('tontineBundle:Modele')->find($idNomodele);
                    $cmdNomodele->setNomodele($nomodele);
                    $cmdNomodele->setCommande($commande);
                    $cmdNomodele->setHasFiche(0);
                    $em->persist($cmdNomodele);
                }
            }

            $commande->setNbreNomodele($k);

            $em->flush();

            return $this->redirectToRoute('shop_command_index');
        }

        $clients = $em->getRepository('tontineBundle:Client')->findAll();

        $listePagnes = $em->getRepository('tontineBundle:Pagne')->findBy(
            array(), array('id' => 'asc'));

        $listeModeles = $em->getRepository('tontineBundle:Modele')->findBy(
            array(), array('id' => 'asc'));

        $listeNomodeles = $em->getRepository('tontineBundle:Nomodele')->findBy(
            array(), array('id' => 'asc'));

        $pagnes = array();
        $modeles = array();
        $nomodeles = array();
        $i = 0;

        foreach ($listePagnes as $value) {
            if($value->getMesure() > 0){
                $pagnes[$i] = $value;
                $i++;
            }
        }

        $i = 0;
        foreach ($listeModeles as $key) {
            if($key->getQuantite() > 0){
                $modeles[$i] = $key;
                $i++;
            }
        }

        $i = 0;
        foreach ($listeNomodeles as $val) {
            if($val->getQuantite() > 0){
                $nomodeles[$i] = $val;
                $i++;
            }
        }

        return $this->render('tontineBundle:commande:new.html.twig', array(
            'commande' => $commande,
            'clients' => $clients,
            'pagnes' => $pagnes,
            'modeles' => $modeles,
            'nomodeles' => $nomodeles,
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
            $dompdf->stream('facture_'.$facture[0]->getNumero(), array('Attachment' => 0));
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
                        //$date = new \DateTime($form['date'] . ' 00:00:00');
                        $dateL = $form['date'];
                        $dateI = \DateTime::createFromFormat('d/m/Y', $dateL);
                        $date = \DateTime::createFromFormat('Y-m-d', $dateI->format('Y-m-d'));
                        $commande->setDatePaidAvance($date);
                    } else {
                        return false;
                    }
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $avance = $form['montant'];
                        $commande->setAvance($avance);
                        $commande->setReteAPayer($commande->getMontant() - $avance);
                        /*if ($avance > $commande->getMontant()) {
                            $relicat = $avance - $commande->getMontant();
                            $commande->setRelicat($relicat);
                            $commande->setStatus(2);
                        } else {*/
                            $commande->setStatus(1); // avance payée
                            if($commande->getReteAPayer() == 0) $commande->setStatus(3);//finalisé
                        //}
                    } else {
                        return false;
                    }
                    break;
                case 'reste':
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $reste = $form['montant'];
                        //$restePaye = $commande->getReteAPayer() + $reste;
                        //$totalPaye = $restePaye + $commande->getAvance();

                        /*if ($commande->getMontant() <= $totalPaye) {
                            $relicat = $commande->getMontant() - $totalPaye;
                            if ($relicat <= 0) {
                                $commande->setRelicat($relicat * (-1));
                                $commande->setStatus(2);
                            }
                            $commande->setReteAPayer($restePaye);
                        } else {
                            $commande->setReteAPayer($restePaye);
                            $commande->setStatus(1);
                        }*/

                        $commande->setReteAPayer($commande->getReteAPayer() - $reste);

                        if($commande->getReteAPayer() == 0) $commande->setStatus(3);//finalisé

                    } else {
                        return false;
                    }
                    break;
                case 'reliquat':
                    if (isset($form['montant']) && !empty($form['montant'])) {
                        $relicat = $form['montant'];

                        /*if( ($commande->getRelicat() - $relicat) == 0){
                            $commande->setStatus(3);
                        }
                        $commande->setRelicat($commande->getRelicat() - $relicat); */

                        $commande->setReteAPayer($commande->getReteAPayer() + $relicat);
                        if($commande->getReteAPayer() == 0) $commande->setStatus(3);

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
        $pagnesP = $commande->getCmdPagne();
        $modelesM = $commande->getCmdModele();
        $nomodeles = $commande->getCmdNomodele();

        $pagnes = array();
        $modeles = array();
        $nomods = array();

        $a = 0;
        if($pagnesP){
            foreach ($pagnesP as $value) {
                if($value->getHasFiche() == 0){
                    $pagnes[$a] = $value;
                    $a++;
                }
            }
        }

        $a = 0;
        if($modelesM){
            foreach ($modelesM as $value) {
                if($value->getHasFiche() == 0){
                    $modeles[$a] = $value;
                    $a++;
                }
            }
        }

        $a = 0;
        if($nomodeles){
            foreach ($nomodeles as $value) {
                if($value->getHasFiche() == 0){
                    $nomods[$a] = $value;
                    $a++;
                }
            }
        }

        $fiche = new FicheTravail();

        $form = $this->createForm('tontineBundle\Form\FicheTravailType', $fiche);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {

            $fiche->setCommande($commande);
            $fiche->setDateCommande($commande->getCreatedAt());
            $fiche->setCreatedBy($user);
            $dateL = $request->request->get('dateLivraison');

            $dateI = \DateTime::createFromFormat('d/m/Y', $dateL);
            $date = \DateTime::createFromFormat('Y-m-d', $dateI->format('Y-m-d'));

            $fiche->setDateLivraison($date);
            $prixAchat = 0;

            $recup = $request->request->get('tontinebundle_fichetravail');

            if($commande->getTypeCommande() == 'v'){

                $pagneId = $request->request->get('pagne');

                if(!is_null($pagneId)){

                    $pagne = $em->getRepository('tontineBundle:Pagne')->find($pagneId);
                    $fiche->setPagne($pagne);
                    if($recup['mesure'] > $pagne->getMesure()){
                        return new Response('La mesure renseignée dépasse la mesure disponible en stock pour ce pagne');
                    }else{

                        $pagne->setMesure($pagne->getMesure() - $recup['mesure']);
                        $fiche->setMesure($recup['mesure']);
                        $fiche->setQuantite(0);
                        $prixAchat = $pagne->getPrix()*$recup['mesure'];
                        $fiche->setPrixAchat($prixAchat + $recup['charges']);

                        foreach ($commande->getCmdPagne() as $value) {
                            if($value->getPagne() == $pagne) $value->setHasFiche(1);
                        }

                    }
                }
            }elseif($commande->getTypeCommande() == 'a'){
                
                $modeleId = $request->request->get('modele');

                if(!is_null($modeleId)){

                    $modele = $em->getRepository('tontineBundle:Modele')->find($modeleId);
 
                    $pagne = $modele->getPagne();

                    $fiche->setPagne($pagne);

                    if($recup['quantite'] > $modele->getQuantite()){
                        return new Response('La quantité renseignée dépasse la quantité disponible en stock pour ce modèle');
                    }else{

                        $modele->setQuantite($modele->getQuantite() - $recup['quantite']);
                        $fiche->setMesure(0);
                        $fiche->setQuantite($recup['quantite']);
                        $prixAchat = $pagne->getPrix()*$modele->getMesure();
                        $fiche->setPrixAchat($prixAchat*$recup['quantite'] + $modele->getFrais()*$recup['quantite']);
                        
                        foreach ($commande->getCmdModele() as $value) {
                            if($value->getModele() == $modele) $value->setHasFiche(1);
                        }

                    }
                }
            }elseif($commande->getTypeCommande() == 'o'){

                $nomodeleId = $request->request->get('nomodele');

                if(!is_null($nomodeleId)){

                    $nomodele = $em->getRepository('tontineBundle:Nomodele')->find($nomodeleId);

                    $fiche->setPagne(null);

                    if($recup['quantite'] > $nomodele->getQuantite()){
                        return new Response('La quantité renseignée dépasse la quantité disponible en stock pour ce modèle');
                    }else{

                        $nomodele->setQuantite($nomodele->getQuantite() - $recup['quantite']);
                        $fiche->setMesure(0);
                        $fiche->setQuantite($recup['quantite']);
                        $prixAchat = $nomodele->getPrixAchat()*$recup['quantite'];
                        $fiche->setPrixAchat($prixAchat);
                        
                        foreach ($commande->getCmdNomodele() as $value) {
                            if($value->getNomodele() == $nomodele) $value->setHasFiche(1);
                        }

                    }
                }
            }else{

                $fiche->setPrixAchat($recup['charges']);
                $fiche->setMesure(0);
                $fiche->setQuantite(0);

            }

            $em->persist($fiche);

            $fiche->setBenefice($fiche->getMontant() - $fiche->getPrixAchat());

            $commande->setMontant($commande->getMontant() + $fiche->getMontant());
            $commande->setPrixAchat($commande->getPrixAchat() + $fiche->getPrixAchat());

            $commande->setBenefice($commande->getMontant() - $commande->getPrixAchat());

            $em->flush();

            return $this->redirectToRoute('shop_command_index');
        }

        return $this->render('tontineBundle:commande:fiche/new.html.twig', array(
            'commande' => $commande,
            'pagnes' => $pagnes,
            'modeles' => $modeles,
            'nomods' => $nomods,
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

    public function voirMesureFicheAction(Request $request, $id)
    {

        $em = $this->getDoctrine()->getManager();

        $fiche = $em->getRepository('tontineBundle:FicheTravail')->find($id);

        return new Response($this->renderView('tontineBundle:commande/fiche:see-mesure-modal.html.twig', array(
            'fiche' => $fiche,
        )));

    }

    public function etatAction(Request $request)
    {
        $nbParPage = 10;
        $em = $this->getDoctrine()->getManager();

        if ($request->getMethod() == "POST") {
            $post = $request->request;

            $nbEntity = $em->getRepository("tontineBundle:Commande")->counter($post);
            $page = ceil($nbEntity / $nbParPage);

            $entities = $em->getRepository("tontineBundle:Commande")->search($post, 0, (int)$nbParPage);
            $request->getSession()->set("rech", $post);
            $request->getSession()->set("page", $page);
            return $this->render('tontineBundle:commande:etat.html.twig', [
                "active" => $post->get("active"),
                "entities" => $entities,
                "post" => $post,
                "page" => $page,
                "min" => 1,
            ]);
        }

        if ($request->getMethod() == "GET" && $request->query->get("page")) {
            $em = $this->getDoctrine()->getManager();
            $post = $this->get('session')->get("rech");
            $page = $this->get('session')->get("page");
            $init = ((int)$request->query->get("page") - 1) * (int)$nbParPage;

            $entities = $em->getRepository("tontineBundle:Commande")->search($post, $init, $nbParPage);
            return $this->render('tontineBundle:commande:etat.html.twig', [
                "active" => $post->get("active"),
                "entities" => $entities,
                "post" => $post,
                "page" => $page,
                "min" => ($request->query->get("m") ? $request->query->get("m") : 1),
            ]);
        }

        $post = $request->request;
        return $this->render('tontineBundle:commande:etat.html.twig', array(
            "active" => null,
            "post" => $post,
            "entities" => null,
            "page" => null,
        ));
    } 

    public function formModifMesureFicheAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $fiche = $em->getRepository('tontineBundle:FicheTravail')->find($id);

        if($request->getMethod() == 'POST'){

            $form = $request->request->get('tontinebundle_shop_modif_mesure_fiche');

            $fiche->setLongGHChemise($form['longGHChemise']);
            $fiche->setDosChemise($form['dosChemise']);
            $fiche->setPoitrineChemise($form['poitrineChemise']);
            $fiche->setTailleChemise($form['tailleChemise']);
            $fiche->setHancheChemise($form['hancheChemise']);
            $fiche->setTmancheChemise($form['tmancheChemise']);
            $fiche->setColChemise($form['colChemise']);
            $fiche->setPoignetChemise($form['poignetChemise']);

            $fiche->setLongGHPantalon($form['longGHPantalon']);
            $fiche->setDosPantalon($form['dosPantalon']);
            $fiche->setPoitrinePantalon($form['poitrinePantalon']);
            $fiche->setTaillePantalon($form['taillePantalon']);
            $fiche->setHanchePantalon($form['hanchePantalon']);
            $fiche->setTmanchePantalon($form['tmanchePantalon']);
            $fiche->setColPantalon($form['colPantalon']);
            $fiche->setPoignetPantalon($form['poignetPantalon']);

            $em->flush();

            return $this->redirectToRoute('shop_fiche_travail_index', array('id'=>$fiche->getCommande()->getId()));

        }

        return $this->render('tontineBundle:commande/fiche:modif-fiche.html.twig', array(
            'commande' => $fiche->getCommande(),
            'fiche' => $fiche,
        ));
    }

    public function livraisonAction($id){
        
        $em = $this->getDoctrine()->getManager();

        $commande = $em->getRepository('tontineBundle:Commande')->find($id);
        $commande->setEtat(true);
        $commande->setDateLivraison(new \DateTime());

        $em->flush();

        return $this->redirectToRoute('shop_command_index');
    }

}