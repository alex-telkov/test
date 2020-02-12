<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;
use Illuminate\Validation\Rule;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\ClientMatchSomeClientRepository")
 * @ORM\Table(name="client_matches_some_client")
 */
class ClientMatchSomeClient extends ClientMatch
{
    /**
     * @ORM\Column(type="json_array")
     */
    protected $odds = [];

    /**
     * @ORM\Column(name="`new_odds`", type="json_array")
     */
    protected $newOdds = [];

    /**
     * @ORM\Column(name="`odds_hk`", type="json_array")
     */
    protected $oddsHk = [];

    /**
     * @ORM\Column(name="`new_odds_hk`", type="json_array")
     */
    protected $newOddsHk = [];

    /**
     * @ORM\Column(name="`odds_malay`", type="json_array")
     */
    protected $oddsMalay = [];

    /**
     * @ORM\Column(name="`new_odds_malay`", type="json_array")
     */
    protected $newOddsMalay = [];

    /**
     * @ORM\Column(name="`odds_indo`", type="json_array")
     */
    protected $oddsIndo = [];

    /**
     * @ORM\Column(name="`new_odds_indo`", type="json_array")
     */
    protected $newOddsIndo = [];

    /**
     * @ORM\Column(name="`special_name`")
     */
    protected $specialName;

    /**
     * @return mixed
     */
    public function getOdds()
    {
        return $this->odds;
    }

    /**
     * @param mixed $odds
     */
    public function setOdds($odds)
    {
        $this->odds = $odds;
    }

    /**
     * @return mixed
     */
    public function getNewOdds()
    {
        return $this->newOdds;
    }

    /**
     * @param mixed $newOdds
     */
    public function setNewOdds($newOdds)
    {
        $this->newOdds = $newOdds;
    }

    /**
     * @return mixed
     */
    public function getOddsHk()
    {
        return $this->oddsHk;
    }

    /**
     * @param mixed $oddsHk
     */
    public function setOddsHk($oddsHk)
    {
        $this->oddsHk = $oddsHk;
    }

    /**
     * @return mixed
     */
    public function getNewOddsHk()
    {
        return $this->newOddsHk;
    }

    /**
     * @param mixed $newOddsHk
     */
    public function setNewOddsHk($newOddsHk)
    {
        $this->newOddsHk = $newOddsHk;
    }

    /**
     * @return mixed
     */
    public function getOddsMalay()
    {
        return $this->oddsMalay;
    }

    /**
     * @param mixed $oddsMalay
     */
    public function setOddsMalay($oddsMalay)
    {
        $this->oddsMalay = $oddsMalay;
    }

    /**
     * @return mixed
     */
    public function getNewOddsMalay()
    {
        return $this->newOddsMalay;
    }

    /**
     * @param mixed $newOddsMalay
     */
    public function setNewOddsMalay($newOddsMalay)
    {
        $this->newOddsMalay = $newOddsMalay;
    }

    /**
     * @return mixed
     */
    public function getOddsIndo()
    {
        return $this->oddsIndo;
    }

    /**
     * @param mixed $oddsIndo
     */
    public function setOddsIndo($oddsIndo)
    {
        $this->oddsIndo = $oddsIndo;
    }

    /**
     * @return mixed
     */
    public function getNewOddsIndo()
    {
        return $this->newOddsIndo;
    }

    /**
     * @param mixed $newOddsIndo
     */
    public function setNewOddsIndo($newOddsIndo)
    {
        $this->newOddsIndo = $newOddsIndo;
    }

    /**
     * @return mixed
     */
    public function getSpecialName()
    {
        return $this->specialName;
    }

    /**
     * @param mixed $specialName
     */
    public function setSpecialName($specialName)
    {
        $this->specialName = $specialName;
    }

    /**
     * @return array
     */
    public function getOddsCombined()
    {
        return [
            'odds' => $this->getOdds(),
            'newOdds' => $this->getNewOdds()
        ];
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return array_merge(parent::toArray(), ['special_name' => $this->getSpecialName()]);
    }
}
