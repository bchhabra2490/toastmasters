<?php
	session_start();
	if(isset($_SESSION['logged'])||isset($_COOKIE['username'])){
		require 'home.html';
	}else{
		header('Refresh:0;URL=login.php');
	}
?>	