<?php

namespace tontineBundle\Manager;

class AgentGroupManager
{
    private $roles;

    private $defaultRoles;

    public function __construct($rolesGroups, $defaultRoles)
    {
        $this->roles = [];

        foreach ($rolesGroups as $group) {
            $this->roles[$group['label']] = $group['roles'];
        }

        $this->defaultRoles = $defaultRoles;
    }

    /**
     * Get all roles
     */
    public function getAllRoles()
    {
        return $this->roles;
    }

    /**
     *
     */
    public function getDefaultRoles()
    {
        return $this->defaultRoles;
    }
}