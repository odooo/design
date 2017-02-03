<?php

namespace tontineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AuthToken
 *
 * @ORM\Table(name="auth_token")
 * @ORM\Entity(repositoryClass="tontineApiBundle\Repository\AuthTokenRepository")
 * @ORM\Table(name="auth_tokens",
 *      uniqueConstraints={@ORM\UniqueConstraint(name="auth_tokens_token_unique", columns={"token"})}
 * )
 */
class AuthToken
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255, unique=true)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * [$user description]
     * @var [type]
     *
     * @ORM\ManyToOne(targetEntity="tontineBundle\Entity\Agent")
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return AuthToken
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return AuthToken
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set user
     *
     * @param \tontineBundle\Entity\Agent $user
     *
     * @return AuthToken
     */
    public function setUser(\tontineBundle\Entity\Agent $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \tontineBundle\Entity\Agent
     */
    public function getUser()
    {
        return $this->user;
    }
}
