<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アイデア投稿画面</title>
</head>
<body>


<h1>Share your idea!</h1>

<form action="{{ route('idea.store') }}" method="POST" name="idea_post" id="post_idea">
  <!-- formにidをつけてあげて、selectタグとつなげる時にform=で同じやつを書いて、繋げてあげる -->

  <!-- セキュリティのために必要 -->
 @csrf

 <link rel="stylesheet" href="{{ asset('css/create.css') }}">
 
  <div>
    <label for="title">タイトル：</label>
    <input class="title" id="title" type="title" name="title" placeholder="アイデアのタイトル">
  </div>
  
  
  <div>
    <label for="job_id" class="col-md-4 col-form-label text-md-right">{{ __('対象の職業：') }}</label>
    <div class="col-md-6">
        <select name="job_id" id="job_id" class="form-control{{ $errors->has('job_id') ? ' is-invalid' : '' }}" form="post_idea" required>
       
        <option class="select_box" value="who">{{'--未選択--'}}</option>
        @foreach ($jobs as $job)
        <option value=" {{ $job->id }} ">{{ $job->name }}</option>
        @endforeach
        </select>
    </div>
  </div>


    <label class="body_title" for="body">アイデア：</label>
    <textarea class="body" id="body" name="body" placeholder="アイデアの詳細"></textarea>
  </div>

  <div>
    <input type="submit" value="投稿">
    <!-- <input type="reset" value="リセット"> -->
  </div>

</form>










</body>
</html>