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

        $ideas = [
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 1,
                'user_id' => 1
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 2,
                'user_id' => 2
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 3,
                'user_id' => 3
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 4,
                'user_id' => 4
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 5,
                'user_id' => 1
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 6,
                'user_id' => 2
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 7,
                'user_id' => 3
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 8,
                'user_id' => 4
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 1,
                'user_id' => 1
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 2,
                'user_id' => 2
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 3,
                'user_id' => 3
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 4,
                'user_id' => 4
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 5,
                'user_id' => 1
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 6,
                'user_id' => 2
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 7,
                'user_id' => 3
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 8,
                'user_id' => 4
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 1,
                'user_id' => 1
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 2,
                'user_id' => 2
            ],
            [
                'title' => 'タピタピ',
                'body' => 'タピオカで世界を救う',
                'job_id' => 3,
                'user_id' => 3
            ],
            [
                'title' => 'カフェを開く',
                'body' => '寒いカフェが多いのでブランケットを無料で貸し出すカフェを作る',
                'job_id' => 4,
                'user_id' => 4
            ],
            [
                'title' => '楓麻壊す',
                'body' => '楓麻を壊す',
                'job_id' => 5,
                'user_id' => 1
            ],
        ];

        foreach ($ideas as $idea) {
            DB::table('ideas')->insert([
                'title' => $idea['title'],
                'body' => $idea['body'],
                'user_id' => $idea['user_id'],
                'job_id' => $idea['job_id'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
