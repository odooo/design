<?php

namespace tontineBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("caisse")
 */
class CaisseController extends BaseController
{
    /**
     * @Route("/", name="tontine_caisse_home")
     * @Security("has_role('ROLE_TONTINE_VALIDATE_MISE')")
     */
    public function caisseAction(Request $request)
    {
        $agents = $this->getRepository('tontineBundle:Agent')
            ->with('profil')
            ->findAll();

        return $this->render('tontineBundle:Caisse:home.html.twig', [
            'agents'    => $agents,
        ]);
    }
}