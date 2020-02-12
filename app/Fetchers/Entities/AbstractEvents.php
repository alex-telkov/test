<?php

namespace App\Fetchers\Entities;

/**
 * Class AbstractEvents
 * @package App\Fetchers\Entities
 */
abstract class AbstractEvents
{
    const ODD_TYPE_DECIMAL = 1;
    const ODD_TYPE_HK = 2;
    const ODD_TYPE_MALAY = 3;
    const ODD_TYPE_INDO = 4;

    const ODD_TYPES = [
        self::ODD_TYPE_DECIMAL,
        self::ODD_TYPE_HK,
        self::ODD_TYPE_MALAY,
        self::ODD_TYPE_INDO
    ];


    /**
     * @var
     */
    protected $data;

    /**
     * @var
     */
    protected $all;

    /**
     * @var
     */
    protected $presented;

    /**
     * @var array
     */
    protected $allTeamNames = [];

    /**
     * @var array
     */
    protected $allCompetitionNames = [];

    /**
     * @return mixed
     */
    public function getAsArray()
    {
        return $this->all;
    }

    /**
     * @return mixed
     */
    public function presented()
    {
        return $this->presented;
    }

    /**
     * @return mixed
     */
    public function getAsIs()
    {
        return $this->data;
    }

    /**
     * @return array
     */
    public function getAllCompetitionNames()
    {
        return $this->allCompetitionNames;
    }

    /**
     * @return array
     */
    public function getAllTeamNames()
    {
        return $this->allTeamNames;
    }
}
