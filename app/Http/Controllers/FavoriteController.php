<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Favorite;
use App\Idea;
use Carbon\Carbon;
use \Auth;

class FavoriteController extends Controller
{
    public function like(Idea $idea)
    {
        // dd($idea);
      $favorite = new Favorite();
      $favorite->idea_id = $idea->id;
      $favorite->user_id = Auth::user()->id;
      $favorite->created_at = Carbon::now();
      $favorite->updated_at = Carbon::now();
      $favorite->save();
    }
    public function dislike(Idea $idea)
    {
      $favorite = Favorite::where('idea_id',$idea->id)
                  ->where('user_id', Auth::user()->id)->first();
      // dd($favorite);
      $favorite->delete();
    }
}
