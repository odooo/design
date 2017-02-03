<?php

namespace tontineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

use tontineBundle\Entity\Agency;
use tontineBundle\Form\Type\AgencyType;

/**
 * @Route("agences")
 */
class AgencyController extends BaseController
{
    /**
     * @Route("/", name="tontine_agencies_index")
     * @Security("has_role('ROLE_AGENCY_VIEW')")
     */
    public function indexAction()
    {
        $agencies = $this->getRepository('tontineBundle:Agency')->findAll();

        return $this->render('tontineBundle:Agency:index.html.twig', [
            'agencies' => $agencies,
        ]);
    }

    /**
     * Show and validate agency creation form
     *
     * @Route("/create", name="tontine_agencies_create")
     * @Security("has_role('ROLE_AGENCY_CREATE')")
     */
    public function createAction(Request $request)
    {
        return $this->createOrEditAgency($request, new Agency());
    }

    /**
     * Show and validate agency editon form
     *
     * @Route("/{id}/edit", name="tontine_agencies_edit")
     * @Security("has_role('ROLE_AGENCY_EDIT')")
     */
    public function editAction(Request $request, Agency $agency)
    {
        return $this->createOrEditAgency($request, $agency);
    }

    private function createOrEditAgency(Request $request, Agency $agency)
    {
        $form = $this->createForm(AgencyType::class, $agency);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            $em = $this->getEntityManager();

            $em->persist($agency);
            $em->flush();

            return $this->redirectToRoute('tontine_agencies_index');
        }

        return $this->render('tontineBundle:Agency:edit.html.twig', [
            'form'  => $form->createView(),
        ]);
    }
}
