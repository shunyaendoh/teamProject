<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\User;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'user_id' => 1,
            'nickname' => 'ふみ',
            'birth_of_date' => '19981124',
            'job' => 'Pusher Master',
            'locate' => '千葉',
            'comment' => 'Java少し齧ってました！',
            'gender' => 1,
            'picture_path' => 'storage/images/profilePicture/IMG_0024.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('profiles')->insert([
            'user_id' => 2,
            'nickname' => '淳さん',
            'birth_of_date' => '19981126',
            'job' => 'XD職人',
            'locate' => '千葉',
            'comment' => '最近カメラはじめした！',
            'gender' => 1,
            'picture_path' => 'storage/images/profilePicture/defaultPicture.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('profiles')->insert([
            'user_id' => 3,
            'nickname' => 'まほ',
            'birth_of_date' => '19890601',
            'job' => 'Bootstrap使い',
            'locate' => '千葉',
            'comment' => '円周率いっぱい言えます！',
            'gender' => 2,
            'picture_path' => 'storage/images/profilePicture/defaultPicture.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('profiles')->insert([
            'user_id' => 4,
            'nickname' => 'エンちゃん',
            'birth_of_date' => '19971215',
            'job' => 'Keynoter',
            'locate' => '千葉',
            'comment' => '日本語ペラペラです！',
            'gender' => 1,
            'picture_path' => 'storage/images/profilePicture/defaultPicture.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
