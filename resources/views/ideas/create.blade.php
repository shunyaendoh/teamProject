<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>アイデア投稿画面</title>
</head>
<body>


<h1 class="lead-form">Share your idea!</h1>

<form action="http://127.0.0.1:8000/idea/index" method="POST">
  
  <div>
    <label for="title">タイトル：</label>
    <input id="title" type="title" name="title" placeholder="アイデアのタイトル">
  </div>
  
  
  <div>
    <label for="idea">アイデア：</label>
    <textarea  id="idea" placeholder="アイデアの詳細"></textarea>
  </div>

  <div>
    <input type="submit" value="投稿">
    <!-- <input type="reset" value="リセット"> -->
  </div>

</form>





</form>




</body>
</html>