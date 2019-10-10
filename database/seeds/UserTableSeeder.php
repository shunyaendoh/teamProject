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
                'name'       => 'fumi',
                'email'      => 'fumi_is_fuma@gmail.com',
                'password'   => bcrypt('fumifumi'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        DB::table('users')->insert(
            [
                'name'       => 'fuma',
                'email'      => 'fuma_is_fumi@gmail.com',
                'password'   => bcrypt('fumafuma'),
                'job_id'     => $job->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
