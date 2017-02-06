<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Categorie;
use tontineBundle\Form\Type\CategorieType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Categorie controller.
 *
 * @Route("categorie")
 */
class CategorieController extends BaseController
{
    /**
     * Lists all Categorie entities.
     * @Security("has_role('ROLE_CATEGORIE_VIEW')")
     * @Route("/", name="tontine_categorie_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('tontineBundle:Categorie')->findBy(array(), array('id'  => 'DESC'), 10);

        return $this->render('tontineBundle:Categorie:index.html.twig', array(
            'categories' => $categories,
        ));
    }
    
    /**
     * Lists all Categorie entities.
     *@Security("has_role('ROLE_CATEGORIE_VIEW')")
     * @Route("/{id}", name="tontine_categorie_index_new", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function indexNewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('tontineBundle:Categorie')->findBy(array(), array('id'  => 'DESC'), 10);
        $cat = $em->getRepository('tontineBundle:Categorie')->find($id);
        return $this->render('tontineBundle:Categorie:index.html.twig', array(
            'categories' => $categories,
            'cat' => $cat
        ));
    }

    /**
     * Finds and displays a Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_VIEW')")
     * @Route("/{id}", name="tontine_categorie_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Categorie $categorie)
    {
        $deleteForm = $this->createDeleteForm($categorie);

        return $this->render('tontineBundle:Categorie:show.html.twig', array(
            'categorie' => $categorie,
            'idc' => $Categorie->getId(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a Categorie entity in a popup.
     *@Security("has_role('ROLE_CATEGORIE_VIEW')")
     * @Route("/{id}/preview", name="tontine_categorie_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $categorie = $this->getRepository('tontineBundle:Categorie')->find($id);
            
        return $this->render('tontineBundle:Categorie:preview.html.twig', array(
            'categorie' => $categorie
        ));
    }
   

    /**
     * Creates a new Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_CREATE')")
     * @Route("/new", name="tontine_categorie_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $categorie = new Categorie();
        $form = $this->createForm('tontineBundle\Form\Type\CategorieType', $categorie);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_categorie_index');
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Categorie:new.html.twig', array(
                'categorie' => $categorie,
                'form' => $form->createView(),
            ));
        }             
    }

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $categorie = $form->getData();
                        
            $em->persist($categorie);
            $em->flush();

            return true;
        }

        return false;
    }

    /**
     * Displays a form to create new Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_CREATE')")
     * @Route("/{id}/new-form", name="tontine_categorie_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\CategorieType');
            
        return $this->render('tontineBundle:Categorie:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    



    /**
     * Displays a form to edit an existing Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_EDIT')")
     * @Route("/{id}/edit", name="tontine_categorie_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Categorie $categorie)
    {
        $deleteForm = $this->createDeleteForm($categorie);
        $editForm = $this->createForm('tontineBundle\Form\Type\CategorieType', $categorie, array('new' => 0));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_categorie_show', array('id' => $categorie->getId()));
            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Categorie:edit.html.twig', array(
                'categorie' => $categorie,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_EDIT')")
     * @Route("/{id}/edit-form", name="tontine_categorie_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Categorie $categorie)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\CategorieType', $categorie);
            
        return $this->render('tontineBundle:Categorie:partials/form.html.twig', array(
            'categorie' => $categorie,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Categorie entity.
     *@Security("has_role('ROLE_CATEGORIE_DELETE')")
     * @Route("/{id}", name="tontine_categorie_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Categorie $categorie)
    {
        $form = $this->createDeleteForm($categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categorie);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_categorie_index');
    }

    /**
     * Creates a form to delete a Categorie entity.
     *
     * @param Categorie $categorie The Categorie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Categorie $categorie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_categorie_delete', array('id' => $categorie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
