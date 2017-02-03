<?php

namespace tontineBundle\Controller;
use tontineBundle\Form\Type\ContratType;
use tontineBundle\Form\Type\NewContratType;
use tontineBundle\Entity\Contrat;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use PDO;

/**
 * Contrat controller.
 *
 * @Route("contrat")
 */
class ContratController extends BaseController
{
    
    
    
    public function generateCode(){
         
            $code = uniqid(mt_rand(), true); 
           
            return $code;
    } 

 
    
    /**
     * Lists all contrat entities.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/", name="tontine_contrat_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $contrats = $em->getRepository('tontineBundle:Contrat')->findAll();
        
        
        
         

        return $this->render('tontineBundle:Contrat:index.html.twig', array(
            'contrats' => $contrats,
        ));
        
        
    }

    /**
     * Finds and displays a contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}", name="tontine_contrat_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);

        return $this->render('tontineBundle:Contrat:show.html.twig', array(
            'contrat' => $contrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a contrat entity in a popup.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}", name="tontine_contrat_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction(Contrat $contrat)
    {
        $deleteForm = $this->createDeleteForm($contrat);

        return $this->render('tontineBundle:Contrat:partials/item-details.html.twig', array(
            'contrat' => $contrat,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/new", name="tontine_contrat_new",options={"expose"=true})
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $contrat = new Contrat();
        $codecontrat=$this->generateCode();
        $codes=array();
        $result=  $this->getBienManager()->findAll();
        foreach ($result as $value) {
            //$codes[]= $value->getCode();
            $code= $value->getCode();
            $codes[$code] = $code;
   // $choices[$code] = $code;
        }
       
        $form = $this->createForm(ContratType::class, $contrat,array('biens'=>$codes,'codecontrat'=>$codecontrat));
        
       // $form = $this->createForm('tontineBundle\Form\Type\ContratType', $contrat);
        
        

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_contrat_show', array('id' => $contrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Contrat:new.html.twig', array(
                'contrat' => $contrat,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}/new-form", name="tontine_contrat_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $contrat = new Contrat();
        $codecontrat=$this->generateCode();
        $codes=array();
        $result=  $this->getBienManager()->findAll();
        foreach ($result as $value) {
            $code= $value->getCode();
            $codes[$code] = $code;
  
        }
       
        $form = $this->createForm(ContratType::class, $contrat,array('biens'=>$codes,'codecontrat'=>$codecontrat));
        
            
        return $this->render('tontineBundle:Contrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    
    /**
     * Displays a form to create new contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}/new-form-contrat", name="tontine_contrat_new_form_contrat",requirements={"id":"\d+"})
     * @Method({"GET"})
     */
    public function ajaxNewContratFormAction()
    {
        $contrat = new Contrat();
        $codecontrat=$this->generateCode();
       $form = $this->createForm(NewContratType::class, $contrat,array('codecontrat'=>$codecontrat));
        
            
        return $this->render('tontineBundle:Contrat:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form,$id)
    {
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $contrat=$form->getData();
            $piece=$form->getData()->getPiece();
            $filename = 'CONTRAT'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$piece->getFile()->getClientOriginalName();
            $piece->getFile()->move($this->getParameter('pieces_path'), $filename);
            $piece->setDossier($filename);
            $tontine=$this->getDoctrine()->getManager()->getRepository('tontineBundle:Tontine')->find($id);
            $contrat->setTontine($tontine);
            $em->persist($contrat);
            
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}/edit", name="tontine_contrat_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Contrat $contrat)
    {
        $contrat->setPiece(null);
        $deleteForm = $this->createDeleteForm($contrat);
        $editForm = $this->createForm('tontineBundle\Form\Type\ContratType', $contrat);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_contrat_show', array('id' => $contrat->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Contrat:edit.html.twig', array(
                'contrat' => $contrat,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}/edit-form", name="tontine_contrat_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Contrat $contrat)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ContratType', $contrat);
            
        return $this->render('tontineBundle:Contrat:partials/form.html.twig', array(
            'contrat' => $contrat,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}", name="tontine_contrat_delete", requirements={"id":"\d+"})
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Contrat $contrat)
    {
        $form = $this->createDeleteForm($contrat);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($contrat);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_contrat_index');
    }

    /**
     * Creates a form to delete a contrat entity.
     *
     * @param Contrat $contrat The contrat entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Contrat $contrat)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_contrat_delete', array('id' => $contrat->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    

    
     /**
     *
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/newcontrat", name="tontine_contrat_popup")
     * @Method("GET")
     */
    public function popupAction()
    {
      return $this->render('tontineBundle:Contrat:modals/contratModal.html.twig');
    }
    
    
    
    
    /**
     * Creates a new contrat entity.
     *@Security("has_role('ROLE_TONTINE_CONTRAT')")
     * @Route("/{id}/ajaxcontrat", name="tontine_contrat_new_contrat",options={"expose"=true},requirements={"id":"\d+"})
     * @Method({"GET", "POST"})
     */
    public function newContratAction(Request $request,$id)
    {        
        $contrat=new Contrat();
        $form = $this->createForm('tontineBundle\Form\Type\NewContratType', $contrat);
        
       // $form = $this->createForm('tontineBundle\Form\Type\ContratType', $contrat);
                       
        if ($this->handleForm($request, $form,$id)) {            
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_contrat_show', array('id' => $contrat->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Contrat:new.html.twig', array(
                'contrat' => $contrat,
                'form' => $form->createView(),
            ));
        }            
    }

}
