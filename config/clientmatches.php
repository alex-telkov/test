<?php

return [
    /*
     * We define importers by their codename, including parse parameter and mappers
     * There will be parser and mapper classes defined
     * 'name' => Common name of importer
     * 'codename' => code used in discriminator mapping, also used to get config for ImportClientMatchesCommand
     * 'delay' => time between fetch attempts
     * 'entity' => output entity class for saving in database
     * 'parser' => parser settings error
     * 'parser.fetcher' => parser class
     * 'parser.mapper' => result to entity mapper
     * 'parser.endpoint' => first part of URI, scheme and domain
     * 'parser.path' => path e.g. /home/admin/hey/give/me/data
     * 'parser.query' => query string
     *
     * For testing we emulate one of our clients feeds
     */
    'importers' => [
        [
            'name' => 'SomeClient',
            'codename' => 'SomeClientCodename',
            'delay' => 30,
            'entity' => App\Entities\ClientMatchSomeClient::class,
            'automapping' => true,
            'parser' => [
                'fetcher' => App\Fetchers\SomeClientEventsFetcher::class,
                'mapper' => App\Mappers\SomeClientMatchMapper::class,
                'endpoint' => env('SOMECLIENT_ENDPOINT', 'http://localhost:8000'),
                'path' => '/odds-service',
                'query' => '?GetEventsByCompetitions&SportId=23&Language=en-gb'
            ]
        ]
    ],
    'command' => "php ".__DIR__."/../artisan client-matches:import --source=%s"
];
