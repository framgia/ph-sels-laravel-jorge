$(document).ready(function() {
  $(document).on('click', '#btn-toggle-follow', function () {
    let element = $(this);
    let userId = $(this).attr('user-id')
    let formToken = $('meta[name=csrf-token]').attr('content');
    let isFollowing = $(this).attr('is-following');

    if(isFollowing == 0) {
      $.ajax({
        url: `/user/follow/${userId}`,
        method: 'POST',
        data: {
          _token: formToken, 
          userId: userId,
        }, success: function() {
          element.html('Unfollow');
          element.attr('is-following', 1);
          console.log("IM follow here");
        }
      });
    } else {
      $.ajax({
        type: 'POST',
        url: `/user/unfollow/${userId}`,
        data: {
          _method: 'delete',
          _token: formToken, 
          userId: userId,
        }, success: function() {
          element.html('Follow');
          element.attr('is-following', 0);
          console.log("IM unfollow here");
        }
      });
    }
  });
});