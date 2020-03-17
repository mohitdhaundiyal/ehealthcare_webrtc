<?php
session_start();
include('../includes/connect.php');
if(isset($_POST['submit'])){
	$admin_name=$_POST['admin_name'];
	$admin_password=($_POST['admin_password']);
	$sql="SELECT * FROM admin where admin_name = '$admin_name' and admin_password ='$admin_password'";
	//echo $sql; exit;
	$result=mysqli_query($conn,$sql);
	if($data=mysqli_num_rows($result) == 1){
		$row=mysqli_fetch_assoc($result);
		$_SESSION['admin_name']==$row['admin_name'];
        $_SESSION['id']=$row['id'];
		$status=1;
		header("location:../admin/dashboard.php?status=".$status);
		exit;
	}
	else{
		$status="2";
	header("location:../admin_login.php?status=".$status);
	echo "INVALID USER";
	}
}
?>