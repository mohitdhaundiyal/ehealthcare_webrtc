<?php
include('../includes/admin_session.php');
include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Doctor-Patient Management|Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|PT+Sans|Russo+One&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
 hr{
    height: 12px;
    border: 0;
    box-shadow: inset 0 12px 12px -12px rgba(0, 0, 0, 0.5);
}
    </style>

</head>
<body background="image/wall.jpg">
    <?php include('header.php');?>&emsp;&emsp;&emsp;&emsp;
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <hr>
                    <h4 class="header-line"><b>ADMIN DASHBOARD</b></h4>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="alert alert-success back-widget-set text-center">
                        <i class="fa fa-user-md fa-5x"></i>
                        <?php
                            $sql ="SELECT id from doctor";
                            $result=mysqli_query($conn,$sql);
                            $data=mysqli_fetch_array($result);
                            $totaldoctor=mysqli_num_rows($result);
                            ?>
                        <h3><?php echo $totaldoctor;?></h3>
                        <b>Total Doctors</b>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-info back-widget-set text-center">
                        <i class="fa fa-wheelchair fa-5x"></i>
                        <?php
                            $sql ="SELECT id from patient";
                            $result=mysqli_query($conn,$sql);
                            $data=mysqli_fetch_array($result);
                            $totalpatient=mysqli_num_rows($result);
                            ?>
                        <h3><?php echo $totalpatient;?></h3>
                        <b>Total Patients</b>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="alert alert-info back-widget-set text-center">
                        <i class="fa fa-plus-square fa-5x"></i>
                        <?php
                            $sql ="SELECT id from department";
                            $result=mysqli_query($conn,$sql);
                            $data=mysqli_fetch_array($result);
                            $totaldepartment=mysqli_num_rows($result);?>
                        <h3><?php echo $totaldepartment;?></h3>
                        <b>Total Department</b>
                    </div>
                </div>
            </div>
</body>
</html>