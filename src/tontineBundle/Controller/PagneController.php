<?php

namespace tontineBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tontineBundle\Entity\Pagne;
use tontineBundle\Form\PagneType;
use Symfony\Component\HttpFoundation\Request;

class PagneController extends BaseController
{
    
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pagnes = $em->getRepository('tontineBundle:Pagne')
            ->findBy(array(), array('createdAt'  => 'DESC'), 10);

        return $this->render('tontineBundle:Pagne:index.html.twig', array(
            'pagnes' => $pagnes,
        ));
    }

    
    
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $pagne = new Pagne();        
        $form = $this->createForm(PagneType::class, $pagne);

        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);            
            if($form->isSubmitted() && $form->isValid())
            {
                $filename = 'COUP-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$pagne->getFilePhoto()->getClientOriginalName();
                $pagne->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $pagne->setPhoto($filename);
                
                $em->persist($pagne);
                $em->flush();
                return $this->redirect($this->generateUrl('tontine_pagne',array()));
            }
        }        
        return $this->render('tontineBundle:Pagne:new.html.twig',array(
            'form'=>$form->createView()
        ));  
    }
    
    
    
  
     public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $pagne = $em->getRepository('tontineBundle:Pagne')->find($id);

        if (!$pagne) {
            throw $this->createNotFoundException('Entité inexistante.');
        }

        return $this->render('tontineBundle:Pagne:show.html.twig', array(
            'pagne'      => $pagne,
            
        ));
    }
    
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $pagne = $em->getRepository('tontineBundle:Pagne')->find($id);  
        $form = $this->createForm(PagneType::class, $pagne);

        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);            
            
            if($form->isSubmitted() && $form->isValid())
            {
                $em->flush();
                return $this->redirect($this->generateUrl('tontine_pagne',array()));
            }
        }   
             
        return $this->render('tontineBundle:Pagne:update.html.twig',array(
            'form'=>$form->createView(),
            'pagne' => $pagne
        ));  
    }
        
    
    public function previewAction($id)
    {
        $pagne = $this->getRepository('tontineBundle:Pagne')->find($id);
            
        return $this->render('tontineBundle:Pagne:preview.html.twig', array(
            'pagne' => $pagne,
        ));
    }
    
    public function editAction(Request $request, Pagne $pagne)
    {
        $editForm = $this->createForm(PagneType::class, $pagne, array('new' => false));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_pagne', array());
                //return $this->redirect($this->generateUrl('tontine_agent',array()));
            }
        }
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Pagne:edit.html.twig', array(
                'pagne' => $pagne,
                'form' => $editForm->createView(),
            ));
        }
    }

    public function ajaxEditFormAction(Request $request, Agent $pagne)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ClientType', $pagne);
            
        return $this->render('tontineBundle:Pagne:partials/form.html.twig', array(
            'pagne' => $pagne,
            'form' => $editForm->createView(),
        ));
    }
    
    
    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();            
            $pagne = $form->getData();
            
            if($pagne->getFilePhoto() != null){
                $filename = 'COUP-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$pagne->getFilePhoto()->getClientOriginalName();
                $pagne->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $pagne->setPhoto($filename);
            }
            
            $em->persist($pagne);
            $em->flush();

            return true;
        }

        return false;
    }
}