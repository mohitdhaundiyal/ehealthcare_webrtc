<?php
	session_start();
	if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
		header("location:../admin_login.php");
	}
?>