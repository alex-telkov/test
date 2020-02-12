<?php

namespace App\Entities;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\ClientMatchRepository")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="client_discr", type="string")
 * @ORM\DiscriminatorMap({
 *     "some-client" = "ClientMatchSomeClient",
 * })
 * @ORM\Table(name="client_matches")
 *
 * "your-fake-entity" = "ClientMatchFake" add this as another discriminator map
 */
abstract class ClientMatch implements Jsonable, Arrayable, \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="service_match_id", type="integer")
     */
    protected $serviceMatchId;

    /**
     * @ORM\Column(name="parent_service_match_id", type="integer")
     */
    protected $parentServiceMatchId;

    /**
     * @ORM\Column(name="`platform_match_id`")
     */
    protected $platformMatchId;

    /**
     * @ORM\ManyToOne(targetEntity="ClientMatchCompetition")
     * @ORM\JoinColumn(name="competition_id", referencedColumnName="id")
     */
    protected $competition;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entities\Match")
     * @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     * @var \App\Entities\Match $match
     */
    protected $match;

    /**
     * @ORM\ManyToMany(targetEntity="ClientMatch")
     * @ORM\JoinTable(name="client_matches",
     *      joinColumns={@ORM\JoinColumn(name="parent_service_match_id", referencedColumnName="parent_service_match_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="service_match_id", referencedColumnName="service_match_id", unique=true)}
     *      )
     * @var ClientMatch[]|ArrayCollection $childs
     */
    protected $children;

    /**
     * @ORM\ManyToOne(targetEntity="ClientMatchTeam")
     * @ORM\JoinColumn(name="home_team_id", referencedColumnName="id")
     */
    protected $homeTeam;

    /**
     * @ORM\ManyToOne(targetEntity="ClientMatchTeam")
     * @ORM\JoinColumn(name="away_team_id", referencedColumnName="id")
     */
    protected $awayTeam;

    /**
     * @ORM\Column(name="`event_date`", type="datetime")
     */
    protected $eventDate;

    /**
     * @ORM\Column(name="`in_play`", type="boolean")
     */
    protected $inPlay;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $active;

    /**
     * ClientMatch constructor.
     * @param $serviceMatchId
     * @param $parentServiceMatchId
     * @param $competition
     * @param $eventDate
     * @param $homeTeam
     * @param $awayTeam
     * @param $inPlay
     * @param $active
     * @param null $platformMatchId
     * @param null $matchId
     * @param int $autoAssigned
     */
    public function __construct(
        $serviceMatchId,
        $parentServiceMatchId,
        $competition,
        $eventDate,
        $homeTeam,
        $awayTeam,
        $inPlay,
        $active,
        $platformMatchId = null,
        $matchId = null,
        $autoAssigned = 0
    ) {
        $this->initializeArrayCollections();
        $this->setServiceMatchId($serviceMatchId);
        $this->setParentServiceMatchId($parentServiceMatchId);
        $this->setCompetition($competition);
        $this->setEventDate($eventDate);
        $this->setHomeTeam($homeTeam);
        $this->setAwayTeam($awayTeam);
        $this->setInPlay($inPlay);
        $this->setActive($active);
        $this->setPlatformMatchId($platformMatchId);
        $this->setMatch(null);
    }

    /**
     *
     */
    public function initializeArrayCollections()
    {
        $this->children = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $matchId
     */
    public function setServiceMatchId($matchId)
    {
        $this->serviceMatchId = $matchId;
    }

    /**
     * @return mixed
     */
    public function getServiceMatchId()
    {
        return $this->serviceMatchId;
    }

    /**
     * @param $matchId
     */
    public function setParentServiceMatchId($matchId)
    {
        $this->parentServiceMatchId = $matchId;
    }

    /**
     * @return mixed
     */
    public function getParentServiceMatchId()
    {
        return $this->parentServiceMatchId;
    }

    /**
     * @param $competition
     */
    public function setCompetition($competition)
    {
        $this->competition = $competition;
    }

    /**
     * @return mixed
     */
    public function getCompetition()
    {
        return $this->competition;
    }

    /**
     * @return mixed
     */
    public function getCompetitionId()
    {
        return $this->competition ? $this->competition->getId() : null;
    }

    /**
     * @param $eventDate
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;
    }

    /**
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * @param ClientMatchTeam $homeTeam
     */
    public function setHomeTeam($homeTeam)
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return ClientMatchTeam
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param $awayTeam
     */
    public function setAwayTeam($awayTeam)
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return mixed
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param $inPlay
     */
    public function setInPlay($inPlay)
    {
        $this->inPlay = $inPlay;
    }

    /**
     * @return mixed
     */
    public function getInPlay()
    {
        return $this->inPlay;
    }

    /**
     * @param $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @return mixed
     */
    public function getMatchId()
    {
        return ($this->getMatch()) ? $this->getMatch()->getId() : null;
    }

    /**
     * @return App\Entities\Match
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param App\Entities\Match $match
     */
    public function setMatch($match)
    {
        $this->match = $match;
    }

    /**
     * We return only children of same class
     * @return ArrayCollection|ClientMatch[]
     */
    public function getChildren()
    {
        return $this->children->filter(function ($child) {
           return ($child != $this) && (get_class($child) == get_class($this));
        });
    }

    /**
     * @param $platformMatchId
     */
    public function setPlatformMatchId($platformMatchId)
    {
        $this->platformMatchId = $platformMatchId;
    }

    /**
     * @return mixed
     */
    public function getPlatformMatchId()
    {
        return $this->platformMatchId;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'service_match_id' => $this->getServiceMatchId(),
            'parent_service_match_id' => $this->getParentServiceMatchId(),
            'platform_match_id' => $this->getPlatformMatchId(),
            'competition_id' => $this->getCompetitionId(),
            'competition' => $this->getCompetition()->toArray(),
            'match_id' => $this->getMatchId(),
            'auto_assigned' => $this->getAutoAssigned(),
            'home_team_id' => $this->getHomeTeam()->getId(),
            'away_team_id' => $this->getAwayTeam()->getId(),
            'event_date' => $this->getEventDate(),
            'in_play' => $this->getInPlay(),
            'active' => $this->getActive(),
        ];
    }

    /**
     * @param int $options
     * @return string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }
}
