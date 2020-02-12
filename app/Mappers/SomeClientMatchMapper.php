<?php

namespace App\Mappers;

use App\Entities\ClientMatchCompetition;
use App\Entities\ClientMatchTeam;
use App\Fetchers\Entities\SomeClientEvents;

class SomeClientMatchMapper extends BaseMatchMapper
{
    /**
     * @param $events
     * @return array
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function map($events)
    {
        $entities = [];
        $activeList = [];
        $this->prepare($events);
        foreach ($events->getAsArray() as $event) {
            $clientMatch = $this->createOrUpdateClientMatch($event);
            $entities[$event->eventId] = $clientMatch;
            $activeList[$clientMatch->getId()] = true;
        }
        $this->deactivateNonPresented($activeList);
        return $entities;
    }

    /**
     * Clean up active / deactivate old ones and call mass invalidation
     */
    protected function deactivateNonPresented($activeList)
    {
        $activeCMs = $this->repository->findBy(['active' => 1]);
        foreach ($activeCMs as $clientMatch) {
            if (!isset($activeList[$clientMatch->getId()])) {
                $clientMatch->setActive(0);
            }
        }
        $this->em->flush();
    }

    /**
     * @param $event

     * @return mixed
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function make($event)
    {
        $eventDate = new \DateTime('@' . ($event->eventDate / 1000), new \DateTimeZone('UTC'));
        $competition = $this->mapCompetition($event->competitionName);
        $homeTeam = $this->mapTeam($event->data->Home);
        $awayTeam = $this->mapTeam($event->data->Away);
        $entity = new $this->entity(
            $event->eventId,
            $event->parentEventId,
            $competition,
            $eventDate,
            $homeTeam,
            $awayTeam,
            $event->inPlay,
            1
        );
        $entity->setMatch(null);
        $entity->setSpecialName(isset($event->data->SpecialEventName) ? $event->data->SpecialEventName : null);
        return $entity;
    }

    /**
     * @param $event
     * @return mixed
     * @throws \Doctrine\DBAL\DBALException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    protected function createOrUpdateClientMatch($event)
    {
        $entity = $this->repository->getOneByServiceMatchId(
            (int)$event->eventId,
            (int)$event->parentEventId
        );
        if (is_null($entity)) {
            $entity = $this->make($event);
        }
        $entity = $this->update($entity, $event);
        $this->em->persist($entity);
        $this->em->flush();
        return $entity;
    }

    /**
     * @param $entity
     * @param $event
     * @return mixed
     */
    protected function update($entity, $event)
    {
        switch ($event->oddType) {
            case SomeClientEvents::ODD_TYPE_DECIMAL:
                $entity->setOdds($event->odds);
                $entity->setNewOdds($event->newOdds);
                break;
            case SomeClientEvents::ODD_TYPE_HK:
                $entity->setOddsHk($event->odds);
                $entity->setNewOddsHk($event->newOdds);
                break;
            case SomeClientEvents::ODD_TYPE_MALAY:
                $entity->setOddsMalay($event->odds);
                $entity->setNewOddsMalay($event->newOdds);
                break;
            case SomeClientEvents::ODD_TYPE_INDO:
                $entity->setOddsIndo($event->odds);
                $entity->setNewOddsIndo($event->newOdds);
                break;
            default:
                break;
        }
        $eventDate = new \DateTime('@' . ($event->eventDate / 1000), new \DateTimeZone('UTC'));
        $entity->setSpecialName(isset($event->data->SpecialEventName) ? $event->data->SpecialEventName : null);
        $entity->setEventDate($eventDate);
        $entity->setInPlay($event->inPlay);
        $entity->setActive(1);
        return $entity;
    }

    /**
     * @param $entity
     * @param $event
     * @return mixed
     */
    protected function updateOutrightMarket($entity, $event)
    {
        $entity->setOdds($event->newOdds);
        $entity->setActive(1);
        return $entity;
    }

    /**
     * @param $events
     * @throws \Doctrine\DBAL\DBALException
     */
    public function prepare($events)
    {
        $competitionNames = $events->getAllCompetitionNames();
        foreach ($competitionNames as $competitionName) {
            $competitionName = trim($competitionName);
            if (!isset($this->competitions[$competitionName])) {
                if (!is_null($competition = $this->clientCompetitionRepository->findOneByCompetitionName($competitionName))) {
                    $this->competitions[$competitionName] = $competition;
                } else {
                    $this->competitions[$competitionName] = new ClientMatchCompetition($competitionName);
                    $this->em->persist($this->competitions[$competitionName]);
                    $this->em->flush();
                }
            }
        }
        $teamNames = $events->getAllTeamNames();
        foreach ($teamNames as $teamName) {
            if (!isset($this->teams[$teamName])) {
                if (!is_null($clientTeam = $this->clientTeamRepository->findOneByTeamName($competitionName))) {
                    $this->teams[$teamName] = $clientTeam;
                } else {
                    $this->teams[$teamName] = new ClientMatchTeam($teamName);
                    $this->em->persist($this->teams[$teamName]);
                    $this->em->flush();
                }
            }
        }
    }
}
