<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idea;

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
    public function store()
    {
        //Ideaモデルのインスタンスを取得
        $idea = new Idea();//フォームリクエストがわからない

        //QQQQQQQQQQQユーザーidは？QQQQQQQQQQQQQQQQQQQQQQQQ
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = $request->created_at;
        $idea->updated_at= $request->updated_at;

        $idea->save();

        //画面更新
        return redirect()->route('ideas.index');
    }


    //アイデア編集
    public function edit()
    {
        //QQQQQQQ編集したいアイデアをidを使って持ってこないのかQQQQQQQQQQQQQQQ
        return view('ideas.edit');

    }

    public function update()//フォームリクエストがわからない
    {
        $idea->title = $request->title;
        $idea->body = $request->body;
        $idea->created_at = $request->created_at;
        $idea->updated_at= $request->updated_at;

        return redirect()->route('ideas.index');
    }

}
