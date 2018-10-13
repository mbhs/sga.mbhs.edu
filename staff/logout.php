<?php
	session_start();
	session_destroy();
	header("Location: " . (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . "/staff/login.php");
	exit();
?>