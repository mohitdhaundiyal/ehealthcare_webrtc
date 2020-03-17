<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Doctor-Patient Management System</title>
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
        <script src="https://kit.fontawesome.com/b6df14a6b1.js" crossorigin="anonymous"></script>
        
        <style>
            .card,
            .card-header {
            border-radius: 0px;
            }
            .card-header {
            border-color: black;
            }
            .btn {
            border-radius: 0px;
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            }
            hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }
            .footer {
            background: #000;
            padding: 10px 0px;
            color: #fff;
            position: fixed;
            left: 0;
            right: 0;
            bottom: -18px;
            }
        </style>
    </head>
    <body background="images/wall.jpg">
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:white;">&emsp;&emsp;&emsp;
            <img class="navbar-brand" src="images/image.png" height="50" width="50">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><strong style="font-size:20px;">E-HEALTHCARE</strong><span
                        class="sr-only">(current)</span></a>
                    </li>
                </ul>
            </div>
        </nav>
        
        <div class="container" style="max-width: 1200px;">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><br>
                        Welcome to E-HEALTHCARE
                    </h1>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <hr>
                    <div class="card text-center border-dark">
                        <div class="card-header mb-3">
                            <strong>Patient</strong>
                        </div>
                        <div class="card-body">
                            <i class="fas fa-user-injured fa-5x"></i>
                            <h5 class="card-title"><b>Patient Login</b></h5>
                            <a href="patient_login.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <hr>
                    <div class="card text-center border-dark">
                        <div class="card-header mb-3">
                            <strong>Doctor</strong>
                        </div>
                        <div class="card-body">
                            <i class="fa fa-user-md fa-5x"></i>
                            <h5 class="card-title"><b>Doctor Login</b></h5>
                            <a href="doctor_login.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <hr>
                    <div class="card text-center border-dark">
                        <div class="card-header mb-3">
                            <strong>Admin</strong>
                        </div>
                        <div class="card-body">
                            <i class="fa fa-users-cog fa-5x"></i>
                            <h5 class="card-title"><b>Admin Login</b></h5>
                            <a href="admin_login.php" class="btn btn-primary">Click Here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer text-center">&copy; <?php echo date('Y');?> E-HEALTHCARE using web-RTC |
                        Designed by :
                        <strong>MOHIT
                        DHAUNDIYAL</strong>
                    </p>
                </div>
            </div>
        </footer>
    </body>
</html>                    