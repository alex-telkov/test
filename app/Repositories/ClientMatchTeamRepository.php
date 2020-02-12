<?php

namespace App\Repositories;

/**
 * Class ClientMatchTeamRepository
 * @package App\Repositories
 */
class ClientMatchTeamRepository extends BaseRepository
{
    /**
     * @param $name
     * @param null $game
     * @return mixed
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getOneByPartialName($name)
    {
        return $this
            ->createQueryBuilder('tm')
            ->andWhere('tm.teamName = :name')
            ->setParameter('name', $name)
            ->getQuery()
            ->getOneOrNullResult();
    }
}

