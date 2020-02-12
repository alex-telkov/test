<?php

namespace App\Repositories;

use App\Entities\RepositoryEntity;
use Doctrine\ORM\EntityRepository;

/**
 * Class BaseRepository
 * @package App\Repositories
 */
abstract class BaseRepository extends EntityRepository
{

    /**
     * @param RepositoryEntity $entity
     * @param array $fields
     * @return RepositoryEntity
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function save(RepositoryEntity $entity, array $fields = [])
    {
        foreach ($fields as $field => $value) {
            $entity->set($field, $value);
        }

        $this->getEntityManager()->persist($entity);
        $this->getEntityManager()->flush();
        return $entity;
    }

    /**
     * @param RepositoryEntity $entity
     * @param $fields
     * @return RepositoryEntity
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function update(RepositoryEntity $entity, $fields)
    {
        return $this->save($entity, $fields);
    }

    /**
     * @param RepositoryEntity $entity
     * @throws \Doctrine\ORM\ORMException
     * @throws \Doctrine\ORM\OptimisticLockException
     */
    public function remove(RepositoryEntity $entity)
    {
        $this->getEntityManager()->remove($entity);
        $this->getEntityManager()->flush();
    }

    /**
     * @return object|null
     */
    public function first()
    {
        return $this->findOneBy([]);
    }

    /**
     * @return array
     */
    public function getAll()
    {
        return parent::findAll();
    }

    /**
     * @param $value
     * @param string $field
     * @return object|null
     * @throws \Exception
     */
    public function findOrFail($value, $field = 'id')
    {
        if ($entity = $this->findOneBy([$field => $value])) {
            return $entity;
        }
        $message = 'Resource entity ['.$this->_entityName.'] with '.$field. ' ' . $value . ' not found.';
        throw new \Exception($message, 404);
    }
}
