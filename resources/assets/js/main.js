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
            $('.modal-title').html(`<div style="display:flex;"><a href="profile/${userId}"><img src="/${picturePath}" class="profile-image"></a><div class="ml-4"><p>${nickname}</p><h2>${title}</h2></<h2></div>`);
            $('#button-chat').attr('onclick',`location.href='/chat/${userId}/1'`);
            $('#button-favorite').attr('onclick',`location.href='/favorite/${id}'`);
        });
$(document).on('click', '.js-like', function () {
    var ideaId = $(this).attr('ideaId');
    console.log(ideaId);

    var $clickedBtn = $(this);

    like(ideaId, $clickedBtn);
});

function like(ideaId, $clickedBtn) {
    $.ajax({
        url: '/idea/like/' + ideaId,
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
        .done(function () {
            console.log("success");
        })
        .fail(function () {
            console.log("failed");
        })
        .always(function () {
            changeLikeBtn($clickedBtn);            
        });
}
    
function changeLikeBtn(btn) {
    btn.toggleClass('far').toggleClass('fas');
    btn.toggleClass('js-like').toggleClass('js-dislike');
}
    
$(document).on('click', '.js-dislike', function () {
    var ideaId = $(this).attr('ideaId');
  
    var $clickedBtn = $(this);
  
    dislike(ideaId, $clickedBtn);
});
  
  function dislike(ideaId, $clickedBtn) {
    $.ajax({
        url: '/idea/dislike/' + ideaId,
        type: 'POST',
        dataType: 'json',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    })
        .done(function () {
            console.log("success");
        })
        .fail(function () {
            console.log("failed");
        })
        .always(function () {
            changeLikeBtn($clickedBtn);            
        });
  }
  