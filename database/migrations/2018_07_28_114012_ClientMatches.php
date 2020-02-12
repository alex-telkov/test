<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientMatches extends Migration
{
    const CASCADE = 'cascade';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rosters', function (Blueprint $table) {
            $table->increments('id');
            $table->string('team_name');
            $table->timestamp('created_at', 0)->nullable();
        });

        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('winner_id')->nullable()->index();
            $table->dateTime('start', 0)->nullable()->index();
            $table->unsignedTinyInteger('status')->default(0);
            $table->timestamps();
            $table->foreign('winner_id')->references('id')
                ->on('rosters')->onUpdate('cascade');
        });

        Schema::create('match_opponents', function (Blueprint $table) {
            $table->unsignedInteger('roster_id')->index();
            $table->unsignedInteger('match_id')->index();
            $table->primary(['match_id', 'roster_id']);
            $table->foreign('roster_id')->references('id')
                ->on('rosters')->onUpdate('cascade');
            $table->foreign('match_id')->references('id')
                ->on('matches')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('client_matches_teams', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_id')->nullable()->index();
            $table->string('team_name', 100)->default('');
        });

        Schema::create('client_matches_competitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('competition_name', 255)->default('')->index();
        });

        Schema::create('client_matches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('service_match_id')->index();
            $table->unsignedInteger('parent_service_match_id');
            $table->string('platform_match_id', 30)->nullable();
            $table->unsignedInteger('competition_id');
            $table->unsignedInteger('match_id')->index()->nullable();
            $table->unsignedInteger('home_team_id')->nullable();
            $table->unsignedInteger('away_team_id')->nullable();
            $table->dateTime('event_date')->index();
            $table->string('client_discr', 30)->index();
            $table->tinyInteger('in_play')->default(0)->index();
            $table->tinyInteger('active')->default(0)->index();
            $table->timestamp('deleted_at')->nullable();
            $table->foreign('home_team_id')->references('id')->on('client_matches_teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('away_team_id')->references('id')->on('client_matches_teams')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('match_id')->references('id')->on('matches')->onUpdate('cascade')->onDelete('set null');
        });

        Schema::create('client_matches_some_client', function (Blueprint $table) {
            $table->increments('id');
            $table->text('odds');
            $table->text('new_odds');
            $table->text('odds_hk');
            $table->text('new_odds_hk');
            $table->text('odds_malay');
            $table->text('new_odds_malay');
            $table->text('odds_indo');
            $table->text('new_odds_indo');
            $table->string('special_name', 60)->nullable();

            $table->foreign('id')->references('id')->on('client_matches')
                ->onUpdate(self::CASCADE)->onDelete(self::CASCADE);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_matches_ceelo');
        Schema::dropIfExists('client_matches_toutou');
        Schema::dropIfExists('client_matches_188bet');
        Schema::dropIfExists('client_matches');
        Schema::dropIfExists('client_matches_teams');
        Schema::dropIfExists('client_matches_competitions');
    }
}
