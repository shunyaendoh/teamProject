   {{-- reset.cssの呼び出し --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
  {{-- lightbox.cssの呼び出し --}}
  <link href="/css/lightbox.css" rel="stylesheet">
  {{-- profile.cssの呼び出し --}}
  <link rel="stylesheet" href="/css/profile.css">
  
  @extends('layouts.app')
  @section('content')
    <div class="wrapper">
        <div class="container">
            <div class="main">
                <div class="content">
                    
                    <div class=left>
                    <!-- ここにプロフィール写真入ります(class="profile") -->
                              @if($profile->picture_path)
                                <a href="/{{$profile->picture_path}}" data-lightbox="abc" data-title="">
                                <img src="/{{$profile->picture_path}}" alt="プロフィール画像" class="profile">
                                </a>
                              @elseif (!($profile->picture_path))
                                <a href="/images/unknown.jpeg" data-lightbox="abc" data-title="">
                                <img src="/images/unknown.jpeg" alt="プロフィール画像" class="profile">
                                </a>
                              @endif
                      
                      
                      <a href="{{ route('profile.edit', ['user' => $profile->user_id]) }}" class= "edit">編集</a>
                    </div>
                    
                    <div class="right">
                        <div class="top">
                            <!-- 居住地を表示 -->
                            <p class="place">{{$profile->locate}}</p>
                            <!-- 職業を表示 -->
                            <p class="job">{{$profile->job}}</p>
                              <!-- 性別を表示 -->
                              @if ($profile->gender == 1)
                                 <!-- genderが1だった場合は男 -->
                                <p class="gender">男性</p>
                              @elseif ($profile->gender == 2)
                                 <!-- genderが2だった場合は女 -->
                                <p class="gender">女性</p>
                              @elseif ($profile->gender == 0)
                                 <!-- genderが2だった場合は女 -->
                                <p class="gender">未設定</p>
                              @endif
                            
                        </div>
                        <div class="middle">
                            <!-- ニックネーム表示 -->
                            <p class="name">{{$profile->nickname}}</p>
                            <!-- 年齢表示 -->
                            @if ($profile->age < 20)
                                 <!-- 20歳未満は10代と表示 -->
                                <p class="age">10代</p>
                            @elseif ($profile->age < 30)
                                 <!-- 30歳未満は20代と表示 -->
                                <p class="age">20代</p>
                            @elseif ($profile->age < 40)
                                 <!-- 40歳未満は30代と表示 -->
                                <p class="age">30代</p>
                            @elseif ($profile->age < 50)
                                 <!-- 50歳未満は40代と表示 -->
                                <p class="age">40代</p>
                            @elseif ($profile->age < 60)
                                 <!-- 60歳未満は50代と表示 -->
                                <p class="age">50代</p>
                            @elseif ($profile->age < 70)
                                 <!-- 70歳未満は60代と表示 -->
                                <p class="age">60代</p>
                            @elseif ($profile->age < 80)
                                 <!-- 80歳未満は70代と表示 -->
                                <p class="age">70代</p>
                            @elseif ($profile->age == 0)
                                 <!-- デフォルトで未設定 -->
                                <p class="age">未設定</p>
                            
                            @endif  
                            
                        </div>
                        <div class="bottom">
                            <!-- フリーコメント表示 -->
                            <p class="comment">{{$profile->comment}}</p>
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
            ​     
            {{-- Jqueryの呼び出し --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="/js/app.js"></script>
            {{-- lightbox.jsの呼び出し --}}
            <script src="/js/lightbox.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
            {{-- profile.jsの呼び出し --}}
            <script src="/js/profile.js"></script>

        </div>
        @endsection
