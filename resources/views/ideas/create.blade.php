<link rel="stylesheet" href="{{ asset('css/idea_create_edit.css') }}">
@extends('layouts.app')
@section('content')


<form action="{{ route('idea.store') }}" method="POST" name="idea_post" id="post_idea">
  <!-- formにidをつけてあげて、selectタグとつなげる時にform=で同じやつを書いて、繋げてあげる -->

  <!-- セキュリティのために必要 -->
 
 @csrf

 
 <div class="container my-3 p-3 col-5 bg-light">

    <h1 class="text-center p-3">Share your idea!</h1>

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $message)
            <li class = "alert alert-danger">
                {{$message}}
            </li>
                @endforeach 
        </ul>
        @endif
 
    <div class="row form-group m-5">
        <label for="title">タイトル：</label>
        <input class="title" id="title" type="title" name="title" placeholder="アイデアのタイトルを入力して下さい。">
    </div>
    
    
    <div class="row m-5">
        <label for="job_id">{{ __('対象の職業：') }}</label>
        <div>
            <select class="form-control border-secondary" name="job_id" id="job_id" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" form="post_idea" required>
        
            <option class="txt-center" value="">{{'--未選択--'}}</option>
            @foreach ($jobs as $job)
            <option value=" {{ $job->id }} ">{{ $job->name }}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="row form-group m-5">
        <label for="body">アイデア：</label>
        <textarea class="body border-secondary" id="body" name="body" placeholder="アイデアについて詳しく書いて下さい。"></textarea>
    </div>

    <div class="text-center text-md-right p-3">
        <input class="shadow btn-dark btn-lg" type="submit" value="投稿">
        <!-- <input type="reset" value="リセット"> -->
    </div>

</div>

</form>
@endsection