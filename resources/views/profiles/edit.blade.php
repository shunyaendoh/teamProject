@extends('layouts.app')
@section('content')

<form action="{{ route('profile.update', ['user_id' => $user->id]) }}" method="POST" name="$jobs" id="edit_profile" enctype="multipart/form-data">
 @method('put')
 @csrf
 <link rel="stylesheet" href="{{ asset('css/profile_create_edit.css') }}">
 

 <div class="container my-3 p-3 col-5 bg-light">

    <h1 class="text-center p-3">プロフィールの編集</h1>

    @if($errors->any())
    <ul>
        @foreach($errors->all() as $message)
        <li class = "alert alert-danger" style="list-style: none;">
            {{$message}}
        </li>
            @endforeach 
    </ul>
    @endif
 
    <div class="row form-group m-4">
        <label class="" for="nickname">{{ __('ニックネーム：') }}</label>
        <input class="form-control" id="title" type="text" name="nickname" value="{{old('nickname', $user->profile->nickname)}}" placeholder="ニックネームを書いて下さい。">
    </div>


    <fieldset class="m-4">
  <label class="">{{ __('生年月日：') }}</label>
    <br>
    <input class="col-3" type="number" name="year" id="year" placeholder="YYYY" 　size="8" maxlength="4" value="{{ old('year', substr(intval($user->profile->birth_of_date), 0, 4)) }}">
     年
    <input class="col-3" type="number" name="month" id="month" placeholder="MM" size="4" maxlength="2" value="{{ old('month', ltrim(substr(intval($user->profile->birth_of_date), 4, 2), '0')) }}">
    月
    <input class="col-3" type="number" name="day" id="day" placeholder="DD" size="4" maxlength="2" value="{{ old('day', ltrim(substr(intval($user->profile->birth_of_date), 6, 2), '0')) }}">
    日
    </fieldset>

    <div class=" mx-4">{{ __('性別：') }}</div>
        <div class="mx-4">
            <div class="form-check form-check-inline my-1">
            @if(Auth::user()->profile->gender == 0)
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="0" checked>
            @else
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="0">
            @endif
            <label class="form-check-label" for="exampleRadios1">
            {{ __('未設定') }}
            </label>
            </div>
            <div class="form-check form-check-inline my-1">
            @if(Auth::user()->profile->gender == 1)
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="1" checked>
            @else
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="1">
            @endif
            <label class="form-check-label" for="exampleRadios2">
            {{ __('男性') }}
            </label>
            </div>
            <div class="form-check form-check-inline my-1">
            @if(Auth::user()->profile->gender == 2)
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="2" checked>
            @else
            <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="2">
            @endif
            <label class="form-check-label" for="exampleRadios3">
            {{ __('女性') }}
            </label>
            </div>
        </div>

    <div class="row form-group m-4">
        <label for="locate">{{ __('出身地：') }}</label>
        <input class="form-control" type="text" name="locate" value="{{old('locate', $user->profile->locate)}}" placeholder="出身地を書いて下さい。">
    </div>

    <div class="row form-group m-4">
        <label for="locate">{{ __('職業：') }}</label>
        <input class="form-control" type="text" name="job" value="{{old('job', $user->profile->job)}}" placeholder="職業を書いて下さい。">
    </div>

    <label class="pt-2 mx-4" for="body">{{ __('コメント：') }}</label>
    <div class="form-group mx-4">        
        <textarea class="body p-2" id="comment" name="comment" placeholder="コメントを書いて下さい。">{{old('comment', $user->profile->comment)}}</textarea>
    </div>


    <label for="picture" class="mx-4 col-form-label text-md-right">{{ __('プロフィール画像：') }}</label>
    <div class="form-group mx-4">    
            <input id="picture" type="file" name="picture" class="form-control{{ $errors->has('picture_path') ? ' is-invalid' : '' }}" >
    </div>


    <div class="text-center text-md-right p-3">
        <input class="shadow btn-dark btn-lg" type="submit" value="更新">
    </div>
</div>
</form>
@endsection
