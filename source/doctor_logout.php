<?php
session_start();
include('includes/connect.php');
if(isset($_SESSION['id']) || !empty($_SESSION['id'])){
	header("location:doctor_dashboard.php");
}
?>