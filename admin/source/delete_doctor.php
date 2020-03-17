<?php
	include('../../includes/admin_session.php');
	include('../../includes/connect.php');
	$id=$_GET['id'];
	$sql="DELETE FROM `doctor` WHERE id='$id'";
	$result=mysqli_query($conn,$sql);
	//echo $sql;exit;
	header('location:../manage_doctor.php');
	if($result==true){
		echo "data deleted";
	}
?>