
<?php

$connect = new PDO('mysql:host=localhost;dbname=db_blog', 'root', '');

$query = "SELECT * FROM tbl_comment WHERE parent_comment_id = '0' ORDER BY comment_id DESC LIMIT 10";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();
$output = '';
foreach($result as $row)
{
 $output .= '
 <div id = "panel">
  <div id="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div id="panel-body">'.$row["comment"].'</div>
  <div id="panel-footer" align="right"><button type="button" class="reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($connect, $row["comment_id"]);
}

echo $output;

function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM tbl_comment WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $connect->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div id="panel" style="margin-left:'.$marginleft.'px">
    <div id="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div id="panel-body">'.$row["comment"].'</div>
    <div id="panel-footer" align="right"><button type="button" class="reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
