<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>マイページ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/js/lightbox.min.js" type="text/javascript"></script>

    <style>
        .wrapper {
      margin: 0 auto;
      background-color: pink;
    }
    header {
      background: tomato;
    }

    .main {
      background: pink;
      display: flex;
      justify-content: center;
    }

    .content {
      display: flex;
      margin-top: 150px;
      margin-bottom: 100px;
    }


    footer {
      background: plum;
    }

    .profile {
      height: 100px;
      width: 100px;
      border-radius: 50%;
      margin-right: 60px;
    }


    .left {
      display: flex;
      flex-direction: column;
    }

    .left a{
      margin-top: 5px;
    }

    .top {
      display: flex;
      margin-bottom: 10px;
    }

    .top p{
      margin-left: 20px;
    }

    .middle {
      display: flex;
      margin-bottom: 10px;
      align-items: flex-end;
    }

    .middle p{
      margin-left: 20px;
    }

    .bottom {
      display: flex;
      background-color: white;
      height: 100px;
      width: 200px;
      border: solid 1px;
      margin-left: 20px;
    }

    .comment{
      margin-top: 5px;
      padding-left: 5px;
    }

    .name{
      font-size: 30px;
    }

    .age {
      font-size: 14px;
    }

    .edit {
      margin-left: 30px;
    }
    .tab_item {
      display: none;
    }

    .is-active-item {
      display: block;
    }

    .idea-save{
      margin-left: 400px;
    }

    /*ここから下は見た目だけ*/
    a {
      display: block;
      color: inherit;
      text-decoration: none;
    }

    .tab_btn {
      font-size: 24px;
      padding: 5px;
      border-bottom: solid 1px #E0F2F7;
      display: inline-block;
      background-color: #E0F2F7;
      opacity: 0.5;
      border-radius: 5px 5px 0 0;
    }
    
    .is-active-btn {
      opacity: 1;
      border-bottom: solid 1px #E0F2F7;
      color: #00BFFF;
    }
    
    .tab_item {
      width: 800px;
      height: 600px;
      padding: 5px;
      color: #00BFFF;
      background-color: #E0F2F7;
    }


    </style>
    
</head>
<body>
    <div class="wrapper">
        <header>header</header>
        <div class="container">
            <div class="main">
                <div class="content">
                    
                    <div class=left>
                    <!-- ここにプロフィール写真入ります(class="profile") -->
                      
                      <a href="/{{$profile->picture_path}}" data-lightbox="abc" data-title="">
                        <img src="/{{$profile->picture_path}}" alt="プロフィール画像" class="profile">
                      </a>
                      <a href="#####" class= "edit">編集</a>
                    </div>
                    
                    <div class="right">
                        <div class="top">
                            <!-- 居住地を表示 -->
                            <p class="place">{{$profile -> locate}}</p>
                            <!-- 職業を表示 -->
                            <p class="job">{{$profile -> job}}</p>
                              <!-- 性別を表示 -->
                              @if ($profile -> gender == 1)
                                 <!-- genderが1だった場合は男 -->
                                <p class="gender">男性</p>
                              @elseif ($profile -> gender == 2)
                                 <!-- genderが2だった場合は女 -->
                                <p class="gender">女性</p>
                              @elseif ($profile -> gender == 0)
                                 <!-- genderが2だった場合は女 -->
                                <p class="gender">未設定</p>
                              @endif
                            
                        </div>
                        <div class="middle">
                            <!-- ニックネーム表示 -->
                            <p class="name">{{$profile -> nickname}}</p>
                            <!-- 年齢表示 -->
                            @if ($profile -> age < 20)
                                 <!-- 20歳未満は10代と表示 -->
                                <p class="age">10代</p>
                            @elseif ($profile -> age < 30)
                                 <!-- 30歳未満は20代と表示 -->
                                <p class="age">20代</p>
                            @elseif ($profile -> age < 40)
                                 <!-- 40歳未満は30代と表示 -->
                                <p class="age">30代</p>
                            @elseif ($profile -> age < 50)
                                 <!-- 50歳未満は40代と表示 -->
                                <p class="age">40代</p>
                            @elseif ($profile -> age < 60)
                                 <!-- 60歳未満は50代と表示 -->
                                <p class="age">50代</p>
                            @elseif ($profile -> age < 70)
                                 <!-- 70歳未満は60代と表示 -->
                                <p class="age">60代</p>
                            @elseif ($profile -> age < 80)
                                 <!-- 80歳未満は70代と表示 -->
                                <p class="age">70代</p>
                            @elseif ($profile -> age == 0)
                                 <!-- デフォルトで未設定 -->
                                <p class="age">未設定</p>
                            
                            @endif  
                            
                        </div>
                        <div class="bottom">
                            <!-- フリーコメント表示 -->
                            <p class="comment">{{$profile -> comment}}</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="idea-save">
           
            <!-- タブのボタン部分 -->
            <a class="tab_btn is-active-btn" href="#item1">投稿したアイデア</a>
            <a class="tab_btn" href="#item2">いいねしたアイデア</a>
            
            
            <!-- タブのコンテンツ部分 -->
            <div class="tab_item is-active-item" id="item1">divタグが入ります</div>
            <div class="tab_item" id="item2">divタグが入ります</div>
            
            
            <!-- jQueryによるスクリプト -->
            <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
                crossorigin="anonymous"></script>
            <script>
                $(function () {
                    /*クリックイベント*/
                    $('.tab_btn').on('click', function () {
                        $('.tab_item').removeClass("is-active-item");
                        $($(this).attr("href")).addClass("is-active-item");
                        $('.tab_btn').removeClass('is-active-btn');
                        $(this).addClass('is-active-btn');
                    });
                });

            </script>
            
        </div>
        <footer>footer</footer>
        </div>
    </div>
</body>
</html>