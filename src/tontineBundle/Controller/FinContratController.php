<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\FinContrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Fincontrat controller.
 *
 * @Route("fincontrat")
 */
class FinContratController extends Controller
{
    /**
     * Lists all finContrat entities.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/", name="tontine_fincontrat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $finContrats = $em->getRepository('tontineBundle:FinContrat')->findAll();

        return $this->render('tontineBundle:FinContrat:index.html.twig', array(
            'finContrats' => $finContrats,
        ));
    }

    /**
     * Finds and displays a finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}", name="tontine_fincontrat_show", requirements={"id"="\d+"}, options={"expose"=true} )
     * @Method("GET")
     */
    public function showAction(FinContrat $finContrat)
    {
        $deleteForm = $this->createDeleteForm($finContrat);

        return $this->render('tontineBundle:FinContrat:show.html.twig', array(
            'finContrat' => $finContrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a finContrat entity in a popup.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}", name="tontine_fincontrat_preview", requirements={"id"="\d+"}, options={"expose"=true})
     * @Method("GET")
     */
    public function previewAction(FinContrat $finContrat)
    {
        $deleteForm = $this->createDeleteForm($finContrat);

        return $this->render('tontineBundle:FinContrat:partials/item-details.html.twig', array(
            'finContrat' => $finContrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/new", name="tontine_fincontrat_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $finContrat = new Fincontrat();
         
        $form = $this->createForm('tontineBundle\Form\Type\FinContratType', $finContrat);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                    'id'=> $form->getData()->getId(),
                ));
            } else {
                return $this->redirectToRoute('tontine_fincontrat_show', array('id' => $finContrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:FinContrat:new.html.twig', array(
                'finContrat' => $finContrat,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}/new-form", name="tontine_fincontrat_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\FinContratType');
            
        return $this->render('tontineBundle:FinContrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    
    
    /**
     * Displays a form to create new finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}/new-form-fincontrat", name="tontine_fincontrat_new_form_fincontrat",requirements={"id":"\d+"}  )
     * @Method({"GET"})
     */
    public function ajaxNewFincontratFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\NewFinContratType');
            
        return $this->render('tontineBundle:FinContrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form,$id)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fincontrat=$form->getData();
            $contrat=$this->getDoctrine()->getManager()->getRepository('tontineBundle:Contrat')->findOneByTontine($id);
            $fincontrat->setContrat($contrat);
            $em->persist($fincontrat);
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}/edit", name="tontine_fincontrat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, FinContrat $finContrat)
    {
        $deleteForm = $this->createDeleteForm($finContrat);
        $editForm = $this->createForm('tontineBundle\Form\Type\FinContratType', $finContrat);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_fincontrat_show', array('id' => $finContrat->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:FinContrat:edit.html.twig', array(
                'finContrat' => $finContrat,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}/edit-form", name="tontine_fincontrat_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, FinContrat $finContrat)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\FinContratType', $finContrat);
            
        return $this->render('tontineBundle:FinContrat:partials/form.html.twig', array(
            'finContrat' => $finContrat,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}", name="tontine_fincontrat_delete",requirements={"id":"\d+"})
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, FinContrat $finContrat)
    {
        $form = $this->createDeleteForm($finContrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($finContrat);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_fincontrat_index');
    }

    /**
     * Creates a form to delete a finContrat entity.
     *
     * @param FinContrat $finContrat The finContrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(FinContrat $finContrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_fincontrat_delete', array('id' => $finContrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
    
     /**
     *
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/newfincontrat", name="tontine_fincontrat_popup")
     * @Method("GET")
     */
    public function popupAction()
    {
      return $this->render('tontineBundle:FinContrat:modals/fincontratModal.html.twig');
    }
    

    
    
    
    
     /**
     * Creates a new finContrat entity.
     *@Security("has_role('ROLE_TONTINE_FINALIZE')")
     * @Route("/{id}/ajaxfincontrat", name="tontine_fincontrat_new_fincontrat",options={"expose"=true},requirements={"id":"\d+"})
     * @Method({"GET", "POST"})
     */
    public function newfincontratAction(Request $request,$id)
    {
        $finContrat = new Fincontrat();
         
        $form = $this->createForm('tontineBundle\Form\Type\NewFinContratType', $finContrat);

        if ($this->handleForm($request, $form,$id)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                    'id' => $finContrat->getId(),
                ));
            } else {
                return $this->redirectToRoute('tontine_fincontrat_show', array('id' => $finContrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:FinContrat:new.html.twig', array(
                'finContrat' => $finContrat,
                'form' => $form->createView(),
            ));
        }            
    }
}
