<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class ChatController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('chats.index', [
            'users' => $users
        ]);
    }
}
