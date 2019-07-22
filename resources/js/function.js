$(document).ready(function() {
  let formToken = $('meta[name=csrf-token]').attr('content');
  let courseId = $('#course-title').attr('course-id');
  let totalLesson = parseInt($('#progress').attr('total-lesson'));
  let answers = [];
  let sending = false;

  $(document).on('click', '#btn-choice', function() {
    if(sending) {
      return;
    }

    let currLesson = $(this).parents().eq(2);
    let nextLesson = currLesson.next();

    
    let currentLesson = parseInt($('#progress').attr('current-lesson'));

    if(currentLesson <= totalLesson) {
      currentLesson++;
      answers.push($(this).attr('choice-id'));
      console.log(currentLesson + " / " + totalLesson);
      console.log(currentLesson == totalLesson + 1);
      // Send
      if(currentLesson == totalLesson + 1) {
        console.log("Send");

        sending = true;

        $.ajax({
          url: `/user/end-course/${courseId}`,
          type: 'POST',
          data: {
            answers: answers,
            _token: formToken
          }, success: function(response) {
            hostname = window.location.hostname;
            port = window.location.port;
            if(port == null) {
              window.location.href = `http://${hostname}/user/result/${response.result.id}`;
            } else {
              window.location.href = `http://${hostname}:${port}/user/result/${response.result.id}`;
            }
          }
        });
      // Change 
      } else {
        // Change display to the next question
        currLesson.css('display', 'none');
        nextLesson.css('display', 'flex');

        // Change Progress label
        $('#progress').attr('current-lesson', currentLesson);
        $('#progress').html(`${currentLesson} of ${totalLesson}`);
      }
    }
  });
});