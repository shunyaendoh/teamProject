<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = DB::table('users')->first();
        $job = DB::table('jobs')->first();

        $ideas = [
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
            ],
        ];

        foreach ($ideas as $idea) {
            DB::table('ideas')->insert([
                'title' => $idea['title'],
                'body' => $idea['body'],
                'user_id' => $user->id,
                'job_id' => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
