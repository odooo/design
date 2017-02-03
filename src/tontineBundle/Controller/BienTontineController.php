<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\BienTontine;
use tontineBundle\Entity\OptionTontine;
use tontineBundle\Entity\TypeTontine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use GSPBundle\Controller\HttpClientController;
use Dompdf\Dompdf;

/**
 * BienTontine controller.
 *
 * @Route("biens")
 */
class BienTontineController extends HttpClientController
{
    private $majoration_1_an = 0;
    private $majoration_2_ans = 0.3;
    private $majoration_3_ans = 0.6;
    private $nombre_jours_annee = 365;
    private $nombre_semaine_annee = 52;
    private $nombre_mois_annee = 12;

    /**
     * Lists all bien entities.
     *
     * @Route("/", name="tontine_bien_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $client   = $this->getHttpClient();
        $response = $client->request('GET', 'biens');

        if($this->isSuccesful($response))
        {
            $biens =$this->getHttpResponse($response);

            return $this->render('tontineBundle:BienTontine:index.html.twig', array(
            'biens' => $biens,
            ));
        }        
    }

    /**
     * Finds and displays a client entity in a popup.
     *
     * @Route("/{id}/preview", name="tontine_bien_preview", requirements={"id"="\d+"})
     * s
     */
    public function previewAction(Request $request,$id)
    {
        $client   = $this->getHttpClient();
        $response = $client->request('GET', 'biens/'.$id);
        if($this->isSuccesful($response))
        {
            $bien =$this->getHttpResponse($response);
            $options=$this->calculerOptions($bien['prix_vente']);

            $BienTontine= new BienTontine();

            $form = $this->createFormType($bien,$BienTontine);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $this->saveBienTontine($BienTontine,$id);
                return $this->redirectToRoute("tontine_bien_fiche_preview");
            }

            return $this->render('tontineBundle:BienTontine:preview.html.twig', array(
                    'bien' => $bien,
                    'options'=>$options,
                    'form' => $form->createView()
                )
            );
        } 
        
    }

    public function saveBienTontine($BienTontine,$id)
    {
        $em = $this->getDoctrine()->getManager();

        $TontineJournalier= $em->getRepository('tontineBundle:TypeTontine')->findOneBy(array('libelle'=>TypeTontine::JOURNALIER));

        $TontineHebdomadaire= $em->getRepository('tontineBundle:TypeTontine')->findOneBy(array('libelle'=>TypeTontine::HEBDOMADAIRE));

        $TontineMensuel= $em->getRepository('tontineBundle:TypeTontine')->findOneBy(array('libelle'=>TypeTontine::MENSUEL));

            $client   = $this->getHttpClient();
          
           $response = $client->request('GET', 'biens/'.$id.'/save');

            if($this->isSuccesful($response))
            {
                $bien =$this->getHttpResponse($response);
                $options=$this->calculerOptions($bien['prix_vente']);
                $BienTontine->setCode($bien['code']);
                $BienTontine->setDescription($bien['description']);
                $em->persist($BienTontine);

                foreach ($options as $option) {

                    # Journalier
                    $OptionJournalier= new OptionTontine();
                    $OptionJournalier->setDuree($option['duree']);
                    $OptionJournalier->setMontant($option[TypeTontine::JOURNALIER]);
                    $OptionJournalier->setTypeTontine($TontineJournalier);
                    $OptionJournalier->setBienTontine($BienTontine);
                    $em->persist($OptionJournalier);

                    # Hebdomadaire
                    $OptionHebdomadaire= new OptionTontine();
                    $OptionHebdomadaire->setDuree($option['duree']);
                    $OptionHebdomadaire->setMontant($option[TypeTontine::HEBDOMADAIRE]);
                    $OptionHebdomadaire->setTypeTontine($TontineHebdomadaire);
                    $OptionHebdomadaire->setBienTontine($BienTontine);
                    $em->persist($OptionHebdomadaire);

                    # Mensuel
                    $OptionMensuel= new OptionTontine();
                    $OptionMensuel->setDuree($option['duree']);
                    $OptionMensuel->setMontant($option[TypeTontine::MENSUEL]);
                    $OptionMensuel->setTypeTontine($TontineMensuel);
                    $OptionMensuel->setBienTontine($BienTontine);
                    $em->persist($OptionMensuel);  
                }
                $em->flush(); 
                
            } 
         
    }
    

    /**
     * voir la fiche de choix.
     *
     * @Route("/fiche/preview", name="tontine_bien_fiche_preview")
     * @Method("GET")
     */
    public function FichedeChoixAction(Request $request)
    {
        $results = $this->getBienByZone();
        
        return $this->render('tontineBundle:BienTontine:FichePreview.html.twig', array(
            'results' => $results,
        ));
    }


    /**
     * voir la fiche de choix.
     *
     * @Route("/fiche/print", name="tontine_bien_fiche_print")
     * @Method("GET")
     */
    public function FichePrintAction(Request $request)
    {
       
        $results = $this->getBienByZone();
     
        $html = $this->render('tontineBundle:BienTontine:FichePrint.html.twig', array(
            'results' => $results,
        ))->getContent();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('fiche_de_choix');
    
    }

    /**
     * @Route("/{id}/options", name="tontine_bien_options", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function bienOptionsAction(Request $request, $id)
    {
        $options = $this->getDoctrine()->getManager()
            ->getRepository('tontineBundle:OptionTontine')
            ->with('TypeTontine')
            ->findBy(array('BienTontine' => $id));

       $data = [];

       foreach($options as $option) {
           $data[] = [
               'id'     => $option->getId(),
               'duree'  => $option->getDuree(),
               'modeId' => $option->getTypeTontine()->getId(),
               'mode'   => $option->getTypeTontine()->getLibelle(),
               'mise'   => $option->getMontant(),
           ];
       }

       return new JsonResponse($data);
    }

    private function calculerOptions($montant)
    {
        $basecalcul=0;
        if(isset($montant))$basecalcul=$montant;
        $options=array();

        #calcul des choix pour une durée de 1 an
        $duree=1;
        $net=$basecalcul*(1+$this->majoration_1_an);
        $options[$duree]=$this->calculerChoix($net,$duree);

        #calcul des choix pour une durée de 2 an
        $duree=2;
        $net=$basecalcul*(1+$this->majoration_2_ans);
        $options[$duree]=$this->calculerChoix($net,$duree);

        #calcul des choix pour une durée de 3 an
        $duree=3;
        $net=$basecalcul*(1+$this->majoration_3_ans);
        $options[$duree]=$this->calculerChoix($net,$duree);

        return $options;
    }

    private function calculerChoix($net,$duree)
    {
        $choix=array();
        $nombre_jours=$this->nombre_jours_annee*$duree;
        $nombre_semaines=$this->nombre_semaine_annee*$duree;
        $nombre_mois=$this->nombre_mois_annee*$duree;

        $journalier=$net/$nombre_jours;
        $hebdomadaire=$net/$nombre_semaines;
        $mensuel=$net/$nombre_mois;

        $choix['duree']=$duree;
        $choix[TypeTontine::JOURNALIER]=$this->arrondir($journalier);
        $choix[TypeTontine::HEBDOMADAIRE]=$this->arrondir($hebdomadaire);
        $choix[TypeTontine::MENSUEL]=$this->arrondir($mensuel);
        return $choix;
    }

    private function createFormType($bien,$BienTontine)
    {
        $quartier= array();
        $zone= array();

        $quartiers=$this->getGspEntityManager()->findAllQuartier();
        foreach ($quartiers as $value) {
            $libelle=$value->getlibelle();
            $quartier[$libelle]=$libelle;
        }
    
        $zones=$this->getGspEntityManager()->findAllZone();
        foreach ($zones as $value) {
            $libelle=$value->getlibelle();
            $zone[$libelle]=$libelle;
        }
       
        return $this->createForm('tontineBundle\Form\Type\BienTontineType',$BienTontine,array(
            'zone'=>$zone,
            'quartier'=>$quartier,
            'default_quartier'=>$bien['quartier'],
            'default_zone'=>$bien['zone'],
            'action'=>$this->generateUrl('tontine_bien_preview', array('id' => $bien['id'])),
            'method' => 'POST'
            ));
    }

    private function getBienByZone()
    {
        $em = $this->getDoctrine()->getManager();
        //$zones=$this->getGspEntityManager()->findAllZone();
        $zones = $this->getEntityManager()->createQueryBuilder()->select('DISTINCT b.zone')
            ->from('tontineBundle:BienTontine', 'b')->getQuery()->getResult();

        $zones = array_map(function($val){
            return $val["zone"];
        }, $zones);
        $results=array();
        foreach ($zones as $value) {
            $libelle=$value;
            $bienszone = $em->getRepository('tontineBundle:BienTontine')->findBy(array('zone'=> $libelle));
            $cpt=count($bienszone);
            if ($cpt>=1) {
                $ligne=array();
                $ligne['zone']=$libelle;
                $ligne['nbre']=$cpt;
                $ligne['biens']=$bienszone;
                $results[]=$ligne;
            }
        }
        return $results;

    }

}
