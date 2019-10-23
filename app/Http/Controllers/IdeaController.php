<?php

namespace App\Http\Controllers;

use App\Idea;
use Carbon\Carbon;
use App\Job;
use App\Http\Requests\EditIdea;
use App\Http\Requests\CreateIdea;
use \Auth;

class IdeaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $user->load('ideas', 'favorites');
        $ideas = Idea::where('user_id', '!=', Auth::user()->id )->with('user.profile', 'favorites')->inRandomOrder()->limit(30)->get();
        return view('ideas.index', [
            'ideas' => $ideas,
            'user' => $user
        ]);
    }

    public function create()
    {
        $jobs = Job::all();

        return view('ideas.create',[
            'jobs' => $jobs
        ]);
    }

    public function store(CreateIdea $request)
    {
        $idea = new Idea();

        $idea->user_id = Auth::user()->id;
        $idea->job_id = $request->job_id;
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = Carbon::now();
        $idea->updated_at= Carbon::now();
        $idea->save();

        return redirect()->route('profile.index',[
            'user_id' => Auth::user()->id
        ]);
    }

    public function edit(Idea $idea)
    {
       $jobs = Job::all();

       if (Auth::user()->id !== $idea->user_id) {
            abort(403);
       }

        return view('ideas.edit',[
            'jobs' => $jobs,
            'idea' => $idea
        ]);
    }

    public function update(Idea $idea, EditIdea $request)
    {
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->job_id = $request->job_id;
        $idea->created_at = Carbon::now();
        $idea->updated_at = Carbon::now();
        $idea->save();

        if (Auth::user()->id !== $idea->user_id) {
            abort(403);
           }

        return redirect()->route('profile.index', ['user_id' => Auth::user()->id]);
    }
}
