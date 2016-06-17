<?php
	$link = mysqli_connect('localhost','root');
	mysqli_select_db($link, 'schoolin');
	mysqli_query($link, "SET NAMES 'utf8'");
?>