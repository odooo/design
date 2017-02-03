<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Tontine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

use tontineBundle\Form\Type\TontineType;

/**
 * Tontine controller.
 *
 * @Route("tontines")
 */
class TontineController extends BaseController
{
    /**
     * Lists all tontine entities.
     *
     * @Route("/", name="tontine_tontines_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tontines = $em->getRepository('tontineBundle:Tontine')->findAll();

        return $this->render('tontineBundle:Tontine:index.html.twig', array(
            'tontines' => $tontines,
        ));
    }

    /**
     * Finds and displays a tontine entity.
     *
     * @Route("/{id}", name="tontine_tontines_show", requirements={"id":"\d+"})
     * @Method("GET")
     */
    public function showAction(Tontine $tontine)
    {
        $deleteForm = $this->createDeleteForm($tontine);

        return $this->render('tontineBundle:Tontine:show.html.twig', array(
            'tontine' => $tontine,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a tontine entity in a popup.
     *
     * @Route("/{id}/preview", name="tontine_tontines_preview", requirements={"id":"\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $tontine = $this->getRepository('tontineBundle:Tontine')
            ->with('mises')
            ->find($id);

        if (!$tontine) {
            throw $this->createNotFoundException('La tontine que vous recherchez semble ne plus exister !');
        }

        return $this->render('tontineBundle:Tontine:preview.html.twig', compact('tontine'));
    }

    /**
     * Creates a new tontine entity.
     *
     * @Route("/new", name="tontine_tontines_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tontine = new Tontine();
        $clients = $this->getRepository('tontineBundle:Client')->findAll();
        $biens = $this->getRepository('tontineBundle:BienTontine')->findAll();
        
        $form = $this->createForm('tontineBundle\Form\Type\TontineType', $tontine);

        if ($this->handleForm($request, $form)) {            
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse([
                    'success' => true,
                    'tontine' => [
                        'id' => $tontine->getId(),
                    ]
                ]);
            } else {
                return $this->redirectToRoute('tontine_tontines_show', array('id' => $tontine->getId()));
            }            
        }
        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success' => false,
                'errors' => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Tontine:new.html.twig', array(
                'tontine' => $tontine,
                'clients' => $clients,
                'biens'   => $biens,
                'form'    => $form->createView(),
            ));
        }                        
    }

    /**
     * Displays a form to create new tontine entity.
     *
     * @Route("/new-form", name="tontine_tontines_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction(Request $request)
    {        
        $tontine = new Tontine();        
        $clientId = $request->get('client_id', 0);
        if ($clientId != 0) {
            $client = $this->getRepository('tontineBundle:Client')->find($clientId);
            if ($client) {
                $tontine->setClient($client);
            }
        }

        $biens   = $this->getRepository('tontineBundle:BienTontine')->findAll();

        $form = $this->createForm(TontineType::class, $tontine);
            
        return $this->render('tontineBundle:Tontine:modals/new-modal.html.twig', array(            
            'biens'   => $biens,
            'isModal' => true,
            'form'    => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($form->getData());
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing tontine entity.
     *
     * @Route("/{id}/edit", name="tontine_tontines_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tontine $tontine)
    {
        $deleteForm = $this->createDeleteForm($tontine);
        $editForm = $this->createForm('tontineBundle\Form\Type\TontineType', $tontine);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_tontines_show', array('id' => $tontine->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Tontine:edit.html.twig', array(
                'tontine' => $tontine,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing tontine entity.
     *
     * @Route("/{id}/edit-form", name="tontine_tontines_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Tontine $tontine)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\TontineType', $tontine);
            
        return $this->render('tontineBundle:Tontine:partials/form.html.twig', array(
            'tontine' => $tontine,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a tontine entity.
     *
     * @Route("/{id}", name="tontine_tontines_delete", requirements={"id":"\d+"})
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Tontine $tontine)
    {
        $form = $this->createDeleteForm($tontine);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tontine);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_tontines_index');
    }

    /**
     * Creates a form to delete a tontine entity.
     *
     * @param Tontine $tontine The tontine entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tontine $tontine)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_tontines_delete', array('id' => $tontine->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
