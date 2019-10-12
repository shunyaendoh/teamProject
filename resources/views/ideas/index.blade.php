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
                                <button type="button" class="btn btn-warning" id="button-favorite">お気に入り</button>
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
    </div>
    <script>
        $('.idea').on('click', function() {
            var nickname = $(this).attr("nickname");
            var id =  $(this).attr("id");
            var userId = $(this).attr("user-id");
            var jobId = $(this).attr("job-id");
            var title = $(this).attr("title");
            var body = $(this).attr("body");
            var createdAt = $(this).attr("created-at");
            var picturePath = $(this).attr("picture-path");
            console.log(id);
            console.log(userId);
            console.log(jobId);
            console.log(title);
            console.log(body);
            console.log(createdAt);
            if(jobId == 1) {
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-primary");
            } else if(jobId == 2) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-secondary");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-favorite").addClass("btn-warning");
                $("#button-chat").addClass("btn-light");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-secondary");
            } else if(jobId == 3) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-success");
            } else if(jobId == 4) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-red");                

                $("#favorite").addClass("fav-yellow");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-danger");
            } else if(jobId == 5) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-light");
                $("#button-favorite").removeClass("btn-warning");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-primary");
                $("#modalBack").addClass("text-dark");
                $("#modalBack").addClass("bg-warning");
            } else if(jobId == 6) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-info");
            } else if(jobId == 7) {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-dark");
                $("#modalBack").removeClass("text-light");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-light");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-secondary");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-dark");
                $("#modalBack").addClass("bg-light");
            } else {
                $("#modalBack").removeClass("bg-primary");
                $("#modalBack").removeClass("bg-secondary");
                $("#modalBack").removeClass("bg-success");
                $("#modalBack").removeClass("bg-danger");
                $("#modalBack").removeClass("bg-warning");
                $("#modalBack").removeClass("bg-info");
                $("#modalBack").removeClass("bg-light");
                $("#modalBack").removeClass("text-dark");
                $("#button-favorite").removeClass("btn-primary");
                $("#button-chat").removeClass("btn-secondary");
                $("#favorite").removeClass("fav-yellow");                

                $("#favorite").addClass("fav-red");
                $("#button-chat").addClass("btn-light");
                $("#button-favorite").addClass("btn-warning");
                $("#modalBack").addClass("text-light");
                $("#modalBack").addClass("bg-dark");
            }

            $('.idea-id').val(id);
            $('.js-like').attr('ideaId',id);
            $('.modal-body').html(`<div><p class="h2">${body}</p><p class="display-5 created-at">${createdAt}</p></div>`);
            $('.modal-title').html(`<div style="display:flex;"><a href="profile/${userId}"><img src="${picturePath}" class="profile-image"></a><div class="ml-4"><p>${nickname}</p><h2>${title}</h2></<h2></div>`);
            $('#button-chat').attr('onclick',`location.href='/chat/${userId}/1'`);
            $('#button-favorite').attr('onclick',`location.href='/favorite/${id}'`);
        });
$(document).on('click', '.js-like', function() {
    let ideaId = $(this).attr('ideaId');
    console.log(ideaId);

    let $clickedBtn = $(this);

    like(ideaId, $clickedBtn);
})

function like(ideaId, $clickedBtn) {
    $.ajax({
        url: '/idea/like/' + ideaId, 
        type: 'POST', 
        dataTyupe: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
    .then(
        function (data) {
            changeLikeBtn($clickedBtn);
        }
    )
}
function changeLikeBtn(btn) {
    btn.toggleClass('far').toggleClass('fas');
    btn.toggleClass('js-like').toggleClass('js-dislike');
}
    </script>
    @endsection
