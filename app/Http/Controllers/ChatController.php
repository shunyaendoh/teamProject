<?php

namespace App\Http\Controllers;

use App\User;
use \Auth;
class ChatController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        
        return view('chats.index', [
            'users' => $users
        ]);
    }
}
