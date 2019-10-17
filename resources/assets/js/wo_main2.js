$('.idea2').on('click', function () {
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
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-primary");
  } else if(jobId == 2) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-secondary");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-favorite").addClass("btn-warning");
      $("#button-chat").addClass("btn-light");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-secondary");
  } else if(jobId == 3) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-success");
  } else if(jobId == 4) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-red");                

      $("#favorite").addClass("fav-yellow");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-danger");
  } else if(jobId == 5) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-light");
      $("#button-favorite").removeClass("btn-warning");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-primary");
      $("#modalBackfav").addClass("text-dark");
      $("#modalBackfav").addClass("bg-warning");
  } else if(jobId == 6) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-info");
  } else if(jobId == 7) {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-dark");
      $("#modalBackfav").removeClass("text-light");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-light");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-secondary");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-dark");
      $("#modalBackfav").addClass("bg-light");
  } else {
      $("#modalBackfav").removeClass("bg-primary");
      $("#modalBackfav").removeClass("bg-secondary");
      $("#modalBackfav").removeClass("bg-success");
      $("#modalBackfav").removeClass("bg-danger");
      $("#modalBackfav").removeClass("bg-warning");
      $("#modalBackfav").removeClass("bg-info");
      $("#modalBackfav").removeClass("bg-light");
      $("#modalBackfav").removeClass("text-dark");
      $("#button-favorite").removeClass("btn-primary");
      $("#button-chat").removeClass("btn-secondary");
      $("#favorite").removeClass("fav-yellow");                

      $("#favorite").addClass("fav-red");
      $("#button-chat").addClass("btn-light");
      $("#button-favorite").addClass("btn-warning");
      $("#modalBackfav").addClass("text-light");
      $("#modalBackfav").addClass("bg-dark");
  }

  $('.idea-id').val(id);
  $('.js-like').attr('ideaId',id);
  $('.modal-body').html(`<div><p class="h2">${body}</p><p class="display-5 created-at">${createdAt}</p></div>`);
  $('.modal-title').html(`<div style="display:flex;"><a href="profile/${userId}"><img src="/${picturePath}" class="profile-image"></a><div class="ml-4"><p>${nickname}</p><h2>${title}</h2></<h2></div>`);
  $('#button-edit').attr('onclick',`location.href='/idea/edit/${id}/'`);
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
