<?php

namespace tontineApiBundle\Security;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UserAuthTokenProvider implements UserProviderInterface
{
    private $authTokenRepository;

    private $userRepository;

    public function __construct(ObjectManager $entityManager)
    {
        $this->userRepository = $entityManager->getRepository('tontineBundle:Agent');
        $this->authTokenRepository = $entityManager->getRepository('tontineBundle:AuthToken');
    }

    public function getAuthToken($authTokenHeader)
    {
        return $this->authTokenRepository->findOneBy(array('token'  => $authTokenHeader));
    }

    /**
     * {@inheritdoc}
     */
    public function loadUserByUsername($username)
    {
        $user = $this->userRepository->findOneBy(array('email' => $username));
        
        if (!$user) {
            throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        throw new UnsupportedUserException();
    }

    public function supportsClass($class)
    {
        return 'tontineBundle\Entity\Agent' === $class;
    }
}