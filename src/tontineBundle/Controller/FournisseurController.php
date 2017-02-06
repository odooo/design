<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Fournisseur;
use tontineBundle\Form\Type\FournisseurType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Fournisseur controller.
 *
 * @Route("fournisseur")
 */
class FournisseurController extends BaseController
{
    /**
     * Lists all fournisseur entities.
     * @Security("has_role('ROLE_FOURNISSEUR_VIEW')")
     * @Route("/", name="tontine_fournisseur_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $fournisseurs = $em->getRepository('tontineBundle:Fournisseur')->findBy(array(), array('createdAt'  => 'DESC'), 10);

        return $this->render('tontineBundle:Fournisseur:index.html.twig', array(
            'fournisseurs' => $fournisseurs,
        ));
    }
    
    /**
     * Lists all fournisseur entities.
     *@Security("has_role('ROLE_FOURNISSEUR_VIEW')")
     * @Route("/{id}", name="tontine_fournisseur_index_new", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function indexNewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $fournisseurs = $em->getRepository('tontineBundle:Fournisseur')->findBy(array(), array('createdAt'  => 'DESC'), 10);
        $frn = $em->getRepository('tontineBundle:Fournisseur')->find($id);
        return $this->render('tontineBundle:Fournisseur:index.html.twig', array(
            'fournisseurs' => $fournisseurs,
            'frn' => $frn
        ));
    }

    /**
     * Finds and displays a fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_VIEW')")
     * @Route("/{id}", name="tontine_fournisseur_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);

        return $this->render('tontineBundle:Fournisseur:show.html.twig', array(
            'fournisseur' => $fournisseur,
            'idc' => $fournisseur->getId(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a fournisseur entity in a popup.
     *@Security("has_role('ROLE_FOURNISSEUR_VIEW')")
     * @Route("/{id}/preview", name="tontine_fournisseur_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $fournisseur = $this->getRepository('tontineBundle:Fournisseur')->find($id);
            
        return $this->render('tontineBundle:Fournisseur:preview.html.twig', array(
            'fournisseur' => $fournisseur
        ));
    }
   

    /**
     * Creates a new fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_CREATE')")
     * @Route("/new", name="tontine_fournisseur_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $fournisseur = new Fournisseur();
        $form = $this->createForm('tontineBundle\Form\Type\FournisseurType', $fournisseur);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_fournisseur_index');
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Fournisseur:new.html.twig', array(
                'fournisseur' => $fournisseur,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_CREATE')")
     * @Route("/{id}/new-form", name="tontine_fournisseur_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\FournisseurType');
            
        return $this->render('tontineBundle:Fournisseur:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $fournisseur = $form->getData();
            
            if($fournisseur->getFilePhoto() != null){
                $filename = 'FOURN-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$fournisseur->getFilePhoto()->getClientOriginalName();
                $fournisseur->getFilePhoto()->move($this->getParameter('pieces_path'), $filename);
                $fournisseur->setPhoto($filename);
            }
            
            $em->persist($fournisseur);
            $em->flush();

            return true;
        }

        return false;
    }


    /**
     * Displays a form to edit an existing fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_EDIT')")
     * @Route("/{id}/edit", name="tontine_fournisseur_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Fournisseur $fournisseur)
    {
        $deleteForm = $this->createDeleteForm($fournisseur);
        $editForm = $this->createForm('tontineBundle\Form\Type\FournisseurType', $fournisseur, array('new' => 0));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_fournisseur_show', array('id' => $fournisseur->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Fournisseur:edit.html.twig', array(
                'fournisseur' => $fournisseur,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_EDIT')")
     * @Route("/{id}/edit-form", name="tontine_fournisseur_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Fournisseur $fournisseur)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\FournisseurType', $fournisseur);
            
        return $this->render('tontineBundle:Fournisseur:partials/form.html.twig', array(
            'fournisseur' => $fournisseur,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a fournisseur entity.
     *@Security("has_role('ROLE_FOURNISSEUR_DELETE')")
     * @Route("/{id}", name="tontine_fournisseur_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Fournisseur $fournisseur)
    {
        $form = $this->createDeleteForm($fournisseur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($fournisseur);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_fournisseur_index');
    }

    /**
     * Creates a form to delete a fournisseur entity.
     *
     * @param Fournisseur $fournisseur The fournisseur entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Fournisseur $fournisseur)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_fournisseur_delete', array('id' => $fournisseur->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
