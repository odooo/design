<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Client;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Client controller.
 *
 * @Route("client")
 */
class ClientController extends BaseController
{
    /**
     * Lists all client entities.
     * @Security("has_role('ROLE_CLIENT_VIEW')")
     * @Route("/", name="tontine_client_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository('tontineBundle:Client')->findBy(array(), array('createdAt'  => 'DESC'), 10);

        return $this->render('tontineBundle:Client:index.html.twig', array(
            'clients' => $clients,
        ));
    }
    
    /**
     * Lists all client entities.
     *@Security("has_role('ROLE_CLIENT_VIEW')")
     * @Route("/{id}", name="tontine_client_index_new", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function indexNewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $clients = $em->getRepository('tontineBundle:Client')->findBy(array(), array('createdAt'  => 'DESC'), 10);
        $cli = $em->getRepository('tontineBundle:Client')->find($id);
        return $this->render('tontineBundle:Client:index.html.twig', array(
            'clients' => $clients,
            'cli' => $cli
        ));
    }

    /**
     * Finds and displays a client entity.
     *@Security("has_role('ROLE_CLIENT_VIEW')")
     * @Route("/{id}", name="tontine_client_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);

        return $this->render('tontineBundle:Client:show.html.twig', array(
            'client' => $client,
            'idc' => $client->getId(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a client entity in a popup.
     *@Security("has_role('ROLE_CLIENT_VIEW')")
     * @Route("/{id}/preview", name="tontine_client_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $client = $this->getRepository('tontineBundle:Client')->find($id);
            
        return $this->render('tontineBundle:Client:preview.html.twig', array(
            'client' => $client
        ));
    }
   

    /**
     * Creates a new client entity.
     *@Security("has_role('ROLE_CLIENT_CREATE')")
     * @Route("/new", name="tontine_client_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $client = new Client();
        $form = $this->createForm('tontineBundle\Form\Type\ClientType', $client);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_client_index');
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Client:new.html.twig', array(
                'client' => $client,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new client entity.
     *@Security("has_role('ROLE_CLIENT_CREATE')")
     * @Route("/{id}/new-form", name="tontine_client_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\ClientType');
            
        return $this->render('tontineBundle:Client:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $client = $form->getData();
            
            if($client->getFilePhoto() != null){
                $filename = 'CLI-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$client->getFilePhoto()->getClientOriginalName();
                $client->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $client->setPhoto($filename);
            }
            
            $em->persist($client);
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing client entity.
     *@Security("has_role('ROLE_CLIENT_EDIT')")
     * @Route("/{id}/edit", name="tontine_client_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Client $client)
    {
        $deleteForm = $this->createDeleteForm($client);
        $editForm = $this->createForm('tontineBundle\Form\Type\ClientType', $client, array('new' => 0));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_client_show', array('id' => $client->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Client:edit.html.twig', array(
                'client' => $client,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing client entity.
     *@Security("has_role('ROLE_CLIENT_EDIT')")
     * @Route("/{id}/edit-form", name="tontine_client_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Client $client)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ClientType', $client);
            
        return $this->render('tontineBundle:Client:partials/form.html.twig', array(
            'client' => $client,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a client entity.
     *@Security("has_role('ROLE_CLIENT_DELETE')")
     * @Route("/{id}", name="tontine_client_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Client $client)
    {
        $form = $this->createDeleteForm($client);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($client);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_client_index');
    }

    /**
     * Creates a form to delete a client entity.
     *
     * @param Client $client The client entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Client $client)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_client_delete', array('id' => $client->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
