<?php

namespace tontineBundle\Repository;

use EldoMagan\Doctrine\ORM\BaseRepository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends BaseRepository
{
    public function findForToDay($user){
        $query = $this->createQueryBuilder('c')->
                where('c.createdBy = :u')->andWhere('c.createdAt LIKE :d')
        ->setParameters(array('d' =>(new \DateTime())->format("Y-m-d").'%', 'u' => $user))
        ->getQuery();

        return $query->getResult();
    }

}
