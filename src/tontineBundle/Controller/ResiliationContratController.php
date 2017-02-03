<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\ResiliationContrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Resiliationcontrat controller.
 *
 * @Route("resiliationcontrat")
 */
class ResiliationContratController extends Controller
{
    
    
    
    public function sommeMise($id){
        $mises = $this->getDoctrine()->getManager()->getRepository('tontineBundle:DepotMise')->findByTontine($id);
        $montant=0;
        foreach ($mises as  $value) {
         $montant+=   $value->getMontant();
         $mode=$value->getTontine()->getMode();
        }
        
       if($mode=='Journalier'){
       $parametre=$this->getParameter('taux_penalite_journalier');}
       if($mode=='Hebdomadaire'){
       $parametre=$this->getParameter('taux_penalite_hebdo');}
         if($mode=='Mensuel'){   
         $parametre=$this->getParameter('taux_penalite_mensuel');}
         
       
       
        return $montant* $parametre;
    }

    /**
     * Lists all resiliationContrat entities.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/", name="tontine_resiliationcontrat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resiliationContrats = $em->getRepository('tontineBundle:ResiliationContrat')->findAll();

        return $this->render('tontineBundle:ResiliationContrat:index.html.twig', array(
            'resiliationContrats' => $resiliationContrats,
        ));
    }
     

    /**
     * Finds and displays a resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}", name="tontine_resiliationcontrat_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(ResiliationContrat $resiliationContrat)
    {
        //$sommemise=  $this->sommeMise($resiliationContrat->getContrat()->getTontine()->getId());
         $sommemise=0;
        $deleteForm = $this->createDeleteForm($resiliationContrat);

        return $this->render('tontineBundle:ResiliationContrat:show.html.twig', ['resiliationContrat' => $resiliationContrat,
            'sommemise' => $sommemise,
            'delete_form' => $deleteForm->createView(),
            ]);
    }

    /**
     * Finds and displays a resiliationContrat entity in a popup.
     * @Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}", name="tontine_resiliationcontrat_preview", requirements={"id"="\d+"},options={"expose"=true})
     * @Method("GET")
     */
    public function previewAction(ResiliationContrat $resiliationContrat)
    {
        $deleteForm = $this->createDeleteForm($resiliationContrat);

        return $this->render('tontineBundle:ResiliationContrat:partials/item-details.html.twig', array(
            'resiliationContrat' => $resiliationContrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new resiliationContrat entity.
     * @Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/new", name="tontine_resiliationcontrat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $resiliationContrat = new Resiliationcontrat();
        $resiliationContrat->setValidate(false);
        $resiliationContrat->setAgent($this->getUser());
        $form = $this->createForm('tontineBundle\Form\Type\ResiliationContratType', $resiliationContrat);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_resiliationcontrat_show', array('id' => $resiliationContrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ResiliationContrat:new.html.twig', array(
                'resiliationContrat' => $resiliationContrat,
                'form' => $form->createView(),
            ));
        }            
    }
    
    
    
    
    
    
    
    /**
     * Creates a new resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/valider", name="tontine_resiliationcontrat_valider",options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function validateAction(Request $request,  ResiliationContrat $resiliationcontrat)
    {
        
        $resiliationcontrat->setValidate(true);
        $resiliationcontrat->setAgentValidant($this->getUser());
        $form = $this->createForm('tontineBundle\Form\Type\ResiliationContratValidateType', $resiliationcontrat);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ResiliationContrat:new.html.twig', array(
                'resiliationContrat' => $resiliationContrat,
                'form' => $form->createView(),
            ));
        }            
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
     * Displays a form to create new resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/new-form", name="tontine_resiliationcontrat_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\ResiliationContratType');
            
        return $this->render('tontineBundle:ResiliationContrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    } 
    
    
    
    /**
     * Displays a form to create new resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/new-form-resiliationcontrat", name="tontine_resiliationcontrat_new_form_resiliationcontra")
     * @Method({"GET"})
     */
    public function ajaxNewResiliationContratFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\NewResiliationContratType');
            
        return $this->render('tontineBundle:ResiliationContrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    } 
    
    
    
    
    /**
     * Displays a form to validate  resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/new-addform", name="tontine_resiliationcontrat_new_addform")
     * @Method({"GET"})
     */
    public function ajaxAddFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\ResiliationContratValidateType');
            
        return $this->render('tontineBundle:ResiliationContrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form,$id)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $resiliationcontrat=$form->getData();
            $contrat=$this->getDoctrine()->getManager()->getRepository('tontineBundle:Contrat')->findOneByTontine($id);
            $resiliationcontrat->setContrat($contrat);
            $em->persist($resiliationcontrat);
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing resiliationContrat entity.
     *
     * @Route("/{id}/edit", name="tontine_resiliationcontrat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ResiliationContrat $resiliationContrat)
    {
        $deleteForm = $this->createDeleteForm($resiliationContrat);
        $editForm = $this->createForm('tontineBundle\Form\Type\ResiliationContratType', $resiliationContrat);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_resiliationcontrat_show', array('id' => $resiliationContrat->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ResiliationContrat:edit.html.twig', array(
                'resiliationContrat' => $resiliationContrat,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/edit-form", name="tontine_resiliationcontrat_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, ResiliationContrat $resiliationContrat)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ResiliationContratType', $resiliationContrat);
            
        return $this->render('tontineBundle:ResiliationContrat:partials/form.html.twig', array(
            'resiliationContrat' => $resiliationContrat,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}", name="tontine_resiliationcontrat_delete",requirements={"id":"\d+"})
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, ResiliationContrat $resiliationContrat)
    {
        $form = $this->createDeleteForm($resiliationContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resiliationContrat);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_resiliationcontrat_index');
    }

    /**
     * Creates a form to delete a resiliationContrat entity.
     *
     * @param ResiliationContrat $resiliationContrat The resiliationContrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ResiliationContrat $resiliationContrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_resiliationcontrat_delete', array('id' => $resiliationContrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    
    
    
    /**
     * Creates a new resiliationContrat entity.
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/{id}/ajaxresiliationcontrat", name="tontine_resiliationcontrat_new_resiliationcontrat",options={"expose"=true},requirements={"id":"\d+"})
     * @Method({"GET", "POST"})
     */
    public function newResiliationContratAction(Request $request,$id)
    {
        $resiliationContrat = new Resiliationcontrat();
        $resiliationContrat->setValidate(false);
        $resiliationContrat->setAgent($this->getUser());
        $form = $this->createForm('tontineBundle\Form\Type\NewResiliationContratType', $resiliationContrat);

        if ($this->handleForm($request, $form,$id)) {
            if ($request->isXmlHttpRequest()) {
                
                return new JsonResponse(array(
                    'success' => true,
                    'id'=>$resiliationContrat->getId(),
                ));
            } else {
                return $this->redirectToRoute('tontine_resiliationcontrat_show', array('id' => $resiliationContrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ResiliationContrat:new.html.twig', array(
                'resiliationContrat' => $resiliationContrat,
                'form' => $form->createView(),
            ));
        }            
    }
    
    
    
    
      /**
     *
     *@Security("has_role('ROLE_TONTINE_CANCEL')")
     * @Route("/newresiliationcontrat", name="tontine_resiliationcontrat_popup")
     * @Method("GET")
     */
    public function popupAction()
    {
      return $this->render('tontineBundle:ResiliationContrat:modals/resiliationcontratModal.html.twig');
    }
    

    
}



