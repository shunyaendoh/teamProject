<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Job;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $job = Job::first();
        DB::table('users')->insert(
            [
                'name'       => '高倉 楓麻',
                'email'      => 'fuma@email.com',
                'password'   => bcrypt('fumafuma'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('users')->insert(
            [
                'name'       => '島田 淳一',
                'email'      => 'jun1@email.com',
                'password'   => bcrypt('junjun'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('users')->insert(
            [
                'name'       => '家田 真帆',
                'email'      => 'maho@email.com',
                'password'   => bcrypt('mahomaho'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        DB::table('users')->insert(
            [
                'name'       => '遠藤 駿也',
                'email'      => 'shun@email.com',
                'password'   => bcrypt('shunshun'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
