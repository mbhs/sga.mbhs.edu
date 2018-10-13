<?php
	session_start();
	
	if(!(isset($_SESSION['auth']) && $_SESSION['auth'] == 'aye')) {
		header("Location: " . (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . "/staff/login.php");
		exit();	
	}
?> 