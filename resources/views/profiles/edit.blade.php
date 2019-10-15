<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile_edit</title>
</head>
<body>
<h1>プロフィールの編集</h1>

<form action="{{ route('profile.update',['user_id' => $user->id ])}}" method="POST" name="$jobs" id="edit_profile" enctype="multipart/form-data">
@csrf
@method('put')
  <div class="row">
    <div class="col">
      <label for="nickname">ニックネーム：</label>
      <input type="text" class="form-control" placeholder="nickname" name="nickname">
    </div>
  </div>


<select class="custom-select" form="edit_profile" name="age">
  <option selected>年齢</option>
  @for($i = 0; $i < 100; $i++)
  <option value="{{$i}}">{{$i}}</option>
  @endfor
</select>
  

<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" checked>
  <label class="form-check-label" for="exampleRadios1">
    男性
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="2">
  <label class="form-check-label" for="exampleRadios2">
    女性
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" type="radio" name="gender" id="exampleRadios3" value="3">
  <label class="form-check-label" for="exampleRadios3">
    その他
  </label>
</div>

  <div class="form-row">
    <div class="col-7">
      <input type="text" class="form-control" placeholder="locate" name="locate">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="comment" name="comment">
    </div>
    <!-- <div class="col">
      <input type="text" class="form-control" placeholder="skills" name="skills">
    </div> -->
  </div>


<select class="custom-select" form="edit_profile" name="job">
  <option selected>職業</option>
  @foreach($jobs as $job)
  <option value="{{$job->id}}">{{$job->name}}</option>
  @endforeach
</select>
<!-- 
  <div class="form-group">
    <label for="exampleInputEmail1">メールアドレス</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" >
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
   -->

   <div class="form-group row">
        <label for="picture" class="col-md-4 col-form-label text-md-right">写真</label>
​
        <div class="col-md-6">
            <input id="picture" type="file" name="picture" class="form-control{{ $errors->has('picture_path') ? ' is-invalid' : '' }}">
        </div>
    </div>

  <button type="submit" class="btn btn-primary">送信</button>
</form>

</body>
</html>