<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ModelであるProfile.phpとこのControllerをつなぐ。use namespace名\Model名;
use App\Profile;

class ProfileController extends Controller
{

    //プロフィールを表示する
    public function index()
    {   
        //緑の文字のProfileはModel名
        $profiles = Profile::all();
        //viewsのprofilesのindex.blade.phpに表示するように指示。（'フォルダ名.ファイル名'）
        return view('profiles.index');
    }



    //新規登録
    public function create()
    {
        return view('profiles.create');
    }


    //新規登録のデータ保存
    public function store(Request $request)
     {
        $profile = new Profile();

         $profile->nickname = $request->nickneme;
         $profile->age = $request->age;
         $profile->job = $request->job;
         $profile->skills = $request->skills;
         $profile->locate = $request->locate;
         $profile->comment = $request->comment;
         $profile->gender = $request->gender;
         $profile->save();
         return redirect()->route('profiles.index');
     }
          
    

    //プロフィール編集
    public function edit()
    {
        return view('profiles.edit');
    }

    public function update(int $id)
    {
        $profile = Profile::find($id);
        $profile->nickname = $request->nickneme;
        $profile->age = $request->age;
        $profile->job = $request->job;
        $profile->skills = $request->skills;
        $profile->locate = $request->locate;
        $profile->comment = $request->comment;
        $profile->gender = $request->gender;
        $profile->save();

        //ページを更新
        return redirect()->route('profiles.index');
        
    }
}
