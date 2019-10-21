<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\MessageUser;

class MessageController extends Controller
{
    public function store(Request $request){
        $data = [
            'message_users_id' => $request->convo_id,
            'message' => $request->message
        ];

        $sendMessage = Message::create($data);

        if($sendMessage){
            return "Message Sent";
        }else{
            return "Error sending message.";
        }
    }

    public function load($receiver, $sender){
        $boxType = "";

        $id1 = MessageUser::where('sender_id', $sender)->where('receiver_id',$receiver)->pluck('id');
        $id2 = MessageUser::where('receiver_id', $sender)->where('sender_id',$receiver)->pluck('id');

        $allMessages = Message::where('message_users_id', $id1)->orWhere('message_users_id', $id2)->orderBy('id', 'asc')->get();
        

        $tobePassed = [$allMessages, $id1];
        return $tobePassed;
    }

    public function retrieveNew($receiver, $sender, $lastId){
        $id1 = MessageUser::where('sender_id', $sender)->where('receiver_id',$receiver)->pluck('id');
        $id2 = MessageUser::where('receiver_id', $sender)->where('sender_id',$receiver)->pluck('id');

        $allMessages = Message::where('id','>=',$lastId)->where('message_users_id', $id2)->orderBy('id', 'asc')->get();

        return $allMessages;
    }
}
