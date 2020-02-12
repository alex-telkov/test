<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\ClientMatchCompetitionRepository")
 * @ORM\Table(name="client_matches_competitions")
 */
class ClientMatchCompetition implements Jsonable, Arrayable, \JsonSerializable
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(name="competition_name")
     */
    protected $competitionName;

    /**
     * ClientMatchCompetition constructor.
     * @param $competitionName
     */
    public function __construct($competitionName)
    {
        $this->setCompetitionName($competitionName);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCompetitionName()
    {
        return $this->competitionName;
    }

    /**
     * @param mixed $competitionName
     */
    public function setCompetitionName($competitionName)
    {
        $this->competitionName = $competitionName;
    }


    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'id' => $this->getId(),
            'competition_name' => $this->getCompetitionName(),
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
