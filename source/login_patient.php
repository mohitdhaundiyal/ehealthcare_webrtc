<?php
session_start();
include('../includes/connect.php');
if(isset($_POST['submit'])){
	$patient_email=$_POST['patient_email'];
	$patient_password=md5($_POST['patient_password']);
	$sql="SELECT * FROM patient where patient_email = '$patient_email' and patient_password ='$patient_password'";
	//echo $sql; exit;
	$result=mysqli_query($conn,$sql);
	if($data=mysqli_num_rows($result) == 1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['patient_email']==$row['patient_email'];
        $_SESSION['id']=$row['id'];
		$status=1;
		header("location:../patient_dashboard.php?status=".$status);
		exit;
	}
	else{
		$status="2";
	header("location:../patient_login.php?status=".$status);
	echo "INVALID USER";
	}
}
?>