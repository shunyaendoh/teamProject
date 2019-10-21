<?php

namespace App\Http\Controllers;

use App\MessageUser;
use \Auth;

class MessageUserController extends Controller
{
    public function check($receiverId){
        $senderId = Auth::user()->id;

        $data = [
            'sender_id' => $senderId,
            'receiver_id' => $receiverId
        ];
        $data2 = [
            'sender_id' => $receiverId,
            'receiver_id' => $senderId
        ];

        $checkExist = MessageUser::where('sender_id', $senderId)->where('receiver_id', $receiverId)->first();

        if(!$checkExist){
            $createConvo = MessageUser::create($data);
            $createConvo2 = MessageUser::create($data2);
            return $createConvo->id;
        }else{
            return $checkExist->id;
        }
    }
}
