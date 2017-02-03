<?php

namespace tontineBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use tontineBundle\Entity\TransfertCommissions;

/**
 * Transfertcommission controller.
 *
 * @Route("transfert-fonds/commissions")
 */
class TransfertCommissionsController extends BaseController
{
    /**
     * Lists all transfertCommission entities.
     *
     * @Route("/", name="tontine_transfertcommissions_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $transfertCommissions = $em->getRepository('tontineBundle:TransfertCommissions')->findAll();

        return $this->render('tontineBundle:TransfertCommissions:index.html.twig', array(
            'transfertCommissions' => $transfertCommissions,
        ));
    }

    /**
     * Finds and displays a transfertCommission entity.
     *
     * @Route("/{id}", name="tontine_transfertcommissions_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(TransfertCommissions $transfertCommission)
    {
        return $this->render('tontineBundle:TransfertCommissions:show.html.twig', array(
            'transfertCommission' => $transfertCommission,
        ));
    }

    /**
     * Finds and displays a transfertCommission entity in a popup.
     *
     * @Route("/{id}", name="tontine_transfertcommissions_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction(TransfertCommissions $transfertCommission)
    {
        $deleteForm = $this->createDeleteForm($transfertCommission);

        return $this->render('tontineBundle:TransfertCommissions:partials/item-details.html.twig', array(
            'transfertCommission' => $transfertCommission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new transfertCommission entity.
     *
     * @Route("/new", name="tontine_transfertcommissions_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $transfertCommission = new Transfertcommissions();
        $form = $this->createForm('tontineBundle\Form\Type\TransfertCommissionsType', $transfertCommission);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_transfertcommissions_show', array('id' => $transfertCommission->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:TransfertCommissions:new.html.twig', array(
                'transfertCommission' => $transfertCommission,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new transfertCommission entity.
     *
     * @Route("/{id}/new-form", name="tontine_transfertcommissions_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\TransfertCommissionsType');
            
        return $this->render('tontineBundle:TransfertCommissions:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $transfer = $form->getData();
            
            if ($transfer->getPieceFile()) {
                $file = $transfer->getPieceFile();
                $fileName = md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('pieces_path'), $fileName);
                $transfer->setPiece($fileName);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($transfer);
            $em->flush();

            return true;
        }

        return false;
    }

    /**
     * [estimateAmountAction description]
     *
     * @Route("/estimate-amount", name="tontine_transfertcommissions_estimate_amount")
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function estimateAmountAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $transferId = (int) $request->get('transfer', 0);
            $transfer = $this->getRepository('tontineBundle:TransfertFonds')->find($transferId);

            if (!$transfer) {
                return new Response('Transfert not found', 404);
            }

            $commission = $transfer->getMontant() * $this->getParameter('taux_commission') * 0.01;

            return new JsonResponse([
                'amount' => $commission,
            ]);
        }

        return new Response('Only ajax request allowed !');
    }


    /**
     * Displays a form to edit an existing transfertCommission entity.
     *
     * @Route("/{id}/edit", name="tontine_transfertcommissions_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TransfertCommissions $transfertCommission)
    {
        $deleteForm = $this->createDeleteForm($transfertCommission);
        $editForm = $this->createForm('tontineBundle\Form\Type\TransfertCommissionsType', $transfertCommission);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_transfertcommissions_show', array('id' => $transfertCommission->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:TransfertCommissions:edit.html.twig', array(
                'transfertCommission' => $transfertCommission,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing transfertCommission entity.
     *
     * @Route("/{id}/edit-form", name="tontine_transfertcommissions_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, TransfertCommissions $transfertCommission)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\TransfertCommissionsType', $transfertCommission);
            
        return $this->render('tontineBundle:TransfertCommissions:partials/form.html.twig', array(
            'transfertCommission' => $transfertCommission,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a transfertCommission entity.
     *
     * @Route("/{id}", name="tontine_transfertcommissions_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, TransfertCommissions $transfertCommission)
    {
        $form = $this->createDeleteForm($transfertCommission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($transfertCommission);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_transfertcommissions_index');
    }

    /**
     * Creates a form to delete a transfertCommission entity.
     *
     * @param TransfertCommissions $transfertCommission The transfertCommission entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TransfertCommissions $transfertCommission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_transfertcommissions_delete', array('id' => $transfertCommission->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
