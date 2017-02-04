<?php

namespace tontineBundle\Manager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DashboardManager
{
    /**
     * @var tontineBundle\Entity\ClientRepository
     */
    private $clientRepository;

    /**
     * @var tontineBundle\Entity\TontineRepository
     */
    private $tontineRepository;

    /**
     * @var tontineBundle\Entity\DepotMiseRepository
     */
    private $miseRepository;

    private $tokenStorage;

    private $authorizationChecker;

    /**
     * Constructor
     */
    public function __construct(EntityManager $entityManager, AuthorizationCheckerInterface $authorizationChecker, $tokenStorage)
    {
        $this->clientRepository = $entityManager->getRepository('tontineBundle:Client');
        $this->authorizationChecker = $authorizationChecker;
        $this->tokenStorage = $tokenStorage;
    }

    public function getDashboardDatas()
    {        
        $data = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_CLIENT_CREATE')) {
            $data['newClientRegistered'] = $this->clientRepository->count([
                'createdBy' => $user,
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return $data;
    }

    public function getAgentTodayRegisteredClients()
    {
        if ($this->authorizationChecker->isGranted('ROLE_CLIENT_CREATE')) {
            $user = $this->tokenStorage->getToken()->getUser();

            return $this->clientRepository->findBy([
                'createdBy' => $user,
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return null;
    }

}