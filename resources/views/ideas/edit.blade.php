<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アイデア編集画面</title>

   

    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
   
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    

    <!-- BootstrapのJS読み込み -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</head>


<body>





<form action="{{ route('idea.update', ['idea' => $idea->id]) }}" method="POST" name="idea_post" id="post_idea">
  <!-- formにidをつけてあげて、selectタグとつなげる時にform=で同じやつを書いて、繋げてあげる -->

  <!-- セキュリティのために必要 -->
 @method('PUT')
 @csrf

 <link rel="stylesheet" href="{{ asset('css/idea_create_edit.css') }}">
 
 <div class="container my-3 p-3 col-5 bg-light">

    <h1 class="text-center p-3">Edit your idea!</h1>

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
        <input class="title" id="title" type="title" name="title" value="{{old('title', $idea->title)}}">
    </div>
    
    
    <div class="row m-5">
        <label for="job_id">{{ __('対象の職業：') }}</label>
        <div>
            <select class="form-control" name="job_id" id="job_id" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" form="post_idea" required>
        
            <option class="txt-center" value="{{old('job_id', $idea->job_id)}}">{{'--未選択--'}}</option>
            @foreach ($jobs as $job)
            <option value=" {{ $job->id }} ">{{ $job->name }}</option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="row form-group m-5">
        <label for="body">アイデア：</label>
        <textarea class="body" id="body" name="body">{{old('body', $idea->body)}}</textarea>
    </div>

    <div class="text-center text-md-right p-3">
        <input class="shadow btn-primary btn-lg" type="submit" value="更新">
        <!-- <input type="reset" value="リセット"> -->
    </div>

</div>

</form>










</body>
</html>