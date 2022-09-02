<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	if(!isset($_COOKIE['login'])){
		header('Location: '.$uri.'/register_system/login_page.php');
	}
	else{
		header('Location: '.$uri.'/register_system/home_page.php');
	}
	exit;
?>
Something is wrong with the XAMPP installation :-(
