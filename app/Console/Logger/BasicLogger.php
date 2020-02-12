<?php

namespace App\Console\Logger;

use Carbon\Carbon;
use App\Console\Processes\ClientMatchesImportProcess;

/**
 * Class BasicLogger
 * @package App\Console\Logger
 */
class BasicLogger
{
    const TIME_FORMAT = 'Y-m-d H:i:s';
    const PROCESS_START_FORMAT = "-- [%s][%s] Started..." . PHP_EOL;
    const PROCESS_COMPLETE_FORMAT = "-- [%s][%s] Completed with pid %d and code %d" . PHP_EOL;
    const PROCESS_CHUNK_FORMAT = "-- [%s][%s] Output: %s";
    const DAEMON_LOG_COUNT = "-- [%s] Imports completed: %d" . PHP_EOL;

    /**
     * Log daemon start event
     */
    public function logDaemonStarted()
    {
        echo "-- Client Matches fetcher daemon started" . PHP_EOL;
        echo '-- Started at: '. $this->nowString() . PHP_EOL;
    }

    /**
     * @param ClientMatchesImportProcess $importProcess
     */
    public function logStart(ClientMatchesImportProcess $importProcess)
    {
        $code = $importProcess->getImporter()['codename'];
        echo sprintf(static::PROCESS_START_FORMAT, $this->nowString(), $code);
    }

    /**
     * @param ClientMatchesImportProcess $importProcess
     * @throws \Amp\Process\StatusError
     */
    public function logProcessComplete(ClientMatchesImportProcess $importProcess, $pid, $code)
    {
        echo sprintf(static::PROCESS_COMPLETE_FORMAT, $this->nowString(), $importProcess->getImporter()['codename'], $pid, $code);
    }

    /**
     * @param ClientMatchesImportProcess $importProcess
     * @param $chunk
     */
    public function logProcessOutput(ClientMatchesImportProcess $importProcess, $chunk)
    {
        echo sprintf(static::PROCESS_CHUNK_FORMAT, $this->nowString(), $importProcess->getImporter()['codename'], $chunk);
    }

    /**
     * @param $times
     */
    public function logCounter($times)
    {
        echo sprintf(static::DAEMON_LOG_COUNT, $this->nowString(), $times);
    }

    /**
     * @return string
     */
    protected function nowString()
    {
        return Carbon::now('UTC')->format(static::TIME_FORMAT);
    }
}
