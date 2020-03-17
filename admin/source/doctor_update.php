<?php
	include('../../includes/admin_session.php');
	include('../../includes/connect.php');
	$id=$_GET['id'];
	if(isset($_POST['submit'])){
		$doctor_name=$_POST['doctor_name'];
		$doctor_id=$_POST['doctor_id'];
		$doctor_address=$_POST['doctor_address'];
		$doctor_gender=$_POST['doctor_gender'];
		$doctor_phoneno=$_POST['doctor_phoneno'];
		$doctor_department=$_POST['doctor_department'];
		$doctor_email=$_POST['doctor_email'];
		$path = "../../uploads/";
		$doctor_photo = '';
		
		if(!empty($_FILES["doctor_photo"]["tmp_name"]) ){ 
			$imageFileType = strtolower(pathinfo($_FILES["doctor_photo"]["name"],PATHINFO_EXTENSION));
			$doctorphoto = date("Y-m-d")."-".rand(0,10000).".".$imageFileType;
			$target_file_pho = $path.$doctor_photo;
			
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
				//echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				$status=2;
			}
			else
			{
				move_uploaded_file($_FILES['doctor_photo']["tmp_name"], $target_file_pho);
			}}else{
			
			$doctor_photo=$_POST['perviousphoto'];
		}
		$sql="UPDATE `doctor` SET `doctor_name`='$doctor_name',`doctor_id`='$doctor_id',`doctor_address`='$doctor_address',`doctor_gender`='$doctor_gender',`doctor_phoneno`='$doctor_phoneno',`doctor_department`='$doctor_department',`doctor_photo`='$doctor_photo',`doctor_email`='$doctor_email' WHERE `id`='$id'";
		//echo $sql;exit;
		$result=mysqli_query($conn,$sql);
	}
	if(($result) == 1){
		$status=1;
		header("location:../manage_doctor.php?status=".$status);
	?>
	<div class="alert alert-success" role="alert">Sucessfully Updated!</div>
	<?php
	}
    else {
        $status=2;
	header("location:../manage_doctor.php?status=".$status); ?>
	<div class="alert alert-danger" role="alert">update fail!</div>
	<?php
	}
?>