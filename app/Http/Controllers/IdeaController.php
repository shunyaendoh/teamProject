<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;
use Carbon\Carbon;

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
        return view('ideas.create');
    }

    //アイデア投稿データを保存
    public function store(Request $request)
    {
        //Ideaモデルのインスタンスを取得
        $idea = new Idea();
       
        
        $idea->user_id = 1;
        $idea->job_id = 2;
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = Carbon::now();
        $idea->updated_at= Carbon::now();

        $idea->save();

        //画面更新
        return redirect()->route('idea.index');
    }


    //アイデア編集
    public function edit()
    {
       
        return view('ideas.edit');

    }

    public function update(int $id)
    {
        $idea = Idea::find($id);
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = Carbon::now();
        $idea->updated_at= Carbon::now();

        return redirect()->route('ideas.index');
    }
}
