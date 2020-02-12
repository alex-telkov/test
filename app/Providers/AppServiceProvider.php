<?php

namespace App\Providers;

use App\Entities\ClientMatch;
use App\Entities\ClientMatchCompetition;
use App\Entities\ClientMatchSomeClient;
use App\Entities\ClientMatchTeam;
use App\Entities\Match;
use App\Entities\Roster;
use App\Repositories\ClientMatchCompetitionRepository;
use App\Repositories\ClientMatchRepository;
use App\Repositories\ClientMatchSomeClientRepository;
use App\Repositories\ClientMatchTeamRepository;
use App\Repositories\MatchRepository;
use App\Repositories\RosterRepository;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $em = app(EntityManagerInterface::class);
        $this->app->singleton(ClientMatchSomeClientRepository::class, function () use ($em) {
            return $em->getRepository(ClientMatchSomeClient::class);
        });
        $this->app->singleton(RosterRepository::class, function () use ($em) {
            return $em->getRepository(Roster::class);
        });
        $this->app->singleton(ClientMatchRepository::class, function () use ($em) {
            return $em->getRepository(ClientMatch::class);
        });
        $this->app->singleton(MatchRepository::class, function () use ($em) {
            return $em->getRepository(Match::class);
        });
        $this->app->singleton(ClientMatchCompetitionRepository::class, function () use ($em) {
            return $em->getRepository(ClientMatchCompetition::class);
        });
        $this->app->singleton(ClientMatchTeamRepository::class, function () use ($em) {
            return $em->getRepository(ClientMatchTeam::class);
        });
    }
}
