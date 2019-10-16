    <title>マイページ</title>
    {{-- jquery-ui.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    {{-- photopile.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/photopile.css">

    {{-- reset.cssの呼び出し --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.css">
    {{-- lightbox.cssの呼び出し --}}
    <link href="/css/lightbox.css" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.7.1/css/lightbox.css" rel="stylesheet"> --}}
     {{-- profile.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/profile.css">
  
</head>
<body>
    @extends('layouts.app')
  @section('content')
    <div class="wrapper">
        <div class="container">
            <div class="main">
                <div class="content">
                    
                    <div class=left>
                    <!-- ここにプロフィール写真入ります(class="profile") -->
                      
                      <a href="{{asset($user->profile->picture_path)}}" data-lightbox="abc" data-title="">
                        <img src="{{asset($user->profile->picture_path)}}" alt="プロフィール画像" class="profile">
                      </a>
                    <a href="{{route('profile.edit',['user_id' => $user->profile->user_id])}}" class= "edit">編集</a>
                    </div>
                    
                    <div class="right">
                        <div class="top">
                            <!-- 居住地を表示 -->
                            <p class="place">{{$user->profile->locate}}</p>
                            <!-- 職業を表示 -->
                            <p class="job">{{$user->profile->job}}</p>
                              <!-- 性別を表示 -->
                              @if ($user->profile->gender == 0)
                                 <!-- genderが1だった場合は未設定 -->
                                <p class="gender">未設定</p>
                              @elseif ($user->profile->gender == 1)
                                 <!-- genderが2だった場合は男 -->
                                <p class="gender">男性</p>
                              @elseif ($user->profile->gender == 2)
                                 <!-- genderが2だった場合は女 -->
                                <p class="gender">女性</p>
                              @endif
                            
                        </div>
                        <div class="middle">
                            <!-- ニックネーム表示 -->
                            <p class="name">{{$user->profile->nickname}}</p>
                            <!-- 年齢表示 -->
                            @if ($user->profile->age < 20 && $user->profile->age >= 10)
                                 <!-- 20歳未満は10代と表示 -->
                                <p class="age">10代</p>
                            @elseif ($user->profile->age < 30)
                                 <!-- 30歳未満は20代と表示 -->
                                <p class="age">20代</p>
                            @elseif ($user->profile->age < 40)
                                 <!-- 40歳未満は30代と表示 -->
                                <p class="age">30代</p>
                            @elseif ($user->profile->age < 50)
                                 <!-- 50歳未満は40代と表示 -->
                                <p class="age">40代</p>
                            @elseif ($user->profile->age < 60)
                                 <!-- 60歳未満は50代と表示 -->
                                <p class="age">50代</p>
                            @elseif ($user->profile->age < 70)
                                 <!-- 70歳未満は60代と表示 -->
                                <p class="age">60代</p>
                            @elseif ($user->profile->age < 80)
                                 <!-- 80歳未満は70代と表示 -->
                                <p class="age">70代</p>
                            @elseif ($user->profile->age == 0)
                                 <!-- デフォルトで未設定 -->
                                <p class="age">未設定</p>
                            @elseif($user->profile->age < 10 && $user->profile->age > 0)
                                <!-- 10歳以下は子どもと表示 -->
                                <p class="age">子ども</p>
                            @elseif($user->profile->age >= 80 )
                                <!-- 80歳以上はご老人と表示 -->
                                <p class="age">ご老人</p>
                            @endif  
                            
                        </div>
                        <div class="bottom">
                            <!-- フリーコメント表示 -->
                            <p class="comment">{{$user->profile->comment}}</p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="idea-save">
            <!-- タブのボタン部分 -->
            <a class="tab_btn is-active-btn" href="#item1">投稿したアイデア</a>
            <a class="tab_btn" href="#item2">いいねしたアイデア</a>

            <!-- タブのコンテンツ部分 -->
            <div class="tab_item is-active-item" id="item1">
                <div>

                {{-- 投稿したアイデアの表示 --}}
                    <div id="content" class="container mt-3">
                        <div class="photopile_wrapper">
                            <ul class="photopile">
                                @foreach($user->ideas as $idea)
                                <li class="mx-3 my-3">
                                <a href="#" class="idea {{ $idea->color_name['bg'] }} {{ $idea->color_name['text'] }}" style="color:white" data-toggle="modal" data-target="#modalPost" nickname="{{ $idea->user->profile->nickname }}" id="{{ $idea->id }}" user-id="{{ $idea->user_id }}" job-id="{{ $idea->job_id }}" title="{{ $idea->title }}" body="{{ $idea->body }}" created-at="{{ $idea->created_at }}" picture-path="{{ $idea->user->profile->picture_path }}"><div style="position:relative"><p style="position:absolute; top:50%; left:50%; transform : translate(-50%, -50%);">{{$idea->title}}</p><img src="/images/frame.png" alt="" ></div></a>
                                </li>
                                @endforeach
                            </ul>
                                <div class="modal fade" id="modalPost" tabindex="-1" role="dialog" aria-labelledby="modalPostTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content" id="modalBack">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="modalLongTitle"></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            ...
                                            </div>
                                            <div class="modal-footer">
                                                @if (Auth::check() && Auth::user()->id == $user->id)
                                                <button type="button" class="btn btn-secondary" id="button-edit">編集する</button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                        </div>
                    {{-- jqueryの呼び出し --}}
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script src="/js/app.js"></script>
                    {{-- jquery-uiの呼び出し --}}
                    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
                    {{-- photopileの呼び出し --}}
                    <script src="/js/photopile_wo_main.js"></script>
                    {{-- wo_main.jsの呼び出し --}}
                    <script src="/js/wo_main.js"></script>
                    </div>
                {{-- /投稿したアイデアの表示   --}}

                </div>
            </div>
            <div class="tab_item" id="item2">
                <div>

                {{-- いいねしたアイデアの表示 --}}
                    <div id="content" class="container mt-3">
                            <div class="photopile_wrapper">
                                <ul class="photopile">
                                    @foreach($user->favorites as $idea)
                                    <li class="mx-3 my-3">
                                    <a href="#" class="idea2 {{ $idea->color_name['bg'] }} {{ $idea->color_name['text'] }}" style="color:white" data-toggle="modal" data-target="#modalFav" nickname="{{ $idea->user->profile->nickname }}" id="{{ $idea->id }}" user-id="{{ $idea->user_id }}" job-id="{{ $idea->job_id }}" title="{{ $idea->title }}" body="{{ $idea->body }}" created-at="{{ $idea->created_at }}" picture-path="{{ $idea->user->profile->picture_path }}"><div style="position:relative"><p style="position:absolute; top:50%; left:50%; transform : translate(-50%, -50%);">{{$idea->title}}</p><img src="/images/frame.png" alt="" ></div></a>
                                    </li>
                                    @endforeach
                                </ul>
                                    <div class="modal fade" id="modalFav" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content" id="modalBackfav">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalLongTitle"></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                ...
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" id="button-chat">チャットする</button>
                                                    <div class=" mt-3 ml-3">
                                                            @if (Auth::check() && $user->favorites->contains(function ($user) {
                                                                return $user->id === Auth::user()->id;
                                                            }))
                                                                <i class="fas fa-heart fa-lg text-danger js-dislike"></i>
                                                            @else
                                                                <i class="far fa-heart fa-lg text-danger js-like"></i>
                                                            @endif
                                                            <input class="idea-id" type="hidden" value="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                            </div>
                        {{-- jquery-uiの呼び出し --}}
                        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
                            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
                        {{-- photopileの呼び出し --}}
                        <script src="/js/photopile_wo_main.js"></script>
                        {{-- main.jsの呼び出し --}}
                        <script src="/js/wo_main2.js"></script>
                    </div>
                {{-- /いいねしたアイデアの表示 --}}
                            
                </div>
            </div>   
        </div>
        </div>
    </div>

    {{-- lightbox.jsの呼び出し --}}
    <script src="/js/lightbox.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script> 
    {{-- profile.jsの呼び出し --}}
    <script src="/js/profile.js"></script>
    @endsection
