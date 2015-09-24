<?php
session_start();
?>
<?php
		if(!isset($_SESSION['logged'])||!isset($_COOKIE['username'])){
			header('Refresh:0;URL=login.php');
			die();
			}//authenticate whether user is logged in
?>			