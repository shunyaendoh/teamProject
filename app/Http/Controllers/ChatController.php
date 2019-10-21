<?php

namespace App\Http\Controllers;

use App\User;
use \Auth;
class ChatController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::where('id', '!=', Auth::user()->id)->get();
        
        return view('chats.index', [
            'users' => $users
        ]);
    }
}
