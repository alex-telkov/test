<?php

namespace App\Entities;

use Carbon\Carbon;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Criteria;
use Doctrine\Common\Collections\Expr\Comparison;
use Doctrine\ORM\Mapping as ORM;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\MatchRepository")
 * @ORM\Table(name="matches")
 */
class Match implements Jsonable, Arrayable, \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Roster")
     * @var Roster|null $winner
     */
    protected $winner;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entities\Roster", cascade={"persist", "merge", "detach", "refresh"})
     * @ORM\JoinTable(
     *  name="match_opponents",
     *  joinColumns={
     *      @ORM\JoinColumn(name="match_id", referencedColumnName="id")
     *  },
     *  inverseJoinColumns={
     *      @ORM\JoinColumn(name="roster_id", referencedColumnName="id")
     *  }
     * )
     * @var Roster[]|ArrayCollection
     */
    protected $opponents;

    /**
     * @ORM\Column(type="string")
     */
    protected $start;

    /**
     * @ORM\Column(type="integer")
     */
    protected $status;

    /**
     * @var string
     * @ORM\Column(name="created_at")
     */
    protected $createdAt;

    /**
     * @var string
     * @ORM\Column(name="updated_at")
     */
    protected $updatedAt;

    /**
     * Roster constructor.
     */
    public function __construct()
    {
        $this->setCreatedAt(Carbon::now()->toDateTimeString());
        $this->setUpdatedAt(Carbon::now()->toDateTimeString());
        $this->initializeArrayCollections();
    }

    /**
     *
     */
    public function initializeArrayCollections()
    {
        $this->opponents = new ArrayCollection();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Roster|null
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * @param Roster|null $winner
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;
    }

    /**
     * @return Roster[]|null
     */
    public function getLosers()
    {
        return !is_null($win = $this->winner) ? $this->getOrderedOpponents()->filter(function ($opponent) use ($win) {
            return $opponent != $win;
        }) : null;
    }

    /**
     * @return mixed
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * @param mixed $start
     */
    public function setStart($start)
    {
        $this->start = $start;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return ArrayCollection|Roster[]
     */
    public function getOpponents()
    {
        return $this->opponents;
    }

    /**
    /**
     * @param Roster[] ...$opponents
     */
    public function addOpponents(Roster ...$opponents)
    {
        foreach ($opponents as $opponent) {
            if (!$this->opponents->matching(new Criteria(new Comparison('roster', '=', $opponent)))->first()) {
                $this->opponents->add($opponent);
            }
        }
    }

    /**
     * @param ArrayCollection|Roster[] $opponents
     */
    public function setOpponents(...$opponents)
    {
        $this->opponents->clear();
        $this->addOpponents(...$opponents);
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param mixed $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param string $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @param int $options
     * @return false|string
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

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'created_at' => $this->getCreatedAt(),
            'deleted_at' => $this->getDeletedAt()
        ];
    }
}
