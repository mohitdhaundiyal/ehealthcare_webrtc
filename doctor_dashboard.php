<?php
include('includes/doctor_session.php');
include('includes/connect.php');
$id=$_SESSION['id'];

$sql1="SELECT * FROM doctor WHERE id='$id'";
$result=mysqli_query($conn,$sql1);
$row=mysqli_fetch_array($result);
$doctor_name=$row['doctor_name'];
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Doctor</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <style>
    .btn {
        padding: 3px;
    }

    td,
    th {
        font-size: 15px;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd;">&nbsp;&nbsp;&nbsp;
        <img class="navbar-brand" src="images/image.png" height="50" width="50" alt="">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#"><strong style="font-size:18px;">E-HEALTHCARE</strong><span
                            class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
        <form class="form-inline my-2 my-lg-0" action="source/patient_logout.php" method="post">
            <button class="btn btn-danger" type="submit">LOGOUT</button>&nbsp;&nbsp;
        </form>
    </nav>
    <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                 <hr><h4><strong>Doctor Login</strong></h4>
                    <h6 class="header-line">
                        <center><hr><strong>Your Patients List</strong></center></h6>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Patient ID</th>
                                            <th>Patient Name</th>
                                            <th>conatact No</th>
                                            <th>Department</th>
                                            <th>Email</th>
                                            <th>Video Call</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $sql = "SELECT * from patient where `doctor_alloted`='$doctor_name'";
                                    $result=mysqli_query($conn,$sql);
                                    //echo $sql;
                                    //exit;
                                    while($data=mysqli_fetch_array($result)){                                    
									?>
                                        <tr class="odd gradeX">
                                            <td class="center"><?php echo $data['patient_id'];?></td>
                                            <td class="center"><?php echo strtoupper($data['patient_name']);?></td>
                                            <td class="center"><?php echo $data['patient_phoneno'];?></td>
                                            <td class="center"><?php echo strtoupper($data['department_alloted']);?></td>
                                            <td class="center"><?php echo $data['patient_email'];?></td>
                                            <td><center><a class="btn btn-primary" style="padding-right:20px; padding-left:20px;" href="webrtc/index.php?patient_id=<?php echo $data['id'];?> & doctor_id=<?php echo $id?>">Connect</a></center></td>
                                            <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>