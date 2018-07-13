<?php
$connect_error = 'Error message';
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'test') or die($connect_error);
?>