<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>マイページ</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    <link rel="stylesheet" href="css/style.css">
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


    .right p{
      margin-left: 20px;
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

    .middle {
      display: flex;
      margin-bottom: 10px;
      align-items: flex-end;
    }

    .bottom {
      display: flex;
      background-color: white;
      height: 100px;
      width: 200px;
      border: solid 1px;
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
                    <a href="IMG_0024.jpg" data-lightbox="abc" data-title="">
                        <img src="IMG_0024.jpg" alt="プロフィール画像" class="profile">
                    </a>
                    <a href="#####" class= "edit">編集</a>
                    </div>
                    
                    <div class="right">
                        <div class="top">
                            <p class="place">関東</p>
                            <p class="job">会社員</p>
                        </div>
                        <div class="middle">
                            <p class="name">エンチャン</p>
                            <p Class="age">30代</p>
                        </div>
                        <div class="bottom">
                            しゅんや殺します！
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