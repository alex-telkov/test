<?php

use App\Services\SeedService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $seedService;

    public function __construct()
    {
        $this->seedService = new SeedService();
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rosters')->insert(
            $this->seedService->getRosters()
        );
        DB::table('matches')->insert(
            $this->seedService->getMatches()
        );
        DB::table('match_opponents')->insert(
            $this->seedService->getMatchOpponents()
        );
    }
}
