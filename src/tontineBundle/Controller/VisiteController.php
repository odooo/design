<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Visite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;


/**
 * Visite controller.
 *
 * @Route("visite")
 */
class VisiteController extends BaseController
{
    /**
     * Lists all visite entities.
     *
     * @Route("/{idc}/liste", name="tontine_visite_index", options={"expose"=true})
     * @Method("GET")
     */
    public function indexAction($idc)
    {
        $client = $this->getRepository('tontineBundle:Client')->find($idc);
        if(!$client){
            return new Response("Ce client n'existe pas!", 404);
        }
        $visites = $this->getRepository('tontineBundle:Visite')->findBy(array('client'=> $client), array('id'=>'DESC'));
        $client->setVisites($visites);
        return $this->render('tontineBundle:Visite:index.html.twig', array(
            'client' => $client,
        ));
    }
    
    
    /**
     * Lists all visite entities.
     *
     * @Route("/{etat}/levelliste", name="tontine_visite_etatlist", options={"expose"=true})
     * @Method("GET")
     */
    public function listEtatAction($etat)
    {
        $visites = $this->getRepository('tontineBundle:Visite')->findBy(array('etat'=> $etat), array('id'=>'DESC'));
        return $this->render('tontineBundle:Visite:index_etat.html.twig', array(
            'visites' => $visites,
            'etat' => $etat
        ));
    }

    /**
     * Finds and displays a visite entity.
     *
     * @Route("/{id}/show", name="tontine_visite_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Visite $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);

        return $this->render('tontineBundle:Visite:show.html.twig', array(
            'visite' => $visite,
            'delete_form' => $deleteForm->createView(),
        ));
    }
    
    /**
     * Finds and displays a visite entity in a popup.
     *
     * @Route("/{id}/validate", name="tontine_visite_validate", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function validateAction(Visite $visite)
    {
        $visite->setEtat(Visite::VALIDATED_VISITE);
        $visite->setResponsable($this->getUser());
        $visite->setDateValidation(new \DateTime());
        $this->getEntityManager()->flush();
        //return $this->redirectToRoute('tontine_visite_index', array('idc' => $visite->getClient()->getId()));
        return $this->render('tontineBundle:Visite:partials/item-details.html.twig', array(
            'visite' => $visite,
        ));
    }
    
    /**
     * Finds and displays a visite entity in a popup.
     *
     * @Route("/{id}/finaliser", name="tontine_visite_finaliser", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function finaliserAction(Visite $visite)
    {
        $visite->setEtat(Visite::DONE_VISITE);
        $visite->setCloseBy($this->getUser());
        $visite->setDateEffective(new \DateTime());
        $this->getEntityManager()->flush();
        //return $this->redirectToRoute('tontine_visite_index', array('idc' => $visite->getClient()->getId()));
        return $this->render('tontineBundle:Visite:partials/item-details.html.twig', array(
            'visite' => $visite,
        ));
    }
    /**
     * Finds and displays a visite entity in a popup.
     *
     * @Route("/{id}/ignorer", name="tontine_visite_ignorer", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function ignorerAction(Visite $visite)
    {
        $visite->setEtat(Visite::IGNORED_VISITE);
        $visite->setAbandonnant($this->getUser());
        $visite->setDateAbandon(new \DateTime());
        $this->getEntityManager()->flush();
        //return $this->redirectToRoute('tontine_visite_index', array('idc' => $visite->getClient()->getId()));
        return $this->render('tontineBundle:Visite:partials/item-details.html.twig', array(
            'visite' => $visite,
        ));
    }

    /**
     * Finds and displays a visite entity in a popup.
     *
     * @Route("/{id}/preview", name="tontine_visite_preview", options={"expose"=true}, requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction(Visite $visite)
    {
        $deleteForm = $this->createDeleteForm($visite);

        return $this->render('tontineBundle:Visite:partials/item-details.html.twig', array(
            'visite' => $visite,
        ));
    }

    /**
     * Creates a new visite entity.
     *
     * @Route("tontine/{idc}/new", name="tontine_visite_new", options={ "expose"=true})
     * @Method({"GET", "POST"})
     */
    public function newAction($idc, Request $request)
    {
        $client = $this->getRepository('tontineBundle:Client')->find($idc);
        $visite = new Visite();
        $visite->setClient($client);

        $bienChoisi = null;
        $date = 0;
        if($request->query->get('date')){
            $date = $request->query->get('date');
            $visite->setChoixDate($date);
            if($date != 4) $visite->setDateDisponibilite (new \DateTime());
        }
        if($request->query->get('idb')){
            $bienChoisi = $this->getRepository('tontineBundle:BienTontine')->find($request->query->get('idb'));
            $visite->setBien($bienChoisi);
        }
        
        $form = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite, array(
                'level' => 'new',
                'bien'=> $bienChoisi,
                'choixDate' => $date
                )
            );

        if ($this->handleForm($request, $form, $client)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_visite_show', array('id' => $visite->getId()));
            }   
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true, true),
            ]);
        } else {
            return $this->render('tontineBundle:Visite:new.html.twig', array(
                'visite' => $visite,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new visite entity.
     *
     * @Route("/{idc}/new-form", name="tontine_visite_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction($idc)
    {
        $biens = $this->getRepository('tontineBundle:BienTontine')->findAll();
        $form = $this->createForm('tontineBundle\Form\Type\VisiteType', new Visite(), array('level' => 'new'));
        
        return $this->render('tontineBundle:Visite:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
            'biens' => $biens,
            'idc' => $idc
        ));
    }
    
    
    /**
     * Displays a form to create new visite entity.
     *
     * @Route("/{idc}/newpopup-form", name="tontine_visite_newpopup_form", options={"expose"=true})
     * @Method({"GET"})
     */
    public function newFormAction($idc, Request $request)
    {        
        /*return $this->render('tontineBundle:Visite:modals/newmodal.html.twig', array(
            'idc' => $idc,
        ));*/
        $visite = new Visite();
        $bienChoisi = null;
        $date = 0;
        if($request->query->get('date')){
            $date = $request->query->get('date');
            $visite->setChoixDate($date);
        }
        if($request->query->get('idb')){
            $bienChoisi = $this->getRepository('tontineBundle:BienTontine')->find($request->query->get('idb'));
            $visite->setBien($bienChoisi);
        }
        $biens = $this->getRepository('tontineBundle:BienTontine')->findAll();
        $form = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite, array(
                'level' => 'new',
                'bien'=> $bienChoisi,
                'choixDate' => $date
                )
            );
        
        return $this->render('tontineBundle:Visite:modals/newmodal.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
            'biens' => $biens,
            'idc' => $idc
        ));
    } 

    public function handleForm(Request $request, $form, $client = null)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $visite = $form->getData();
            if($client){
                $visite->setClient($client);
                $client->addVisite($visite);
            }
            $em->persist($visite);
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing visite entity.
     *
     * @Route("/{id}/edit", name="tontine_visite_edit", options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Visite $visite)
    {
        $bienChoisi = null;
        $date = 0;
        if($request->query->get('date')){
            $date = $request->query->get('date');
            $visite->setChoixDate($date);
            if($date != 4) $visite->setDateDisponibilite (new \DateTime());
        }
        if($request->query->get('idb')){
            $bienChoisi = $this->getRepository('tontineBundle:BienTontine')->find($request->query->get('idb'));
            $visite->setBien($bienChoisi);
        }
        
        $editForm = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite, array(
            'level' => 'edit',
            'bien'=> $bienChoisi,
            'choixDate' => $date
        ));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_visite_show', array('id' => $visite->getId()));            }
        }
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Visite:edit.html.twig', array(
                'visite' => $visite,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing visite entity.
     *
     * @Route("/{id}/edit-form", name="tontine_visite_edit_form", options={"expose"=true})
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Visite $visite)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite);
            
        return $this->render('tontineBundle:Visite:partials/form.html.twig', array(
            'visite' => $visite,
            'isModal' => true,
            'form' => $editForm->createView(),
            'biens' => $this->getRepository('tontineBundle:BienTontine')->findAll()
        ));
    }
    /**
     * Deletes a visite entity.
     *
     * @Route("/{id}", name="tontine_visite_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Visite $visite)
    {
        $form = $this->createDeleteForm($visite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($visite);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_visite_index');
    }

    /**
     * Creates a form to delete a visite entity.
     *
     * @param Visite $visite The visite entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Visite $visite)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_visite_delete', array('id' => $visite->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
    /**
     * Displays a form to edit visite entity.
     *
     * @Route("/{id}/editpopup-form", name="tontine_visite_editpopup_form", options={"expose"=true})
     * @Method({"GET"})
     */
    public function editFormAction(Request $request, Visite $visite)
    {
        $bienChoisi = null;
        $date = 0;
        if($request->query->get('date')){
            $date = $request->query->get('date');
            $visite->setChoixDate($date);
        }else{
            $date = $visite->getChoixDate();
        }
        if($request->query->get('idb')){
            $bienChoisi = $this->getRepository('tontineBundle:BienTontine')->find($request->query->get('idb'));
            $visite->setBien($bienChoisi);
        }else{
            $bienChoisi = $visite->getBien();
        }
        
        $biens = $this->getRepository('tontineBundle:BienTontine')->findAll();
        $form = $this->createForm('tontineBundle\Form\Type\VisiteType', $visite, array(
                'level' => 'edit',
                'bien'=> $bienChoisi,
                'choixDate' => $date
                )
            );
        
        return $this->render('tontineBundle:Visite:modals/newmodal.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
            'biens' => $biens,
            'visite' => $visite,
        ));
    } 

}
