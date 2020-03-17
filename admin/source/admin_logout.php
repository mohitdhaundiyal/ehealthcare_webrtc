<?php
	include('../../includes/admin_session.php');
	include('../../includes/connection.php');
	session_destroy();
	session_unset(); 
	header("location:../../index.php");
?>