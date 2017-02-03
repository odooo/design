<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\ConditionGenerale;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Conditiongenerale controller.
 *
 * @Route("conditiongenerale")
 */
class ConditionGeneraleController extends BaseController
{
    /**
     * Lists all conditionGenerale entities.
     *
     * @Route("/", name="tontine_conditiongenerale_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $conditionGenerales = $em->getRepository('tontineBundle:ConditionGenerale')->findAll();

        return $this->render('tontineBundle:ConditionGenerale:index.html.twig', array(
            'conditionGenerales' => $conditionGenerales,
        ));
    }

    /**
     * Finds and displays a conditionGenerale entity.
     *
     * @Route("/{id}", name="tontine_conditiongenerale_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction(ConditionGenerale $conditionGenerale)
    {
        $deleteForm = $this->createDeleteForm($conditionGenerale);

        return $this->render('tontineBundle:ConditionGenerale:show.html.twig', array(
            'conditionGenerale' => $conditionGenerale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a conditionGenerale entity in a popup.
     *
     * @Route("/{id}", name="tontine_conditiongenerale_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction(ConditionGenerale $conditionGenerale)
    {
        $deleteForm = $this->createDeleteForm($conditionGenerale);

        return $this->render('tontineBundle:ConditionGenerale:partials/item-details.html.twig', array(
            'conditionGenerale' => $conditionGenerale,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new conditionGenerale entity.
     *
     * @Route("/{idc}/new", name="tontine_conditiongenerale_new", options={ "expose"=true})
     * @Method({"GET", "POST"})
     */
    public function newAction($idc, Request $request)
    {
        $client = $this->getRepository("tontineBundle:Client")->find($idc);        
        if (!$client) {
            throw $this->createNotFoundException("Ce client n'existe pas !");
        }        
        $conditionGenerale = new Conditiongenerale();
        $conditionGenerale->setClient($client);
        $form = $this->createForm('tontineBundle\Form\Type\ConditionGeneraleType', $conditionGenerale);

        if ($this->handleForm($request, $form, $client)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_conditiongenerale_show', array('id' => $conditionGenerale->getId()));
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ConditionGenerale:new.html.twig', array(
                'conditionGenerale' => $conditionGenerale,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new conditionGenerale entity.
     *
     * @Route("cg/new-form", name="tontine_cg_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction()
    {
        $form = $this->createForm('tontineBundle\Form\Type\ConditionGeneraleType');
            
        return $this->render('tontineBundle:ConditionGenerale:partials/form.html.twig', array(
            'isModal' => true,
            'form' => $form->createView(),
        ));
    }  
    
    /**
     * Displays a form to create new visite entity.
     *
     * @Route("cg/{idc}/newpopup-form", name="tontine_cg_newpopup_form")
     * @Method({"GET"})
     */
    public function newFormAction($idc)
    {
        return $this->render('tontineBundle:ConditionGenerale:modals/newmodal.html.twig', array(
            'idc' => $idc,
        ));
    } 

    public function handleForm(Request $request, $form, $client = null)
    {
        $form->handleRequest($request);
        //$form->submit(array_merge($request->request->all(), $request->files->all()));
        
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $conditionGene = $form->getData();
            
            if($client){
                $conditionGene->setClient($client);
                $client->setCondition($conditionGene);
            }
            
            foreach ($conditionGene->getPieces() as $piece) {
                if($piece->getNom() == null || $piece->getNom() == "" 
                        || $piece->getFile() == null
                ) {
                    return false;
                }
            }
            
            foreach ($conditionGene->getPieces() as $piece) {
                $filename = 'CG-'. strtoupper(substr(sha1(uniqid(mt_rand(), true)), 0, 10)).$piece->getFile()->getClientOriginalName();
                $piece->getFile()->move($this->getParameter('pieces_path'), $filename);
                $piece->setDossier($filename);
            }
            $conditionGene->setVersion($this->getParameter('version_cg'));
            $em->persist($conditionGene);
            $em->flush();

            return true;
        }
        
        return false;
    }


    /**
     * Displays a form to edit an existing conditionGenerale entity.
     *
     * @Route("/{id}/edit", name="tontine_conditiongenerale_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ConditionGenerale $conditionGenerale)
    {
        $conditionGenerale->setPieces(new \Doctrine\Common\Collections\ArrayCollection());
        $deleteForm = $this->createDeleteForm($conditionGenerale);
        $editForm = $this->createForm('tontineBundle\Form\Type\ConditionGeneraleType', $conditionGenerale);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_conditiongenerale_show', array('id' => $conditionGenerale->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:ConditionGenerale:edit.html.twig', array(
                'conditionGenerale' => $conditionGenerale,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing conditionGenerale entity.
     *
     * @Route("/{id}/edit-form", name="tontine_conditiongenerale_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, ConditionGenerale $conditionGenerale)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\ConditionGeneraleType', $conditionGenerale);
            
        return $this->render('tontineBundle:ConditionGenerale:partials/form.html.twig', array(
            'conditionGenerale' => $conditionGenerale,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a conditionGenerale entity.
     *
     * @Route("/{id}", name="tontine_conditiongenerale_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, ConditionGenerale $conditionGenerale)
    {
        $form = $this->createDeleteForm($conditionGenerale);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($conditionGenerale);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_conditiongenerale_index');
    }

    /**
     * Creates a form to delete a conditionGenerale entity.
     *
     * @param ConditionGenerale $conditionGenerale The conditionGenerale entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ConditionGenerale $conditionGenerale)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_conditiongenerale_delete', array('id' => $conditionGenerale->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
