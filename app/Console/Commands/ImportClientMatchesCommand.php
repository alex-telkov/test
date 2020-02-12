<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ImportClientMatchesCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'client-matches:import {--s|source=s : Specify client source codename}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process client import job by with specified source codename';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $startSeconds = time();
        $source = $this->option('source');
        $importers = config('clientmatches')["importers"];
        foreach ($importers as $importer) {
            if ($importer['codename'] == $source) {
                (new $importer['parser']['fetcher']($importer))
                    ->fetch(new $importer['parser']['mapper']($importer['entity']));
            }
        }
        $secondTaked = time() - $startSeconds;
        $this->info('Import job complete with [' . $source . '] - taked time: ' . $secondTaked . 's');
    }
}
