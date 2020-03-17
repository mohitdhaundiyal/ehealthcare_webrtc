<?php
    include('includes/patient_session.php');
    include('includes/connect.php');
    $id=$_SESSION['id'];
    $sql="SELECT * FROM `patient` WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Patient Dashboard</title>
        
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
            .btn-primary {
            padding: 2px;
            }
            
            .navbar {
            padding: 1px;
            }
            
            .card {
            card-shadow: 0.2em 0.2em 0.7em black;
            }
            
            li {
            font-size: 14px;
            }
            
            .card-img-top {
            width: 50%;
            height: 10vw;
            object-fit: cover;
            }
            
            .jumbotron {
            padding-top: 12px;
            padding-bottom: 12px;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="background-color: #e3f2fd;">&nbsp;&nbsp;&nbsp;
            <img class="navbar-brand" src="images/image.png" height="70" width="70" alt="">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><strong style="font-size:26px;">E-HEALTHCARE</strong><span
                        class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0" action="source/patient_logout.php" method="post">
                <button class="btn btn-danger" type="submit">LOGOUT</button>&nbsp;&nbsp;
            </form>
        </nav>
        <div class="container">
            <hr>
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <h5><strong>
                        <center>PATIENT DETAILS</center>
                    </strong></h5>
                    <hr>
                    <div class="jumbotron">
                        <center><img class="card-img-top" src="uploads/<?php echo $row['patient_photo']?>"
                        alt="Card image cap"></center>
                        <h3 class="display-6">
                            <center><strong><?php echo strtoupper($row['patient_name'])?></strong></center>
                        </h3>
                        <h5>
                            <p class="lead">
                                <center><b>ID: </b><?php echo $row['patient_id']?></center>
                            </p>
                        </h5>
                        <hr class="my-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <p><b>Age: </b><?php echo $row['patient_age']?> </p>
                            </div>
                            <div class="col-lg-6">
                                <p><b align="left">Gender: </b><?php echo $row['patient_gender']?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <p><b>Contact Number: </b><?php echo $row['patient_phoneno']?></p>
                            </div>
                            <div class="col-lg-6">
                                <p><b>Room No: </b><?php echo $row['patient_age']?></p>
                            </div>
                        </div>
                        <p><b>Address: </b><?php echo $row['patient_address']?></p>
                        <p><b>Department: </b><?php echo $row['department_alloted']?></p>
                        <p><b>Doctor: </b>Dr. <?php echo $row['doctor_alloted']?></p>
                        <p><b>Email: </b><?php echo $row['patient_email']?> &nbsp;</p>
                        
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </body>
    
</html>        