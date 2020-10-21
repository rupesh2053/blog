<head>
<link rel="stylesheet" type="text/css" href="Comment/styleComment.css">
</head><br>
  <form method="POST" id="comment_form">
    <span id="comment_message"></span>
    <input type="text" name="comment_name" id="comment_name"placeholder="Name" />
    <input name="comment_content" id="comment_content" placeholder="Comment"/>
    <input type="hidden" name="comment_id" id="comment_id" value="0" />
    <input type="submit" name="submit" id="submit" value="Post" />
  </form>
   <div id="display_comment"></div>

<script src = "Comment/comment-system.js"></script>
