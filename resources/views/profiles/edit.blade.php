@extends('layouts.app')
@section('content')

<form action="{{ route('profile.update', ['user_id' => $user->id]) }}" method="POST" name="$jobs" id="edit_profile" enctype="multipart/form-data">
  <!-- formにidをつけてあげて、selectタグとつなげる時にform=で同じやつを書いて、繋げてあげる -->

  <!-- セキュリティのために必要 -->
 @method('put')
 @csrf

 <div class="container my-3 p-3 col-6 bg-light">

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
 
    <div class="row form-group col-5">
        <label class="" for="nickname">{{ __('ニックネーム：') }}</label>
        <input class="form-control" id="title" type="text" name="nickname" value="{{old('nickname', $user->profile->nickname)}}">
    </div>


    <fieldset class="">
  <label class="row">{{ __('生年月日：') }}</label>
    <input class="col-3" type="number" name="year" id="year" placeholder="YYYY" size="8" maxlength="4" value="{{ old('year', substr(intval($user->profile->birth_of_date), 0, 4)) }}">
     年
    <input class="col-2" type="number" name="month" id="month" placeholder="MM" size="4" maxlength="2" value="{{ old('month', ltrim(substr(intval($user->profile->birth_of_date), 4, 2), '0')) }}">
    月
    <input class="col-2" type="number" name="day" id="day" placeholder="DD" size="4" maxlength="2" value="{{ old('day', ltrim(substr(intval($user->profile->birth_of_date), 6, 2), '0')) }}">
    日
    </fieldset>

    <div class="py-3">
        <div class="form-check my-1">
        @if(Auth::user()->profile->gender == 0)
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="0" checked>
        @else
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="0">
        @endif
        <label class="form-check-label" for="exampleRadios1">
        {{ __('未設定') }}
        </label>
        </div>
        <div class="form-check my-1">
        @if(Auth::user()->profile->gender == 1)
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="1" checked>
        @else
        <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="1">
        @endif
        <label class="form-check-label" for="exampleRadios2">
        {{ __('男性') }}
        </label>
        </div>

        <div class="form-check my-1">
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

    <div class="row form-group col-5">
        <label for="locate">{{ __('居住地：') }}</label>
        <input class="form-control" type="text" name="locate" value="{{old('locate', $user->profile->locate)}}">
    </div>

    <div class="row form-group col-5">
        <label for="locate">{{ __('職業：') }}</label>
        <input class="form-control" type="text" name="job" value="{{old('job', $user->profile->job)}}">
    </div>

    <div class="row form-group">
        <label for="body">{{ __('コメント：') }}</label>
        <textarea class="body" id="comment" name="comment">{{old('comment', $user->profile->comment)}}</textarea>
    </div>


    <div class="form-group row">
        <label for="picture" class="col-md-4 col-form-label text-md-right">{{ __('プロフィール画像：') }}</label>
​
        <div class="col-8">
            <input id="picture" type="file" name="picture" class="form-control{{ $errors->has('picture_path') ? ' is-invalid' : '' }}" value="">
        </div>
    </div>


    <div class="text-center text-md-right p-3">
        <input class="shadow btn-dark btn-lg" type="submit" value="更新">
    </div>
    
    





</div>

</form>
@endsection










</body>
</html>