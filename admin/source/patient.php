<?php
	include('../../includes/admin_session.php');
	include('../../includes/connect.php');
	if (isset($_POST['submit'])){
		$patient_name=$_POST['patient_name'];
		$patient_age=$_POST['patient_age'];
		$patient_id=$_POST['patient_id'];
		$patient_roomno=$_POST['patient_roomno'];
		$patient_address=$_POST['patient_address'];
		$patient_gender=$_POST['patient_gender'];
		$patient_phoneno=$_POST['patient_phoneno'];
		$department_alloted=$_POST['department_alloted'];
		$doctor_alloted=$_POST['doctor_alloted'];
		$email=$_POST['patient_email'];
		$password=md5($_POST['patient_password']);
		
		$search_field = $_POST['search'];
		if ($search_field == '--All--') {
			$sql="select * from doctor";
		}
		
		$path = "../../uploads/";
		$patientphoto = '';
		if(!empty($_FILES["patient_photo"]["tmp_name"])){ 
			$imageFileType = strtolower(pathinfo($_FILES["patient_photo"]["name"],PATHINFO_EXTENSION));
			$patientphoto = date("Y-m-d")."-".rand(0,10000).".".$imageFileType;
			$target_file_pho = $path.$patientphoto;
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$status=2;
			}
			else
			{
				move_uploaded_file($_FILES['patient_photo']["tmp_name"], $target_file_pho);
			}}
			$sql="INSERT INTO `patient`(`patient_name`, `patient_age`, `patient_id`, `patient_roomno`, `patient_gender`, `patient_address`, `department_alloted`, `doctor_alloted`, `patient_phoneno`,`patient_photo`, `patient_email`, `patient_password`) VALUES ('$patient_name','$patient_age','$patient_id','$patient_roomno','$patient_gender','$patient_address','$department_alloted','$doctor_alloted','$patient_phoneno','$patientphoto','$email','$password')";
			//echo $sql;exit;
			$result=mysqli_query($conn,$sql);
	}
	if (result==1){
		echo "sucessfully added!";
		$status=1;
		header("location:../manage_patient.php? status=".$status);
		}else{
		echo "try again!";
		$status=2;
		header("location:../add_patient.php? status=".$status);
	}
?>