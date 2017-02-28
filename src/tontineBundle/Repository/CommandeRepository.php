<?php

namespace tontineBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CommandeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandeRepository extends EntityRepository
{

    public function search($param, $init = 0, $offset = 100)
    {
        switch ($param->get("active")) {
            case 1:
            case 2:
                return $this->findCommandeWithPagne($param->get("tissu"), $init, $offset);
            case 3:
                $init = (int)$init;
                $offset = (int)$offset;

                $dateL = $param->get("dateMin");
                $dateI = \DateTime::createFromFormat('d/m/Y', $dateL);
                $dateMin = \DateTime::createFromFormat('Y-m-d', $dateI->format('Y-m-d'));

                $dateP = $param->get("dateMax");
                $dateJ = \DateTime::createFromFormat('d/m/Y', $dateP);
                $dateMax = \DateTime::createFromFormat('Y-m-d', $dateJ->format('Y-m-d'));
        
                return $this->getEntityManager()->getRepository("tontineBundle:Commande")
                    ->createQueryBuilder('c')
                    ->where("c.createdAt BETWEEN :start AND :end ")
                    /*->where("c.createdAt >= :start ")
                    ->andwhere("c.createdAt <= :end ")
                    ->orwhere("c.createdAt like :start ")*/
                    ->setFirstResult($init)
                    ->setMaxResults($offset)
                    ->setParameter("start", $dateMin)
                    ->setParameter("end", $dateMax)
                    ->getQuery()
                    ->getResult();

            case 4:
                return $this->findCommandeWithReferenceOrDesignation($param->get("commande"), $init, $offset);
            case 5:
            default :
                return Null;

        }
    }

    public function count($param)
    {
        switch ($param->get("active")) {
            case 1:
            case 2:

                $pagne = $this->getEntityManager()->getRepository("tontineBundle:Pagne")
                    ->createQueryBuilder('p')
                    ->where("p.reference like :tissu")
                    ->setParameter("tissu", "%" . $param->get("tissu") . "%")
                    ->getQuery()
                    ->getResult();

                $pagnes = array();
                $i = 0;
                foreach ($pagne as $list) {
                    $pagnes[$i] = $list->getId();
                    $i++;
                }

                $pagnes = implode(",", $pagnes);

	            if($pagne){
                	$cmd = $this->getEntityManager()->getRepository("tontineBundle:CommandePagne")
                        ->createQueryBuilder('c')
                        ->where("c.pagne in (".$pagnes.")")
                        ->getQuery()
                        ->getResult();
	             
	                $pagnesCmd = array();
	                $i = 0;
	                foreach ($cmd as $value) {
	                    $pagnesCmd[$i] = $value->getId();
	                    $i++;
	                }

	                //$pagnesCmd = implode(",", $pagnesCmd);

                    $retour = $this->getEntityManager()->getRepository("tontineBundle:Commande")
                        ->createQueryBuilder('c')
                        //->select("COUNT(c)")
                        //->where("c.cmdPagne in (".$pagnesCmd.")")
                        ->getQuery()
                        ->getResult();

                    $compteur = 0;

                    foreach ($pagnesCmd as $key) {
                        foreach ($retour as $value) {
                            if($value->getId() == $key) $compteur++;
                        }
                    }

                    return $compteur;

                }else {
                    return 0;
                }
            case 3:

                $dateL = $param->get("dateMin");
                $dateI = \DateTime::createFromFormat('d/m/Y', $dateL);
                $dateMin = \DateTime::createFromFormat('Y-m-d', $dateI->format('Y-m-d'));

                $dateP = $param->get("dateMax");
                $dateJ = \DateTime::createFromFormat('d/m/Y', $dateP);
                $dateMax = \DateTime::createFromFormat('Y-m-d', $dateJ->format('Y-m-d'));

                return $this->getEntityManager()->getRepository("tontineBundle:Commande")
                    ->createQueryBuilder('c')
                    ->select("COUNT(c)")
                    ->where("c.createdAt BETWEEN :start AND :end ")
                    //->where("c.createdAt >= :start ")
                    //->andwhere("c.createdAt <= :end ")
                    ->setParameter("start", $dateMin)
                    ->setParameter("end", $dateMax)
                    ->getQuery()
                    ->getSingleScalarResult();
                
            case 4:

                return $this->getEntityManager()->getRepository("tontineBundle:Commande")
                    ->createQueryBuilder('c')
                    ->select("COUNT(c)")
                    ->where("c.reference like :commande")
                    ->orwhere("c.designation like :commande")
                    ->setParameter("commande", "%" . $param->get("commande") . "%")
                    ->getQuery()
                    ->getSingleScalarResult();

            default :
                return Null;

        }
    }

    public function findCommandeWithPagne($var, $init = 0, $offset = 100)
    {
        $init = (int)$init;
        $offset = (int)$offset;
        $pagne = $this->getEntityManager()->getRepository("tontineBundle:Pagne")
            ->createQueryBuilder('p')
            ->where("p.reference like :tissu")
            ->setParameter("tissu", "%" . $var . "%")
            ->getQuery()
            ->getResult();

        if ($pagne) {
            $pagnes = array();
            $i = 0;
            foreach ($pagne as $list) {
                $pagnes[$i] = $list->getId();
                $i++;
            }

            $pagnes = implode(",", $pagnes);

        	$cmd = $this->getEntityManager()->getRepository("tontineBundle:CommandePagne")
                ->createQueryBuilder('c')
                ->where("c.pagne in (".$pagnes.")")
                ->getQuery()
                ->getResult();

            $pagnesCmd = array();
            $i = 0;
            foreach ($cmd as $value) {
                $pagnesCmd[$i] = $value->getId();
                $i++;
            }

            //$pagnesCmd = implode(",", $pagnesCmd);

            $retour = $this->getEntityManager()->getRepository("tontineBundle:Commande")
                ->createQueryBuilder('c')
                ->setFirstResult($init)
                ->setMaxResults($offset)
                ->orderBy("c.id", "ASC")
                ->getQuery()
                ->getResult();

            $liste = array();
            $i = 0;

            foreach ($pagnesCmd as $key) {
                foreach ($retour as $value) {
                    if($value->getId() == $key){
                        $liste[$i] = $value;
                        $i++;
                    }
                }
            }

            return $liste;
        } else {

            return null;
        }
    }

    public function findCommandeWithReferenceOrDesignation($var, $init = 0, $offset = 100)
    {
        $init = (int)$init;
        $offset = (int)$offset;
        
        return $this->getEntityManager()->getRepository("tontineBundle:Commande")
            ->createQueryBuilder('c')
            ->setFirstResult($init)
            ->setMaxResults($offset)
            ->where("c.reference like :commande")
            ->orwhere("c.designation like :commande")
            ->setParameter("commande", "%" . $var . "%")
            ->getQuery()
            ->getResult();

    }

}
