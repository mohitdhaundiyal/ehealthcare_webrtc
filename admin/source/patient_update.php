<?php
    include('../../includes/admin_session.php');
    include('../../includes/connect.php');
    
    $id=$_GET['id'];
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
        $patient_email=$_POST['patient_email'];
        
        $path = "../../uploads/";
        $patient_photo = '';
        
        if(!empty($_FILES["patient_photo"]["tmp_name"]) && $doc_type != 'link' ){ 
			$imageFileType = strtolower(pathinfo($_FILES["patient_photo"]["name"],PATHINFO_EXTENSION));
			$patient_photo = date("Y-m-d")."-".rand(0,10000).".".$imageFileType;
			$target_file_pho = $path.$patient_photo;
            
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
                //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $status=2;
            }
            else
            {
                move_uploaded_file($_FILES['patient_photo']["tmp_name"], $target_file_pho);
            }}else{
            $patient_photo=$_POST['previousphoto'];
        }
        
        
        $sql="UPDATE `patient` SET `patient_name`='$patient_name',`patient_age`='$patient_age',`patient_id`='$patient_id',`patient_roomno`='$patient_roomno',`patient_gender`='$patient_gender',`patient_address`='$patient_address',`department_alloted`='$department_alloted',`doctor_alloted`='$doctor_alloted',`patient_phoneno`='$patient_phoneno',`patient_photo`='$patient_photo',`patient_email`='$patient_email' WHERE `id`='$id'";
        //echo $sql;exit;
        $result=mysqli_query($conn,$sql);
    }
    if(($result) == 1){
        $status=1;
        header("location:../manage_patient.php?status=".$status);
    ?>
    <div class="alert alert-success" role="alert">Sucessfully Updated!</div>
    
    <?php
    }
    else {
        $status=2;
    header("location:../manage_patient.php?status=".$status); ?>
    
    <div class="alert alert-danger" role="alert">update fail!</div>
    
    <?php
    }
?>