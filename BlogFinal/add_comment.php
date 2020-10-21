
<?php

$connect = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '');

$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p style = "background: red; padding: 7px; border-radius: 3px;">*Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p style = "background: red; padding: 7px; border-radius: 3px;">*Comment is required</p>';
}
else {
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO tbl_comment 
 (parent_comment_id, comment, comment_sender_name,date) 
 VALUES (:parent_comment_id, :comment, :comment_sender_name,NOW())
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':parent_comment_id' => $_POST["comment_id"],
   ':comment'    => $comment_content,
   ':comment_sender_name' => $comment_name
  )
 );
 $error = '<p style = "background: green; padding: 7px; border-radius: 3px;">Comment added successfully.</p>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>