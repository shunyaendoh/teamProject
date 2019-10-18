@extends('layouts.app')
@section('content')

<form action="{{ route('idea.update', ['idea' => $idea->id]) }}" method="POST" name="idea_post" id="post_idea">
  <!-- formにidをつけてあげて、selectタグとつなげる時にform=で同じやつを書いて、繋げてあげる -->

  <!-- セキュリティのために必要 -->
 @method('put')
 @csrf

 <link rel="stylesheet" href="{{ asset('css/idea_create_edit.css') }}">
 
 <div class="container my-3 p-3 col-5 bg-light">

    <h4 class="text-center p-3 h1">Edit your idea!</h4>

        @if($errors->any())
        <ul>
            @foreach($errors->all() as $message)
            <li class = "alert alert-danger">
                {{$message}}
            </li>
                @endforeach 
        </ul>
        @endif
 
    
    <div class="row form-group m-4">
        <label class="py-2" for="title">{{ __('タイトル') }}</label>
        <input class="form-control" id="title" type="title" name="title" placeholder="アイデアのタイトルを入力して下さい。" value="{{old('title', $idea->title)}}">
    </div>

    <div class=" m-4">
        <label class="py-2" for="job_id">{{ __('対象の職業') }}</label>
        <div>
            <select class="form-control " name="job_id" id="job_id" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" form="post_idea" required>
            <option value="{{old('job', $idea->job_id)}}">{{'--未選択--'}}</option>
            @foreach ($jobs as $job)
            <option value=" {{ $job->id }} ">{{ $job->name }}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="row form-group m-4">
        <label class="py-2" for="body">{{ __('アイデア') }}</label>
        <textarea class="body p-3" id="body" name="body" placeholder="アイデアについて詳しく書いて下さい。">{{old('body', $idea->body)}}</textarea>
    </div>

    <div class="text-center text-md-right p-3">
        <input class="shadow btn-dark btn-lg" type="submit" value="更新">
        <!-- <input type="reset" value="リセット"> -->
    </div>
    
</div>

</form>
@endsection










</body>
</html>