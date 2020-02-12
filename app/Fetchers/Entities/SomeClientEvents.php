<?php

namespace App\Fetchers\Entities;

/**
 * Class SomeClientEvents
 * @package App\Fetches\Entities
 */
class SomeClientEvents extends AbstractEvents
{
    /**
     * @var array|null
     */
    protected $outrights = null;

    /**
     * @var array|null
     */
    protected $outrightPresented = null;

    /**
     * @var null
     */
    protected $oddType = null;

    /**
     * SomeClientEvents constructor.
     * @param $events
     * @param $oddType
     */
    public function __construct($events, $oddType)
    {
        $this->data = $events;
        $this->oddType = $oddType;
        $eventsIDs = [];
        $outrightEventsIDs = [];
        $competitionNames = [];
        $teamNames = [];
        $all = [];
        $outrights = [];
        foreach ($this->data->{'further-evs'} ?? [] as $k => $competition) {
            foreach ($competition->events as $event) {
                $eventsIDs[] = $event->eventId;
                $event->competitionId = $competition->competitionId;
                $event->competitionName = trim($competition->competitionName);
                $event->competitionNo = $competition->competitionNo ?? 0;
                $event->oddType = $this->oddType;
                $event->inPlay = 0;
                $all[] = $event;
                $competitionNames[] = trim($competition->competitionName);
                $teamNames[] = $event->data->Home;
                $teamNames[] = $event->data->Away;
            }
        }
        foreach ($this->data->{'inplay-evs'} ?? [] as $k => $competition) {
            foreach ($competition->events as $event) {
                $eventsIDs[] = $event->eventId;
                $event->competitionId = $competition->competitionId;
                $event->competitionName = $competition->competitionName;
                $event->competitionNo = $competition->competitionNo ?? 0;
                $event->oddType = $this->oddType;
                $event->inPlay = 1;
                $all[] = $event;
                $competitionNames[] = trim($competition->competitionName);
                $teamNames[] = $event->data->Home;
                $teamNames[] = $event->data->Away;
            }
        }
        foreach ($this->data->{'outright-evs'} ?? [] as $k => $tournament) {
            foreach ($tournament->outrights as $event) {
                $outrightEventsIDs[] = $event->eventId;
                $event->competitionId = $tournament->competitionId;
                $event->competitionName = trim($tournament->competitionName);
                $event->competitionNo = $tournament->competitionNo ?? 0;
                $outrights[] = $event;
                $competitionNames[] = trim($tournament->competitionName);
            }
        }
        $this->all = $all;
        $this->outrights = $outrights;
        $this->presented = array_keys(array_flip($eventsIDs));
        $this->outrightPresented = $outrightEventsIDs;
        $this->allCompetitionNames = array_values(array_unique($competitionNames));
        $this->allTeamNames = array_values(array_unique($teamNames));
    }

    /**
     * @return array|null
     */
    public function getOutrightArray()
    {
        return $this->outrights;
    }

    /**
     * @return array|mixed
     */
    public function presented()
    {
        return $this->presented;
    }

    /**
     * @return array|null
     */
    public function outrightPresented()
    {
        return $this->outrightPresented;
    }

    /**
     * @return mixed
     */
    public function getAsIs()
    {
        return $this->data;
    }
}
