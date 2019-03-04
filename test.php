<?php

include_once("classes/Database.class.php");
include_once("classes/Posts.class.php");
$db = new Database();
$conn = $db->getConnection();
$post = new Posts($conn);

$array = array("post_category_id"=>40, "post_title"=>"Some OtherPost Title", "post_body"=>"<b>My Contents!!!!</b><b>Added new Line</b>");
//$post->createPost($array);
$post->updatePost($array , "post_id=3");

?>