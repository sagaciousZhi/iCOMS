<?php
function user_exists($username){
	$username = sanitize($username);
	return (mysqli_result(mysqli_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username'"), 0)== 1) ? true : false;
}

function user_active($username){
	$username = sanitize($username);
	return (mysqli_result(mysqli_query("SELECT COUNT(`user_id`) FROM `users` WHERE `username` = '$username' AND `active` = 1"), 0)== 1) ? true : false;
}
?>