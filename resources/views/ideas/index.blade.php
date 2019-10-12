    {{-- jquery-ui.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/jquery-ui.min.css" type="text/css">
    {{-- photopile.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/photopile.css">
    {{-- index.cssの呼び出し --}}
    <link rel="stylesheet" href="/css/index.css">
    {{-- app.cssの呼び出し --}}
    <link rel="stylesheet" href="css/app.css">

    @extends('layouts.app')
    @section('content')
    <div id="content" class="container">
        <div class="photopile_wrapper">
            <ul class="photopile">
                @foreach($ideas as $idea)
                <li>
                <a href="#" class="idea {{ $idea->color_name['bg'] }} {{ $idea->color_name['text'] }}" style="color:white" data-toggle="modal" data-target="#modalCenter" nickname="{{ $idea->user->profile->nickname }}" id="{{ $idea->id }}" user-id="{{ $idea->user_id }}" job-id="{{ $idea->job_id }}" title="{{ $idea->title }}" body="{{ $idea->body }}" created-at="{{ $idea->created_at }}" picture-path="{{ $idea->user->profile->picture_path }}"><div style="position:relative"><p style="position:absolute; top:50%; left:50%; transform : translate(-50%, -50%);">{{$idea->title}}</p><img src="images/frame.png" alt="" ></div></a>
                </li>
                @endforeach
            </ul>
            @foreach($ideas as $idea)
                <div class="modal fade" id="modalCenter" tabindex="-1" role="dialog" aria-labelledby="modalCenterTitle" aria-hidden="true">
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
                                <button type="button" class="btn btn-secondary" id="button-chat">チャットする</button>
                                {{-- <button type="button" class="btn btn-warning" id="button-favorite">お気に入り</button> --}}
                                <div class=" mt-3 ml-3">
                                        <i class="far fa-heart fa-lg js-like" id="favorite"></i>
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
        <script src="/js/app.js"></script>
        {{-- jquery-uiの呼び出し --}}
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
            integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
        {{-- photopileの呼び出し --}}
        <script src="/js/photopile.js"></script>
        {{-- main.jsの呼び出し --}}
        <script src="/js/main.js"></script>
    </div>
    
    @endsection
