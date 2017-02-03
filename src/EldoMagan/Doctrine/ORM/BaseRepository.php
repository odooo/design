<?php

namespace EldoMagan\Doctrine\ORM;

use Doctrine\ORM\QueryBuilder;

/**
 * BaseRepository
 * 
 */
class BaseRepository extends \Doctrine\ORM\EntityRepository
{
    private $relationsToLoad = array();

    /**
     * @param mixed $relations
     */
    public function with($relations)
    {
        if (is_string($relations)) {
            $relations = func_get_args();
        }

        foreach ($relations as $relation) {

            if ($this->_class->hasAssociation($relation)) {

                $this->relationsToLoad[] = $relation;
            }
        }

        return $this;
    }

    public function __call($method, $args)
    {
        if (strpos($method, 'with') === 0) {

            $relation = lcfirst(substr($method, '4'));
            return $this->with($relation);
        }
    }

    /**
     * Find entity by id
     *
     * @param mixed $id
     *
     * @return null|object
     */
    public function find($id)
    {
        if (count($this->relationsToLoad) == 0) {
            return parent::find($id);
        }

        $queryBuilder = $this->getQueryBuilder();        

        $this->applyRelations($queryBuilder);

        $queryBuilder->andWhere($this->getPropertyName('id') . ' = :id');
        $queryBuilder->setParameter('id', intval($id));

        $this->resetRelationToLoad();

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }

    /**
     * Find all entities
     *
     * @return array
     */
    public function findAll()
    {
        if (count($this->relationsToLoad) == 0) {
            return parent::findAll();
        }

        $queryBuilder = $this->getQueryBuilder();
        
        $this->applyRelations($queryBuilder);

        $this->resetRelationToLoad();

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * Find one entity by $criteria
     *
     * @param array $criteria
     *
     * @return null|object
     */
    public function findOneBy(array $criteria = array())
    {
        if (count($this->relationsToLoad) == 0) {
            return parent::findOneBy($criteria);
        }

        $queryBuilder = $this->getQueryBuilder();

        $this->applyRelations($queryBuilder);
        $this->applyCriteria($queryBuilder, $criteria);

        $this->resetRelationToLoad();

        return $queryBuilder->getQuery()->getOneOrNullResult();
    }

    /**
     * @param array $criteria
     * @param array $orderBy
     * @param int   $limit
     * @param int   $offset
     *
     * @return array
     */
    public function findBy(array $criteria = array(), array $orderBy = null, $limit = null, $offset = null)
    {
        /*if (count($this->relationsToLoad) == 0) {
            return parent::findBy($criteria, $orderBy, $limit, $offset);
        }*/

        $queryBuilder = $this->getQueryBuilder();

        $this->applyRelations($queryBuilder);
        $this->applyCriteria($queryBuilder, $criteria);
        $orderBy != null and $this->applyOrderBy($queryBuilder, $orderBy);

        if (null !== $limit) {
            $queryBuilder->setMaxResults($limit);
        }

        if (null !== $offset) {
            $queryBuilder->setFirstResult($offset);
        }

        $this->resetRelationToLoad();   

        return $queryBuilder->getQuery()->getResult();
    }

    /**
     * @param  array  $criteria 
     * 
     * @return integer           
     */
    public function count(array $criteria = array())    
    {
        $queryBuilder = $this->getQueryBuilder();
        $this->applyCriteria($queryBuilder, $criteria);

        $queryBuilder->select('COUNT('. $this->getAlias() .')');

        return $queryBuilder
            ->getQuery()
            ->getSingleScalarResult();
    }

    public function sum($field, array $criteria = array())
    {
        $queryBuilder = $this->getQueryBuilder();
        $this->applyCriteria($queryBuilder, $criteria);

        $queryBuilder->select(sprintf("SUM(%s.%s)", $this->getAlias(), $field));

        return $queryBuilder
            ->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @return QueryBuilder
     */
    protected function getQueryBuilder()
    {
        return $this->createQueryBuilder($this->getAlias());
    }

    /**
     * @param QueryBuilder
     */
    protected function applyRelations(QueryBuilder $queryBuilder)
    {
        foreach ($this->relationsToLoad as $relation) {
            $queryBuilder->leftJoin($this->getPropertyName($relation), $relation);
            $queryBuilder->addSelect($relation);
        }        
    }


    /**
     * @param QueryBuilder $queryBuilder
     * @param array        $criteria
     */
    protected function applyCriteria(QueryBuilder $queryBuilder, array $criteria = array())
    {
        foreach ($criteria as $property => $value) {            

            if (is_integer($property) && is_array($value) && count($value) == 3) {
                
                list($property, $operator, $val) = $value;
                $name = $this->getPropertyName($property);
                
                switch ($operator) {

                    case 'like':
                        $parameter = str_replace('.', '_', $property);
                        $queryBuilder
                            ->andWhere(sprintf("%s LIKE :%s", $name, $parameter))
                            ->setParameter($parameter, '%'. $val .'%');
                        break;
                    default:
                        $parameter = str_replace('.', '_', $property);
                        $queryBuilder
                            ->andWhere(sprintf("%s %s :%s", $name, $operator, $parameter))
                            ->setParameter($parameter, $val);
                        break;
                }

            } else {

                $name = $this->getPropertyName($property);

                if ($value === null) {

                    $queryBuilder->andWhere($queryBuilder->expr()->isNull($name));

                } elseif (is_array($value)) {

                    $queryBuilder->andWhere($queryBuilder->expr()->in($name, $value));

                } elseif ($value !== '') {

                    $parameter = str_replace('.', '_', $property);
                    $queryBuilder
                        ->andWhere($queryBuilder->expr()->eq($name, ':'.$parameter))
                        ->setParameter($parameter, $value)
                    ;
                }
            }
        }
    }

    /**
     * @param QueryBuilder $queryBuilder
     * @param array        $orderBy
     */
    protected function applyOrderBy(QueryBuilder $queryBuilder, array $orderBy = array())
    {
        foreach ($orderBy as $property => $order) {

            if (!empty($order)) {

                $queryBuilder->addOrderBy($this->getPropertyName($property), $order);
            }
        }
    }

    /**
     * @param string $name
     *
     * @return string
     */
    protected function getPropertyName($name)
    {
        if (strpos($name, '.') === false) {
            return $this->getAlias().'.'.$name;
        }

        return $name;
    }

    /**
     * @return string
     */
    protected function getAlias()
    {
        return $this->getEntityName();
    }

    protected function resetRelationToLoad()
    {
        $this->relationsToLoad = array();
    }
}