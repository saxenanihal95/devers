<?php

include './classes/DB.php';
include './classes/Login.php';
include './classes/Post.php';
include './classes/Image.php';
$username="";
$isFollowing=False; 
$verified=False;

if(isset($_GET['topic']))
{

	if(DB::query("SELECT topics FROM posts WHERE FIND_IN_SET(:topic,topics)",array(':topic'=>$_GET['topic'])))
	{
		$posts = DB::query("SELECT * FROM posts WHERE FIND_IN_SET(:topic,topics)",array(':topic'=>$_GET['topic']));
		foreach ($posts as $post) {
			echo $post['body']."<br />";
		}
	}

}