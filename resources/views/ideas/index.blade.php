    {{-- jquery-ui.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    {{-- photopile.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/photopile.css">
    {{-- index.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/index.css">

    @extends('layouts.app')
    @section('content')
    <div class="h2 my-5 mr-5 py-4 hello-user" user="{{Auth::user()->profile->nickname}}">
        <p class="text-center hello-user-text hello-name">こんにちは{{ Auth::user()->profile->nickname }}さん！</p>
        <p class="text-center hello-user-text">みんなのアイデアをみてみよう！</p>
    </div>
    <div id="content" class="container bg-light">
        <div class="photopile_wrapper">
            <ul class="photopile">
                @foreach($ideas as $idea)
                <li>
                <a href="#" class="idea {{ $idea->color_name['bg'] }} {{ $idea->color_name['text'] }}" style="color:white" data-toggle="modal" data-target="#modalCenter-{{ $idea->id }}" nickname="{{ $idea->user->profile->nickname }}" id="{{ $idea->id }}" user-id="{{ $idea->user_id }}" job-id="{{ $idea->job_id }}" title="{{ $idea->title }}" body="{{ $idea->body }}" created-at="{{ $idea->created_at }}" picture-path="{{ $idea->user->profile->picture_path }}" user="{{ $idea->user }}"" profile="{{ $idea->user->profile }}"><div style="position:relative"><p style="position:absolute; top:50%; left:50%; transform : translate(-50%, -50%);">{{$idea->title}}</p><img src="images/frame.png" alt="" ></div></a>
                </li>
                @endforeach
            </ul>
            @foreach($ideas as $idea)
                <div class="modal fade" id="modalCenter-{{ $idea->id }}" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
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
                                <a class="btn btn-secondary button-chat" href="javascript:;"">チャットする</a>
                                <div class=" mt-3 ml-3">
                                        @if (Auth::check() && $idea->favorites->contains(function ($user) {
                                            return $user->id === Auth::user()->id;
                                        }))
                                            <i class="favorite fas fa-heart fa-lg text-danger js-dislike"></i>
                                        @else
                                            <i class="favorite far fa-heart fa-lg text-danger js-like"></i>
                                        @endif
                                        <input class="idea-id" type="hidden" value="">
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
              @endforeach
            
        </div>
        {{-- jqueryの呼び出し --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        {{-- jquery-uiの呼び出し --}}
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        {{-- photopileの呼び出し --}}
        <script src="/js/photopile.js"></script>
        {{-- main.jsの呼び出し --}}
        <script src="/js/main.js"></script>
    </div>
    
    @endsection
