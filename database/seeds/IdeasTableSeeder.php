<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ideas = ["1", "2", "3", "4", "5"];

        foreach ($ideas as $idea) {
            DB::table('ideas')->insert([]);
        }
    }
}
