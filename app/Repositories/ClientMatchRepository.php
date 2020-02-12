<?php

namespace App\Repositories;

/**
 * Class ClientMatchRepository
 * @package App\Repositories
 */
class ClientMatchRepository extends BaseRepository
{

    /**
     * @param $serviceMatchId
     * @return int
     */
    public function getRefreshedByServiceMatchId($serviceMatchId)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.serviceMatchId = :matchId')
            ->setParameter('matchId', $serviceMatchId)
            ->getQuery()
            ->getFirstResult();
    }

    /**
     *
     */
    public function getAllActiveUnassigned()
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.match is NULL')
            ->andWhere('p.autoAssigned = 0')
            ->andWhere('p.active = 1')
            ->orderBy('p.inPlay', 'DESC')
            ->orderBy('p.eventDate', 'ASC')
            ->getQuery()
            ->getResult();
    }

    /**
     * @param $serviceMatchId
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getOneByServiceMatchId($serviceMatchId, $parentServiceMatchId)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.serviceMatchId = :serviceMatchId')
            ->andWhere('p.parentServiceMatchId = :parentServiceMatchId')
            ->setParameter('serviceMatchId', $serviceMatchId)
            ->setParameter('parentServiceMatchId', $parentServiceMatchId)
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * @return \Doctrine\ORM\EntityManager
     */
    public function getEm()
    {
        return $this->getEntityManager();
    }

    /**
     * @return bool
     */
    public function isClientMatchRepository()
    {
        return true;
    }
}
