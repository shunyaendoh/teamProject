<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Idea;
use Carbon\Carbon;

class ChatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sender = User::first();
        $receiver = User::where('id', 2)->first();
        $idea = Idea::first();

        DB::table('chats')->insert([
            'sender_user_id' => $sender->id,
            'received_user_id' => $receiver->id,
            'idea_id' => $idea->id,
            'body' => 'こんにちは！バイナリーオプションに興味はありませんか？',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
