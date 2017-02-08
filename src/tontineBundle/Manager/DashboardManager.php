<?php

namespace tontineBundle\Manager;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class DashboardManager
{
    /**
     * @var tontineBundle\Repository\ClientRepository
     */
    private $clientRepository;

    /**
     * @var tontineBundle\Repository\CommandeRepository
     */
    private $commandeRepository;

    private $tokenStorage;

    private $authorizationChecker;

    /**
     * Constructor
     */
    public function __construct(EntityManager $entityManager, AuthorizationCheckerInterface $authorizationChecker, $tokenStorage)
    {
        $this->clientRepository = $entityManager->getRepository('tontineBundle:Client');
        $this->commandeRepository = $entityManager->getRepository('tontineBundle:Commande');
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

    public function getDashCommandeDatas()
    {        
        $data2 = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_COMMANDE_CREATE')) {
            $data2['newCommandeRegistered'] = $this->commandeRepository->count([
                'createdBy' => $user,
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return $data2;
    }

    public function getDashVenteDatas()
    {        
        $data3 = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_COMMANDE_CREATE')) {
            $data3['newVenteRegistered'] = $this->commandeRepository->count([
                'createdBy' => $user,
                'typeCommande' => 'v',
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return $data3;
    }

    public function getDashMainDatas()
    {        
        $data = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_COMMANDE_CREATE')) {
            $data['newMainRegistered'] = $this->commandeRepository->count([
                'createdBy' => $user,
                'typeCommande' => 'm',
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return $data;
    }

    public function getDashModeleDatas()
    {        
        $data = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_COMMANDE_CREATE')) {
            $data['newModeleRegistered'] = $this->commandeRepository->count([
                'createdBy' => $user,
                'typeCommande' => 'a',
                ['createdAt', 'like', date('Y-m-d')]
            ]);
        }

        return $data;
    }

    public function getDashClientDatas()
    {        
        $data1 = [];
        $user = $this->tokenStorage->getToken()->getUser();

        if ($this->authorizationChecker->isGranted('ROLE_CLIENT_CREATE')) {
            $data1['clientList'] = $this->clientRepository
            ->findBy(array(), array('createdAt'  => 'DESC'),4);
        }

        return $data1;
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