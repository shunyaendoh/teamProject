<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use Carbon\Carbon;
use App\Job;
use Illuminate\Support\Facades\Auth;

class IdeaController extends Controller
{
    
    //アイデア投稿画面表示
    public function index()
    {
        $ideas = Idea::all();
        return view('ideas.index');
    }
    
    
    //アイデア投稿
    public function create()
    {
        $jobs = Job::all();

        return view('ideas.create',[
            'jobs' => $jobs
        ]);
       
        
    }

    //アイデア投稿データを保存
    public function store(Request $request)
    {
        //Ideaモデルのインスタンスを取得
        $idea = new Idea();
       
        // dd($request->job_id);
        $idea->user_id = Auth::user()->id;
        $idea->job_id = $request->job_id;
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = Carbon::now();
        $idea->updated_at= Carbon::now();

        $idea->save();

        //画面更新
        return redirect()->route('idea.index');
    }


    //アイデア編集
    public function edit(Idea $idea)
    {
       $jobs = Job::all();

        return view('ideas.edit',[
            'jobs' => $jobs,
            'idea' => $idea
        ]);
        
        
    }

    public function update(Idea $idea, Request $request)
    {
        // $idea = Idea::find($id);
        // dd($request);
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = Carbon::now();
        $idea->updated_at = Carbon::now();
        $idea->save();

        return redirect()->route('idea.index');
    }
}
