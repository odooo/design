<?php

namespace tontineBundle\Controller\Agent;

use tontineBundle\Controller\BaseController;
use tontineBundle\Entity\AgentGroup;
use tontineBundle\Form\Type\AgentGroupType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Request;

/**
 * Agent group controller
 *
 * @Route("agents/groups")
 */
class GroupController extends BaseController
{
    /**
     * Display list of all agent groups
     *
     * @Route("/", name="tontine_agents_groups_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $groups = $this->getRepository('tontineBundle:AgentGroup')->findAll();
        
        return $this->render('tontineBundle:Agent:Group/index.html.twig', [
            'groups' => $groups,
        ]);
    }

    /**
     * Show and validate new agent group creation form
     *
     * @Route("/create", name="tontine_agents_groups_create")
     * @Method({"GET", "POST"})
     */
    public function createAction(Request $request)
    {
        if ($request->query->has('group')) {
            $group = $this->getRepository('tontineBundle:AgentGroup')->find($request->get('group'));
        } 
        
        if (!isset($group)) {
            $group = new AgentGroup();
            foreach ($this->get('tontine.manager.group')->getDefaultRoles() as $role) {
                $group->addRole($role);
            }
        }                    

        $form = $this->createForm(AgentGroupType::class, $group, [
            'roles' => $this->get('tontine.manager.group')->getAllRoles(),
        ]);        

        if ($this->handleForm($form, $request)) {
            return $this->redirectToRoute('tontine_agents_groups_index');
        }

        return $this->render('tontineBundle:Agent:Group/create.html.twig', [
            'form'  => $form->createView(),
        ]);
    }

    /**
     * Show and validate new agent group edition form
     *
     * @Route("/{id}/edit", name="tontine_agents_groups_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, AgentGroup $group)
    {
        $roles = $this->get('tontine.manager.group')->getAllRoles();
        
        $form = $this->createForm(AgentGroupType::class, $group, [
            'roles' => $roles,
        ]);        

        if ($this->handleForm($form, $request)) {
            return $this->redirectToRoute('tontine_agents_groups_index');
        }
        
        return $this->render('tontineBundle:Agent:Group/edit.html.twig', [
            'form'  => $form->createView(),
        ]);
    }

    private function handleForm($form, $request)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getEntityManager();
            $em->persist($form->getData());
            $em->flush();

            return true;            
        }

        return false;
    }
}

