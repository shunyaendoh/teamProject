<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//ModelであるProfile.phpとこのControllerをつなぐ。use namespace名\Model名;
use App\Profile;
use App\Job;
use App\User;
use App\Favorite;
//認証機能
use \Auth;
use Carbon\Carbon;

class ProfileController extends Controller
{

    //プロフィールを表示する
    public function index(User $user)
    {   
        $colorName = [
            [
                'bg'=> 'bg-primary',
                'text'=> 'text-light',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-secondary',
                'text'=> 'text-light',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-success',
                'text'=> 'text-light',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-danger',
                'text'=> 'text-light',
                'heart'=> 'color:yellow;'
            ],
            [
                'bg'=> 'bg-warning',
                'text'=> 'text-dark',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-info',
                'text'=> 'text-light',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-light',
                'text'=> 'text-dark',
                'heart'=> 'color:red;'
            ],
            [
                'bg'=> 'bg-dark',
                'text'=> 'text-light',
                'heart'=> 'color:red;'
            ],
        ];

        $user->load('ideas', 'profile', 'favorites');
        $user->favorites->load('favorites');
        $bod = $this->calcAge(intval($user->profile->birth_of_date));
        // dd($bod);
        // $user->profile->push($bod);
        $user->profile->age = $bod;
        // dd($user->profile);

        $user->ideas->map(function($idea) use($colorName) {
            $idea->color_name = $colorName[$idea->job_id - 1];
        });
        $user->favorites->map(function($idea) use($colorName) {
            $idea->color_name = $colorName[$idea->job_id - 1];
        });
        // dd($user->favorites);
        return view('profiles.profile', [
            'user' => $user,
        ]);
    }

    private function calcAge(Int $bod)
    {
        $currentDate = Carbon::now()->format('Ymd');
        // dd($currentDate);
        $subDate = (int)$currentDate - $bod;
        // dd($subDate);
        $subDate = strval($subDate);
        $age = substr($subDate, 0, 2);
        $age = intval($age);
        // dd($age);
        if($age < 15) {
            return '15歳未満';
        }elseif($age >= 15 && $age < 20) {
            return '10代';
        }elseif($age >= 20 && $age < 30) {
            return '20代';
        }elseif($age >= 30 && $age < 40) {
            return '30代';
        }elseif($age >= 40 && $age < 50) {
            return '40代';
        }elseif($age >= 50 && $age < 60) {
            return '50代';
        }elseif($age >= 60 && $age < 70) {
            return '60代';
        }elseif($age == 0) {
            return '未設定';
        }else {
            return '70歳以上';
        }
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
        //  $profile->age = $request->age;
         $profile->job = $request->job;
         $profile->skills = $request->skills;
         $profile->locate = $request->locate;
         $profile->comment = $request->comment;
         $profile->gender = $request->gender;
         $profile->save();
         return redirect()->route('profiles.index');
     }
          
    

    //プロフィール編集
    public function edit(User $user)
    {
        $jobs = Job::all();
        return view('profiles.edit',[
            'jobs' => $jobs,
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        // dd($request->all());
        $filtered_bod = strval($request->year) . str_pad(strval($request->month), 2, '0', STR_PAD_LEFT) . str_pad(strval($request->date), 2, '0', STR_PAD_LEFT);
        $imgPath = $this->saveProfilePicture($request->file('picture'));
        $profile = Profile::find(Auth::user()->id);
        $profile->nickname = $request->nickname;
        $profile->birth_of_date = $filtered_bod;
        $profile->job = $request->job;
        $profile->locate = $request->locate;
        $profile->comment = $request->comment;
        $profile->gender = $request->gender;
        $profile->picture_path = $imgPath;
        $profile->save();

        //ページを更新
        return redirect()->route('profile.index',[
            'user_id' => $profile->user_id
        ]);
        
    }

    private function saveProfilePicture($image)
    {
        $imgPath = $image->store('images/profilePicture', 'public');

        // dd($imgPath);
        return 'storage/' . $imgPath;
    }
}
