  $(document).ready(function(){
    $("#comment-form").submit(function(event){
      event.preventDefault();
      var comment = $("#comment").val();
      var name = $("#name").val();
      var submit = $("#submit").val();
      $('.form-cmt').load("Comment/comment-db.php", {
        name: name,
        comment: comment,
        submit: submit
      });
    });
  });