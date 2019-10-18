<?php

namespace App\Http\Controllers;

use App\Favorite;
use App\Idea;
use Carbon\Carbon;
use \Auth;

class FavoriteController extends Controller
{
    public function like(Idea $idea)
    {
      $favorite = new Favorite();
      $favorite->idea_id = $idea->id;
      $favorite->user_id = Auth::user()->id;
      $favorite->updated_at = Carbon::now();
      $favorite->save();
    }
    public function dislike(Idea $idea)
    {
      $favorite = Favorite::where('idea_id',$idea->id)
                  ->where('user_id', Auth::user()->id)->first();
      $favorite->delete();
    }
}
