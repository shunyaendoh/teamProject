<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Idea;
use Carbon\Carbon;

class FavoriteController extends Controller
{
    public function like(Idea $idea)
    {
        // dd($idea);
      $favorite = new Favorite();
      $favorite->idea_id = $idea;
      $favorite->user_id = Auth::user()->id;
      $favorite->created_at = Carbon::now();
      $favorite->updated_at = Carbon::now();
      $favorite->save();
    }
}
