<?php

namespace App\Fetchers;

use Doctrine\ORM\EntityManagerInterface;
use App\Fetchers\Entities\SomeClientEvents;

/**
 * Class SomeClientEventsFetcher
 * @package App\Fetchers
 */
class SomeClientEventsFetcher extends AbstractFetcher
{
    /**
     * @param $mapper
     * @return mixed|void
     */
    public function fetch($mapper)
    {
        $eventsGroup = [];
        $entityManager = app(EntityManagerInterface::class);
        // prepare data
        foreach (SomeClientEvents::ODD_TYPES as $oddType) {
            $response = $this->getResponse($this->buildURL($oddType));
            $events = new SomeClientEvents($response, $oddType);
            $mapper->prepare($events);
            $eventsGroup[] = $events;
        }
        // map events to matches
        foreach ($eventsGroup as $events) {
            $mapper->map($events);
        }
        // save matches (execute query)
        $entityManager->flush();
    }

    /**
     * @param $oddType
     * @return string
     */
    protected function buildURL($oddType)
    {
        return $this->importConfig['parser']['endpoint']
            . $this->importConfig['parser']['path']
            . $this->importConfig['parser']['query']
            . '&OddsType=' . $oddType;
    }
}
