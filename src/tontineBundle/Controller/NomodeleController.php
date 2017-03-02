<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Nomodele;
use tontineBundle\Form\Type\NomodeleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Modele controller.
 *
 * @Route("nomodele")
 */
class NomodeleController extends BaseController
{
    /**
     * Lists all Nomodele entities.
     * @Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/", name="tontine_nomodele_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nomodeles = $em->getRepository('tontineBundle:Nomodele')->findBy(array(), array('id'  => 'DESC'), 10);

        return $this->render('tontineBundle:Nomodele:index.html.twig', array(
            'nomodeles' => $nomodeles,
        ));
    }
    
    /**
     * Lists all nomodele entities.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}", name="tontine_nomodele_index_new", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function indexNewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $nomodeles = $em->getRepository('tontineBundle:Nomodele')->findBy(array(), array('id'  => 'DESC'), 10);
        $nomod = $em->getRepository('tontineBundle:Nomodele')->find($id);
        return $this->render('tontineBundle:Nomodele:index.html.twig', array(
            'nomodeles' => $nomodeles,
            'nomod' => $nomod
        ));
    }

    /**
     * Finds and displays a Nomodele entity.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}", name="tontine_nomodele_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Nomodele $nomodele)
    {
        $deleteForm = $this->createDeleteForm($nomodele);

        return $this->render('tontineBundle:Nomodele:show.html.twig', array(
            'nomodele' => $nomodele,
            'idc' => $nomodele->getId(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a Nomodele entity in a popup.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}/preview", name="tontine_nomodele_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $nomodele = $this->getRepository('tontineBundle:Nomodele')->find($id);
            
        return $this->render('tontineBundle:Nomodele:preview.html.twig', array(
            'nomodele' => $nomodele
        ));
    }
   

    /**
     * Creates a new Nomodele entity.
     *@Security("has_role('ROLE_MODELE_CREATE')")
     * @Route("/new", name="tontine_nomodele_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $nomodele = new Nomodele();
        $form = $this->createForm('tontineBundle\Form\Type\NomodeleType', $nomodele);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_nomodele_index');
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Nomodele:new.html.twig', array(
                'nomodele' => $nomodele,
                'form' => $form->createView(),
            ));
        }             
    }

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $form1 = $request->request->get('tontinebundle_nomodele');

            $em = $this->getDoctrine()->getManager();
            $nomodele = $form->getData();       
            $em->persist($nomodele);

            $em->flush();

            return true;

        }

        return false;
    }

    /**
     * Displays a form to create new Nomodele entity.
     *@Security("has_role('ROLE_MODELE_CREATE')")
     * @Route("/{id}/new-form", name="tontine_nomodele_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\NomodeleType');
            
        return $this->render('tontineBundle:Nomodele:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    



    /**
     * Displays a form to edit an existing Nomodele entity.
     *@Security("has_role('ROLE_MODELE_EDIT')")
     * @Route("/{id}/edit", name="tontine_nomodele_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Nomodele $nomodele)
    {
        $deleteForm = $this->createDeleteForm($nomodele);
        $editForm = $this->createForm('tontineBundle\Form\Type\NomodeleType', $nomodele, array('new' => 0));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_nomodele_show', array('id' => $nomodele->getId()));
            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Nomodele:edit.html.twig', array(
                'nomodele' => $nomodele,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing Modele entity.
     *@Security("has_role('ROLE_MODELE_EDIT')")
     * @Route("/{id}/edit-form", name="tontine_nomodele_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Nomodele $nomodele)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\NomodeleType', $nomodele);
            
        return $this->render('tontineBundle:Nomodele:partials/form.html.twig', array(
            'nomodele' => $nomodele,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Modele entity.
     *@Security("has_role('ROLE_MODELE_DELETE')")
     * @Route("/{id}", name="tontine_nomodele_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Nomodele $nomodele)
    {
        $form = $this->createDeleteForm($nomodele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nomodele);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_nomodele_index');
    }

    /**
     * Creates a form to delete a Nomodele entity.
     *
     * @param Modele $modele The Nomodele entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Nomodele $nomodele)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_nomodele_delete', array('id' => $nomodele->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
