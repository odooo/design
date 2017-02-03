<?php

namespace tontineBundle\Controller;

use tontineBundle\Entity\DepotMise;
use tontineBundle\Entity\Tontine;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Depotmise controller.
 *
 * @Route("tontines/depot-mise")
 */
class DepotMiseController extends BaseController
{
    /**
     * Lists all depotMise entities.
     *
     * @Route("/", name="tontine_depotmise_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $depotMises = $em->getRepository('tontineBundle:DepotMise')
            ->with('client')
            ->findAll();

        return $this->render('tontineBundle:DepotMise:index.html.twig', array(
            'depotMises' => $depotMises,
            'etat'  => 0,
        ));
    }

    /**
     * Finds and displays a depotMise entity.
     *
     * @Route("/{id}", name="tontine_depotmise_show", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function showAction($id)
    {
        $depotMise = $this->getRepository('tontineBundle:DepotMise')
            ->with('client')
            ->find($id);

        $deleteForm = $this->createDeleteForm($depotMise);

        return $this->render('tontineBundle:DepotMise:show.html.twig', array(
            'depotMise' => $depotMise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a depotMise entity in a popup.
     *
     * @Route("/{id}", name="tontine_depotmise_preview", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function previewAction($id)
    {
        $depotMise = $this->getRepository('tontineBundle:DepotMise')
            ->with('client')
            ->find($id);

        $deleteForm = $this->createDeleteForm($depotMise);

        return $this->render('tontineBundle:DepotMise:partials/item-details.html.twig', array(
            'depotMise' => $depotMise,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a new depotMise entity.
     *
     * @Route("/{tontine}/new", name="tontine_depotmise_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Tontine $tontine)
    {
        $depotMise = new Depotmise();
        $depotMise->setTontine($tontine);
        $depotMise->setClient($tontine->getClient());
        
        $form = $this->createForm('tontineBundle\Form\Type\DepotMiseType', $depotMise);
        
        if ($this->handleForm($request, $form)) {
            if ($request->isXmlHttpRequest()) {                
                return new JsonResponse(array(
                    'success' => true,
                    'mise'    => [
                        'id'      => $depotMise->getId(),
                        'montant' => $depotMise->getMontant(),
                        'date'    => $depotMise->getDate()->format('d/m/Y'),
                    ]
                ));
            } else {
                if ($depotMise->getId() != null) {
                    return $this->redirectToRoute('tontine_depotmise_show', array('id' => $depotMise->getId()));
                } else {
                    return $this->redirectToRoute('tontine_depotmise_index');
                }
            }            
        }

        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $form->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:DepotMise:new.html.twig', array(
                'depotMise' => $depotMise,
                'form' => $form->createView(),
            ));
        }            
    }

    /**
     * Displays a form to create new depotMise entity.
     *
     * @Route("/{tontine}/new-form", name="tontine_depotmise_new_form")
     * @Method({"GET"})
     */
    public function ajaxNewFormAction(Tontine $tontine)
    {   
        $depotMise = new DepotMise();
        $depotMise->setMontant($tontine->getMontant());
        $form = $this->createForm('tontineBundle\Form\Type\DepotMiseType', $depotMise, [
            'action' => $this->generateUrl('tontine_depotmise_new', ['tontine' => $tontine->getId()])
        ]);
            
        return $this->render('tontineBundle:DepotMise:partials/form.html.twig', array(
            'isModal' => true,
            'minMise' => $tontine->getMontant(),
            'form' => $form->createView(),
        ));
    }    

    public function handleForm(Request $request, $form)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $depotMise = $form->getData();
            $tontine = $depotMise->getTontine();
            $em = $this->getDoctrine()->getManager();
            $agent = $this->getUser();

            $agent->setCumulCollecte($agent->getCumulCollecte() + $depotMise->getMontant());
            $tontine->setNbMise($tontine->getNbMise() + $tontine->getMontant());

            $em->persist($depotMise);
            $em->flush();

            return true;
        }        

        return false;
    }


    /**
     * Displays a form to edit an existing depotMise entity.
     *
     * @Route("/{id}/edit", name="tontine_depotmise_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DepotMise $depotMise)
    {
        $deleteForm = $this->createDeleteForm($depotMise);
        $editForm = $this->createForm('tontineBundle\Form\Type\DepotMiseType', $depotMise);
        if ($this->handleForm($request, $editForm)) {
            if ($request->isXmlHttpRequest()) {
                return new JsonResponse(array(
                    'success' => true,
                ));
            } else {
                return $this->redirectToRoute('tontine_depotmise_show', array('id' => $depotMise->getId()));            }
        }

        
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse([
                'success'   => false,
                'errors'    => $editForm->getErrors(true),
            ]);
        } else {
            return $this->render('tontineBundle:DepotMise:edit.html.twig', array(
                'depotMise' => $depotMise,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }
    }

    /**
     * Displays a form to edit an existing depotMise entity.
     *
     * @Route("/{id}/edit-form", name="tontine_depotmise_edit_form")
     * @Method({"GET"})
     */
    public function ajaxEditFormAction(Request $request, DepotMise $depotMise)
    {
        $editForm = $this->createForm('tontineBundle\Form\Type\DepotMiseType', $depotMise);
            
        return $this->render('tontineBundle:DepotMise:partials/form.html.twig', array(
            'depotMise' => $depotMise,
            'isModal' => true,
            'form' => $editForm->createView(),
        ));
    }
    /**
     * Deletes a depotMise entity.
     *
     * @Route("/{id}", name="tontine_depotmise_delete")
     * @Method({"DELETE", "GET"})
     */
    public function deleteAction(Request $request, DepotMise $depotMise)
    {
        $form = $this->createDeleteForm($depotMise);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($depotMise);
            $em->flush();
        }

        return $this->redirectToRoute('tontine_depotmise_index');
    }

    /**
     * Creates a form to delete a depotMise entity.
     *
     * @param DepotMise $depotMise The depotMise entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DepotMise $depotMise)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tontine_depotmise_delete', array('id' => $depotMise->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
