<?php

namespace tontineApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations as Rest;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use tontineApiBundle\Entity\Credentials;
use tontineApiBundle\Form\CredentialsType;
use tontineBundle\Entity\AuthToken;

class SecurityController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Post("/authenticate")
     */
    public function postAuthenticateAction(Request $request)
    {   
        $credentials = new Credentials();
        $form = $this->createForm(CredentialsType::class, $credentials);
        
        $form->submit($request->request->all());

        if (!$form->isValid()) {
            return $form;
        }

        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('tontineBundle:Agent')
            ->findOneBy(array('email' => $credentials->getUsername()));

        if (!$user) {                
            return \FOS\RestBundle\View\View::create(['message' => 'Invalid credentials'], Response::HTTP_BAD_REQUEST);
        }        

        $encoder = $this->get('security.password_encoder');
        $isPasswordValid = $encoder->isPasswordValid($user, $credentials->getPassword());

        if (!$isPasswordValid) {
            return \FOS\RestBundle\View\View::create(['message' => 'Invalid credentials'], Response::HTTP_BAD_REQUEST);   
        }        

        $authToken = new AuthToken();
        $authToken->setToken(base64_encode(random_bytes(50)));
        $authToken->setCreatedAt(new \DateTime('now'));
        $authToken->setUser($user);

        $em->persist($authToken);
        $em->flush();

        return $authToken;
    }
}
