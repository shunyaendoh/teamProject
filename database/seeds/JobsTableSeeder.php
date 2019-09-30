<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            '農業',
            '建設業',
            '製造業',
            '運輸業',
            '飲食業',
            '不動産業',
            'Webサービス業',
            'その他',
        ];

        foreach ($jobs as $job) {
            DB::table('jobs')->insert([
                'name' => $job,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
