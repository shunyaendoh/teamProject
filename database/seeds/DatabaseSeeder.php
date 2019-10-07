<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(JobsTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(IdeasTableSeeder::class);
        $this->call(FavoritesTableSeeder::class);
        $this->call(ChatsTableSeeder::class);
        $this->call(ProfilesTableSeeder::class);
    }
}
