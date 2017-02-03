<?php

namespace tontineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use tontineBundle\Form\Type\CriteresEtatType;
use tontineBundle\Entity\CriteresEtat;


use Dompdf\Dompdf;

/**
 * Etat controller.
 *
 * @Route("etat")
 */
class EtatController extends BaseController
{
    
    /**
     * @Route("/index", name="tontine_etat")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function indexAction()
    {
        return $this->render('tontineBundle:Etat:index.html.twig');
    }
    
    
    /**
     * @Route("/miselist", name="tontine_etat_mise")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function miseListAction(Request $request)
    {
        $critereEtat = new CriteresEtat();
        $form = $this->createForm(CriteresEtatType::class, $critereEtat);
        $form->handleRequest($request);
        $critereEtat = $form->getData();
                
        $depotMises = array();
        
        if($request->getMethod() == 'POST')
            $depotMises = $this->getRepository('tontineBundle:DepotMise')->getByCriteria($critereEtat);

        return $this->render('tontineBundle:Etat:miseindex.html.twig', array(
            'depotMises' => $depotMises,
            'criteres' => $critereEtat
        ));
    }
    
    /**
     *
     * @Route("/miselist/print", name="tontine_etat_mise_print")
     */
    public function miseListPrintAction(Request $rq)
    {
        $critereEtat = new CriteresEtat();
        $p = new \tontineBundle\Entity\Periode();
        $p->setDateDebut($rq->query->get("pd"));
        $p->setDateFin($rq->query->get("pf"));

        $critereEtat->setPeriode($p);
        $critereEtat->setVille($rq->query->get("v"));
        $critereEtat->setQuartier($rq->query->get("q"));
        $critereEtat->setClient($rq->query->get("c")?$this->getRepository('tontineBundle:Client')
                ->find($rq->query->get("c")):null);
        
        $depotMises = $this->getRepository('tontineBundle:DepotMise')->getByCriteria($critereEtat);
        
     
        $html = $this->render('tontineBundle:Etat:listmiseprint.html.twig', [
            'depotsMises' => $depotMises,
            'criteres' => $critereEtat
        ])->getContent();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('depots_mise_'.(new \DateTime())->format("d-m-Y"));    
    }
    
    /**
     * @Route("/clientlist", name="tontine_etat_client")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function clientListAction(Request $request)
    {
        $critereEtat = new CriteresEtat();
        $form = $this->createForm(CriteresEtatType::class, $critereEtat);
        $form->handleRequest($request);
        $critereEtat = $form->getData();
        $controle=1;
        //$clients  = array();
        $client  = array();
        
        if($request->getMethod() == 'POST'){
        $client=$this->getDoctrine()->getManager()->getRepository('tontineBundle:Client')->getByCriteria($critereEtat);
      
        }
            
        return $this->render('tontineBundle:Etat:listclients.html.twig', array(
            'clients' =>  $client,
            'criteres' => $critereEtat
            )
        );
    }
    
    
    /**
     *
     * @Route("/clientlist/print", name="tontine_etat_client_print")
     */
    public function clientListPrintAction(Request $rq)
    {
        $critereEtat = new CriteresEtat();
        $critereEtat->setVille($rq->query->get("v"));
        $critereEtat->setQuartier($rq->query->get("q"));
        $critereEtat->setClient($rq->query->get("t")?$this->getRepository('tontineBundle:TypeTontine')
                ->find($rq->query->get("t")):null);
        
        $clients = $this->getRepository('tontineBundle:Client')->getByCriteria($critereEtat);
        
     
        $html = $this->render('tontineBundle:Etat:listclientetatprint.html.twig', [
            'clients' => $clients,
            'criteres' => $critereEtat
        ])->getContent();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('client_'.(new \DateTime())->format("d-m-Y"));    
    }
    
    /**
     * @Route("/contratlist", name="tontine_etat_contrat")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function contratListAction(Request $request)
    {
        $critereEtat = new CriteresEtat();
        $form = $this->createForm(CriteresEtatType::class, $critereEtat);
        $form->handleRequest($request);
        $critereEtat = $form->getData();
        
        $contrat  = array();
        
        if($request->getMethod() == 'POST'){
            $contrat = $this->getDoctrine()->getManager()->getRepository('tontineBundle:ResiliationContrat')->findByCriteria($critereEtat);
        
                       }
       
            
        return $this->render('tontineBundle:Etat:contratlist.html.twig', array(
            'resiliationContrats' =>  $contrat));
    }
    
    /**
     * @Route("/trans-fondlist", name="tontine_etat_transfert_fonds")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function transfertFondsListAction(Request $request){
        $critereEtat = new CriteresEtat();
        $form = $this->createForm(CriteresEtatType::class, $critereEtat);
        $form->handleRequest($request);
        $critereEtat = $form->getData();
        
        $transfertFonds = array();
        
        if($request->getMethod() == 'POST')
            $transfertFonds = $this->getRepository('tontineBundle:TransfertFonds')->getByCriteria($critereEtat);

        return $this->render('tontineBundle:Etat:transfert_fondsindex.html.twig', array(
            'transfertFonds' => $transfertFonds,
            'criteres' => $critereEtat
        ));
    }
    
  
    /**
     *
     * @Route("/transfondslist/print", name="tontine_etat_transfonds_print")
     */
    public function transfertFondsListPrintAction(Request $rq)
    {
        $critereEtat = new CriteresEtat();
        $p = new \tontineBundle\Entity\Periode();
        $p->setDateDebut($rq->query->get("pd"));
        $p->setDateFin($rq->query->get("pf"));
        $critereEtat->setPeriode($p);
        
        $transfertFonds = $this->getRepository('tontineBundle:TransfertFonds')->getByCriteria($critereEtat);
        
     
        $html = $this->render('tontineBundle:Etat:listtransfertfondsprint.html.twig', [
            'transfertFonds' => $transfertFonds,
            'criteres' => $critereEtat
        ])->getContent();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('transfertdfond_'.(new \DateTime())->format("d-m-Y"));    
    }
    
    
    /**
     * @Route("/trans-commissionlist", name="tontine_etat_transfert_commissions")
     * @Security("has_role('ROLE_ETAT_VIEW')")
     */
    public function transfertComissionsListAction(Request $request)
    {
        $critereEtat = new CriteresEtat();
        $form = $this->createForm(CriteresEtatType::class, $critereEtat);
        $form->handleRequest($request);
        $critereEtat = $form->getData();
                
        $transfertCommissions = array();
        
        if($request->getMethod() == 'POST')
            $transfertCommissions = $this->getRepository('tontineBundle:TransfertCommissions')->getByCriteria($critereEtat);

        return $this->render('tontineBundle:Etat:transfert_commissionsindex.html.twig', array(
            'transfertCommissions' => $transfertCommissions,
        ));
    }
    
    public function criteriatFormAction(array $criteres, $action)
    {
        $form = $this->createForm(CriteresEtatType::class, new CriteresEtat(), array('criteres' => $criteres));
        return $this->render('tontineBundle:Etat:Partials/form.html.twig', array(
            'form' => $form->createView(),
            'action' => $action
        ));
    }
}
