<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\Modele;
use tontineBundle\Form\Type\ModeleType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Modele controller.
 *
 * @Route("modele")
 */
class ModeleController extends BaseController
{
    /**
     * Lists all Modele entities.
     * @Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/", name="tontine_modele_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $modeles = $em->getRepository('tontineBundle:Modele')->findBy(array(), array('id'  => 'DESC'), 10);

        return $this->render('tontineBundle:Modele:index.html.twig', array(
            'modeles' => $modeles,
        ));
    }
    
    /**
     * Lists all modele entities.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}", name="tontine_modele_index_new", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function indexNewAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $modeles = $em->getRepository('tontineBundle:Modele')->findBy(array(), array('id'  => 'DESC'), 10);
        $mod = $em->getRepository('tontineBundle:Modele')->find($id);
        return $this->render('tontineBundle:Modele:index.html.twig', array(
            'modeles' => $modeles,
            'mod' => $mod
        ));
    }

    /**
     * Finds and displays a Modele entity.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}", name="tontine_modele_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(Modele $modele)
    {
        $deleteForm = $this->createDeleteForm($modele);

        return $this->render('tontineBundle:Modele:show.html.twig', array(
            'modele' => $modele,
            'idc' => $modele->getId(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a Modele entity in a popup.
     *@Security("has_role('ROLE_MODELE_VIEW')")
     * @Route("/{id}/preview", name="tontine_modele_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $modele = $this->getRepository('tontineBundle:Modele')->find($id);
            
        return $this->render('tontineBundle:Modele:preview.html.twig', array(
            'modele' => $modele
        ));
    }
   

    /**
     * Creates a new Modele entity.
     *@Security("has_role('ROLE_MODELE_CREATE')")
     * @Route("/new", name="tontine_modele_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $modele = new Modele();
        $form = $this->createForm('tontineBundle\Form\Type\ModeleType', $modele);

        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_modele_index');
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Modele:new.html.twig', array(
                'modele' => $modele,
                'form' => $form->createView(),
            ));
        }             
    }

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $form1 = $request->request->get('tontinebundle_modele');

            $em = $this->getDoctrine()->getManager();
            $modele = $form->getData();       
            $em->persist($modele);

            $pagne = $modele->getPagne();

            if($form1['mesure']*$form1['quantite'] > $pagne->getMesure()){
                return false;
            }else{

                $pagne->setMesure($pagne->getMesure() - $form1['mesure']*$form1['quantite']);

                $em->flush();

                return true;
            }

        }

        return false;
    }

    /**
     * Displays a form to create new Modele entity.
     *@Security("has_role('ROLE_MODELE_CREATE')")
     * @Route("/{id}/new-form", name="tontine_modele_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\ModeleType');
            
        return $this->render('tontineBundle:Modele:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }    



    /**
     * Displays a form to edit an existing Modele entity.
     *@Security("has_role('ROLE_MODELE_EDIT')")
     * @Route("/{id}/edit", name="tontine_modele_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Modele $modele)
    {
        $deleteForm = $this->createDeleteForm($modele);
        $editForm = $this->createForm('tontineBundle\Form\Type\ModeleType', $modele, array('new' => 0));
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_modele_show', array('id' => $modele->getId()));
            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:Modele:edit.html.twig', array(
                'modele' => $modele,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing Modele entity.
     *@Security("has_role('ROLE_MODELE_EDIT')")
     * @Route("/{id}/edit-form", name="tontine_modele_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, Modele $modele)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ModeleType', $modele);
            
        return $this->render('tontineBundle:Modele:partials/form.html.twig', array(
            'modele' => $modele,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a Modele entity.
     *@Security("has_role('ROLE_MODELE_DELETE')")
     * @Route("/{id}", name="tontine_modele_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, Modele $modele)
    {
        $form = $this->createDeleteForm($modele);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($modele);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_modele_index');
    }

    /**
     * Creates a form to delete a Modele entity.
     *
     * @param Modele $modele The Modele entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Modele $modele)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_modele_delete', array('id' => $modele->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
