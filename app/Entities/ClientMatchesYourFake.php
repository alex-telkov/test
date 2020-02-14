<?php
namespace App\Entities;

/**
 * @ORM\Entity(repositoryClass="App\Repositories\ClientMatchesYourFake")
 * @ORM\Table(name="client_matches_your_fake")
 */
class ClientMatchesYourFake extends ClientMatch
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
}
