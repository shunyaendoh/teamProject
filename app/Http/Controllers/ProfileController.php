<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

//ModelであるProfile.phpとこのControllerをつなぐ。use namespace名\Model名;
use App\Profile;
//認証機能
use \Auth;

class ProfileController extends Controller
{

    //プロフィールを表示する
    public function index(User $user)
    {   
        $profile = $user->profile;
        return view('profiles.profile', [
            'profile' => $profile,
        ]);
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

         $profile->nickname = $request->nickname;
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

    public function update(Request $request)
    {
        $profile = Profile::find(Auth::user()->id);
        $profile->nickname = $request->nickname;
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
