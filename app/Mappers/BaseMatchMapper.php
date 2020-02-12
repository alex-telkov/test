<?php

namespace App\Mappers;

use App\Repositories\BaseRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repositories\ClientMatchCompetitionRepository;
use App\Repositories\ClientMatchTeamRepository;

abstract class BaseMatchMapper
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * @var mixed
     */
    protected $entity;

    /**
     * @var mixed
     */
    protected $outrightMarketEntity;

    /**
     * @var BaseRepository
     */
    protected $repository;

    /**
     * @var ClientMatchCompetitionRepository
     */
    protected $clientCompetitionRepository;

    /**
     * @var ClientMatchTeamRepository
     */
    protected $clientTeamRepository;

    /**
     * @var array
     */
    protected $competitions = [];

    /**
     * @var array
     */
    protected $teams = [];


    /**
     * BaseMatchMapper constructor.
     * @param $entityClass
     */
    public function __construct($entityClass)
    {
        $this->em = app(EntityManagerInterface::class);
        $this->entity = $entityClass;
        $this->repository = $this->em->getRepository($this->entity);
        $this->clientCompetitionRepository = app(ClientMatchCompetitionRepository::class);
        $this->clientTeamRepository = app(ClientMatchTeamRepository::class);
    }

    /**
     * @param $events
     * @return array
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    abstract public function map($events);

    /**
     * @param $events
     */
    abstract public function prepare($events);

    /**
     * @param $competitionName
     * @return mixed
     */
    protected function mapCompetition($competitionName)
    {
        return $this->competitions[$competitionName];
    }

    /**
     * It's search clientMatchTeam with game, if it's cant find it's auto create it
     * Always return a clientMatchTeam
     *
     * @param $teamName
     * @param $game
     * @return mixed
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function mapTeam($teamName)
    {
        return $this->teams[$teamName];
    }
}
