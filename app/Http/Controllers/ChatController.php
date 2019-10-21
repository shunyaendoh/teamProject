<?php

namespace App\Http\Controllers;

use App\User;
use App\MessageUser;
use \Auth;
class ChatController extends Controller
{
    public function index()
    {
        $chat_users = collect();
        $sender_is_me = MessageUser::where('sender_id',Auth::user()->id)->get();
        foreach($sender_is_me as $messageUser) {
            $messageUser->user = $messageUser->receiver_id;
            $chat_users->push($messageUser);
        }
 
        $user_lists = collect();

        foreach($chat_users as $chat_user) {
            $tmp_user = User::where('id', $chat_user->user)->first();
            $user_lists->push($tmp_user);
        }
        
        return view('chats.index', [
            'users' => $user_lists
        ]);
    }
}
