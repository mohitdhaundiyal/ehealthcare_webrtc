<?php
	session_start();
	include('../includes/connect.php');
	if(isset($_POST['submit'])){
		$doctor_email=$_POST['doctor_email'];
		$doctor_password=md5($_POST['doctor_password']);
		$sql="SELECT * FROM doctor where doctor_email = '$doctor_email' and doctor_password ='$doctor_password'";
		//echo $sql;exit;
		$result=mysqli_query($conn,$sql);
		if($data=mysqli_num_rows($result) == 1){
			$row=mysqli_fetch_assoc($result);
			$_SESSION['doctor_name']==$row['doctor_name'];
			$_SESSION['id']=$row['id'];
			$status=1;
			header("location:../doctor_dashboard.php?id=".$_SESSION['id']);
			exit;
		}
		else{
			$status="2";
			header("location:../doctor_login.php?status=".$status);
			echo "INVALID USER";
		}
	}
?>