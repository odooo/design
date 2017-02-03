<?php

namespace tontineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
/**
 * @Route("/tontines")
 */
class TontineCriteriaController extends BaseController
{
    private static $nduree = array(
        'y' => 365,
        'm' => 30,
        's' => 7,
    );
    
    
    /**
     * [secondAction description]
     * @Route("/ejce", name="tontine_etat_client_enregistrer_journalier")
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function etatClientEnregistrerJournalierAction(Request $request)
    {
        $clients = $this->getRepository("tontineBundle:Client")->findForToDay($this->getUser());

        return $this->render('tontineBundle:Etat:listclientjournalier.html.twig', [
            'clients' => $clients
        ]);   
    }
    
    /**
     *
     * @Route("/ejce/print", name="tontine_etat_client_enregistrer_journalier_print")
     */
    public function etatClientEnregistrerJournalierPrintAction(Request $request)
    {
       
        $clients = $this->getRepository("tontineBundle:Client")->findForToDay($this->getUser());
     
        $html = $this->render('tontineBundle:Etat:listclientjournalierprint.html.twig', [
            'clients' => $clients
        ])->getContent();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('clients_enregistres_'.(new \DateTime())->format("d-m-Y"));    
    }

    /**
     * [firstAction description]
     * @Route("/search-bien")
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function searchAction(Request $request)
    {
        $zones = $this->getEntityManager()->createQueryBuilder()->select('b.zone')
            ->from('tontineBundle:BienTontine', 'b')->getQuery()->getResult();
        
        $quartiers = $this->getEntityManager()->createQueryBuilder()->select('b.quartier')
            ->from('tontineBundle:BienTontine', 'b')->getQuery()->getResult();        
        
        $zones = array_map(function($val){
            return $val["zone"];
        }, $zones);
        
        $quartiers = array_map(function($val){
            return $val["quartier"];
        }, $quartiers);
        
        $search = new \tontineBundle\Form\DataTransformer\Search();
        $form = $this->createForm('\tontineBundle\Form\Type\SearchType', $search, array(
            'zones'=>array_unique($zones),
            'quartier' => array_unique($quartiers)));
        
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $search = $form->getData();
                $options = $this->getRepository("tontineBundle:OptionTontine")->findSearch($search);
            }else{
                $options = array();
            }
            
        }else{
            $options = array();
        }
        
        return $this->render('tontineBundle:Tontine:search.html.twig', [
            'options' => $options,
            'form' => $form->createView(),
        ]);
    }


    /**
     * [secondAction description]
     * @Route("/calculate-mise")
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function calculateMiseAction(Request $request)
    {
        $biens = $this->getBienManager()->findAll();

        return $this->render('tontineBundle:Tontine:calculate-mise.html.twig', [
            'biens' => $biens
        ]);   
    }

    /**
     * [doCalculateMiseAction description]
     * @Route("/do-calculate-mise", name="tontines_do_calculate_mise")
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function doCalculateMiseAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $codeBien = $request->get('bien');
            $mode = $request->get('mode');
            $duree = (int)$request->get('duree');

            $bien = $this->getBienManager()->findByCode($codeBien);

            $mise = $bien->getPrice() / $duree;

            return new JsonResponse([
                'mise'  => $mise,
            ]);
        }

        return new Response('Only ajax request allowed');
    }

    private function estimatePrice($mode, $montant, $duree)
    {
        switch($mode) {
            case 'j':
            case 'h':
            case 'm':
                $price = $duree * $montant;
                break;
        }

        return $price;
    }
}
