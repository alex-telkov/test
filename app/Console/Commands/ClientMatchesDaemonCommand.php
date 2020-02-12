<?php

namespace App\Console\Commands;

use Amp\Loop;
use Carbon\Carbon;
use function Amp\Promise\all;
use Illuminate\Console\Command;
use App\Console\Logger\BasicLogger;
use App\Console\Processes\ClientMatchesImportProcess;

/**
 * Async client matches fetcher
 *
 * We need define some functions which will return promises
 * it need so we can relaunch our importes every n* seconds from stop to stop
 *
 * What this means?
 * lets say delay is set to 30 seconds
 * lets say importer is toutou
 * if toutou importer will take 12 seconds to execute and fetch+import data
 * it will take only 18 seconds to next
 * so it will approx 30 seconds from start to start and stop to stop
 *
 * if toutou importer will take 31 seconds next process will be started asap
 */
class ClientMatchesDaemonCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'client-matches:daemon';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daemon for client-matches import and outright markets';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info("## Client Matches fetcher daemon initialization.");
        $this->info('## Init at: ' . Carbon::now('UTC')->toDateTimeString());

        $importers = config('clientmatches')["importers"];
        $command = config('clientmatches')["command"];

        $logger = new BasicLogger();
        $logger->logDaemonStarted();

        Loop::run(function() use ($importers, $command, $logger) {
            $processes = [];
            $promises = [];
            foreach ($importers as $importer) {
                $process = new ClientMatchesImportProcess($command, $importer, $logger);
                $promises[] = $process->start();
                $processes[] = $process;
            }
            yield all($promises);
            Loop::repeat(60000, function () use ($processes, $logger) {
                $times = array_reduce($processes, function ($res, $importer) {
                    return $res + $importer->getCount();
                });
                $logger->logCounter($times);
            });
        });
    }
}
