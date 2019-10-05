<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Idea;
use Carbon\Carbon;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::first();
        $ideas = Idea::all();

        foreach ($ideas as $idea) {
            DB::table('favorites')->insert([
                'idea_id' => $idea->id,
                'user_id' => $user->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
