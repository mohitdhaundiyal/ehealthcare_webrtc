<?php
    include('../../includes/admin_session.php');
    include('../../includes/connect.php');
    if (isset($_POST['submit'])){
        $admin_name=$_POST['admin_name'];
        $admin_email=$_POST['admin_email'];
        $admin_password=md5($_POST['admin_password']);
        
        $sql="INSERT INTO `admin`(`admin_name`, `admin_email`, `admin_password`) VALUES ('$admin_name','$admin_email','$admin_password')";
        //echo $sql; exit;
        $result=mysqli_query($conn,$sql);
    }
?>