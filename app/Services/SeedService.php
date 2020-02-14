<?php
namespace App\Services;

class SeedService
{
    private const ROSTERS_MIN_LIMIT = 12;
    private const ROSTERS_MAX_LIMIT = 16;
    private const ROSTER_PREFIX = 'team';
    private const ROSTER_NAME_SEPARATOR = '-';

    private $rosterData;
    private $matchesData;

    /**
     * @return mixed
     */
    public function getRosters()
    {
        $rostersCount = mt_rand(self::ROSTERS_MIN_LIMIT, self::ROSTERS_MAX_LIMIT);
        for ($i = 0; $i < $rostersCount; $i++) {
            $this->rosterData[$i] = [
                'team_name' => $this->getRosterName($i)
            ];
        }
        return $this->rosterData;
    }

    /**
     * @param $iteration
     * @return string
     */
    protected function getRosterName($iteration)
    {
        return self::ROSTER_PREFIX . self::ROSTER_NAME_SEPARATOR . $iteration;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        for ($i = 0; $i < count($this->rosterData); $i++) {
            $this->matchesData[$i] = [
                'winner_id' => $this->getRandRosterId(),
                'start' => date('Y-m-d H:i:s')
            ];
        }
        return $this->matchesData;
    }

    /**
     * @return int
     */
    protected function getRandRosterId()
    {
        return mt_rand(1, count($this->rosterData));
    }

    /**
     * @return mixed
     */
    public function getMatchOpponents()
    {
        for ($i = 0; $i < count($this->rosterData); $i++) {
            $this->matchesData[$i] = [
                'roster_id' => $i+1,
                'match_id' => $i+1
            ];
        }
        return $this->matchesData;
    }
}
