<?php
	include('../../includes/admin_session.php');
	include('../../includes/connect.php');
	if (isset($_POST['submit'])){
		$doctor_name=$_POST['doctor_name'];
		$doctor_id=$_POST['doctor_id'];
		$doctor_address=$_POST['doctor_address'];
		$doctor_gender=$_POST['doctor_gender'];
		$doctor_phoneno=$_POST['doctor_phoneno'];
		$doctor_department=$_POST['doctor_department'];
		$doctor_email=$_POST['doctor_email'];
		$doctor_password=md5($_POST['doctor_password']);
		
		$path = "../../uploads/";
		$doctor_photo = '';
		if(!empty($_FILES["doctor_photo"]["tmp_name"])){ 
			$imageFileType = strtolower(pathinfo($_FILES["doctor_photo"]["name"],PATHINFO_EXTENSION));
			$doctor_photo = date("Y-m-d")."-".rand(0,10000).".".$imageFileType;
			$target_file_pho = $path.$doctor_photo;
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
				$status=2;
			}
			else
			{
				move_uploaded_file($_FILES['doctor_photo']["tmp_name"], $target_file_pho);
			}}
			
			$sql="INSERT INTO `doctor`(`doctor_name`, `doctor_id`, `doctor_address`, `doctor_gender`, `doctor_phoneno`, `doctor_department`, `doctor_photo`, `doctor_email`, `doctor_password`) 
			VALUES ('$doctor_name','$doctor_id','$doctor_address','$doctor_gender','$doctor_phoneno','$doctor_department','$doctor_photo','$doctor_email', '$doctor_password')";
			//echo $sql;exit;
			$result=mysqli_query($conn,$sql);
	}
	if ($result==1){
		echo "sucessfully added!";
		header('location:../manage_doctor.php');
		}else{
		echo "try again!";
		header('location:../add_doctor.php');
	}
?>