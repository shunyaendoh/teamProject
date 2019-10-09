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
        $user = User::first();
        $user2 = User::where('id', 2)->first();

        DB::table('profiles')->insert([
            'user_id' => $user->id,
            'nickname' => 'fumie',
            'age' => 26,
            'job' => 'Java職人',
            'locate' => '千葉',
            'comment' => 'Java少し齧ってました！',
            'gender' => 1,
            'picture_path' => 'storage/images/profilePicture/IMG_0024.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('profiles')->insert([
            'user_id' => $user2->id,
            'nickname' => '筋肉',
            'age' => 20,
            'job' => 'XD職人',
            'locate' => '千葉',
            'comment' => 'デング熱によくかかります！',
            'gender' => 1,
            'picture_path' => 'storage/images/profilePicture/IMG_0024.jpg',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
