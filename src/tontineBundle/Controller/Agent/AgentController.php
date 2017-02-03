<?php

namespace tontineBundle\Controller\Agent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tontineBundle\Entity\Agent;
use tontineBundle\Form\AgentType;
use Symfony\Component\HttpFoundation\Request;

class AgentController extends \tontineBundle\Controller\BaseController
{
    
    
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agents = $em->getRepository('tontineBundle:Agent')
            ->with('profil')
            ->findBy(array(), array('createdAt'  => 'DESC'), 10);

        return $this->render('tontineBundle:Agent:index.html.twig', array(
            'agents' => $agents,
        ));
    }

    
    
    public function newAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $agent = new Agent();        
        $form = $this->createForm(AgentType::class, $agent);

        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);            
            if($form->isSubmitted() && $form->isValid())
            {
                $filename = 'PI-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$agent->getFilePhoto()->getClientOriginalName();
                $agent->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $agent->setPhoto($filename);
                
                /*if ($agent->getTypeUtilisateur() === "Administrateur") $agent->setRole('ROLE_GSP_TONTINE_ADMIN');
                if($agent->getTypeUtilisateur() === "Caissière") $agent->setRole ('ROLE_GSP_TONTINE_CAISSIERE');
                if($agent->getTypeUtilisateur() == "Agent de transfert") $agent->setRole ('ROLE_GSP_TONTINE_AGENT_DE_TRANSFERT');
                if($agent->getTypeUtilisateur() == "Agent collecteur") $agent->setRole ('ROLE_GSP_TONTINE_COLLECTEUR');
                if($agent->getTypeUtilisateur() == "Super Administrateur") $agent->setRole ('ROLE_GSP_TONTINE_SUPER_ADMIN');*/
                $em->persist($agent);
                $em->flush();
                return $this->redirect($this->generateUrl('tontine_agent',array()));
            }
        }        
        return $this->render('tontineBundle:Agent:new.html.twig',array(
            'form'=>$form->createView()
        ));  
    }
    
    
    
  
     public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $agent = $em->getRepository('tontineBundle:Agent')
            ->with('profil')
            ->find($id);

        if (!$agent) {
            throw $this->createNotFoundException('Entité inexistante.');
        }

        return $this->render('tontineBundle:Agent:show.html.twig', array(
            'agent'      => $agent,
            
        ));
    }
    
    public function updateAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();        
        $agent= $em->getRepository('tontineBundle:Agent')->find($id);  
        $form = $this->createForm(AgentType::class, $agent);

        if($request->getMethod()=='POST')
        {
            $form->handleRequest($request);            
            
            if($form->isSubmitted() && $form->isValid())
            {
                $em->flush();
                return $this->redirect($this->generateUrl('tontine_agent',array()));
            }
        }   
             
        return $this->render('tontineBundle:Agent:update.html.twig',array(
            'form'=>$form->createView(),
            'agent' => $agent
        ));  
    }
    
    public function profileAction(Request $request, Agent $agent){
        
        $form = $this->createForm(AgentType::class, $agent, array('option' => 'self', 'new' => false));
        if ($this->handleForm($request, $form)) {
            return $this->redirect($this->generateUrl('fos_user_security_logout'));
            //return $this->redirectToRoute('tontine_agent_show', array('id' => $agent->getId()));           
        }
        
        return $this->render('tontineBundle:Agent:profile.html.twig',array(
            'form'=>$form->createView(),
            'agent' => $agent
        ));  
    }
      
    public function enabledeseableAction(Request $request)
    {
        
        $id=$request->request->get('id');
        $value=$request->request->get('value');
        
        $em = $this->getDoctrine()->getManager();        
        $agent= $em->getRepository('tontineBundle:Agent')->find($id);
        $agent->setEnabled($value==="1");
        $em->flush(); 
        
        return new Response('OK');
    }
    
    
    public function previewAction($id)
    {
        $agent = $this->getRepository('tontineBundle:Agent')
            ->with('profil')
            ->find($id);
            
        return $this->render('tontineBundle:Agent:preview.html.twig', array(
            'agent' => $agent,
        ));
    }
    
    public function editAction(Request $request, Agent $agent)
    {
        $editForm = $this->createForm(AgentType::class, $agent, array('new' => false));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_agent_show', array('id' => $agent->getId()));
                //return $this->redirect($this->generateUrl('tontine_agent',array()));
            }
        }
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Agent:edit.html.twig', array(
                'agent' => $agent,
                'form' => $editForm->createView(),
            ));
        }
    }

    public function ajaxEditFormAction(Request $request, Agent $agent)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ClientType', $agent);
            
        return $this->render('tontineBundle:Agent:partials/form.html.twig', array(
            'agent' => $agent,
            'form' => $editForm->createView(),
        ));
    }
    
    
    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();            
            $agent = $form->getData();
            
            if($agent->getFilePhoto() != null){
                $filename = 'PI-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$agent->getFilePhoto()->getClientOriginalName();
                $agent->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $agent->setPhoto($filename);
            }
            
            $em->persist($agent);
            $em->flush();

            return true;
        }

        return false;
    }
}