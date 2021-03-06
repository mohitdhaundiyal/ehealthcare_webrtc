<?php
    session_start();
    include('includes/connect.php');
    if(isset($_SESSION['id']) || !empty($_SESSION['id'])){
        header("location:admin/dashboard.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Admin Login</title>
        
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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .input-container {
            display: flex;
            width: 100%;
            }
            
            .icon {
            border: 1px solid black;
            padding: 10px;
            min-width: 50px;
            text-align: center;
            }
            
            .card {
            border-radius: 0px;
            padding-bottom: 5px;
            }
            
            .form-control,
            .btn {
            border-radius: 0px;
            }
            
            .form-control:focus {
            border-color: inherit;
            box-shadow: none;
            border: 1px solid black;
            }
            
            .center {
            max-width="1000px";
            margin: auto;
            left: 1%;
            right: 1%;
            position: absolute;
            }
        </style>
    </head>
    
    <body>
        <div class="container">
            <center>
                <h2>Admin Login</h2>
            </center>
            <hr>
            <div class="center">
                <div class="row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h5>Admin Login</h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <form action="source/login_admin.php" method="post">
                                        <div class="input-container">
                                            <i class="fa fa-envelope icon"></i>
                                        <input type="text" class="form-control" name="admin_name" placeholder="Enter Username" required></div>
                                        <br>
                                        <div class="input-container">
                                            <i class="fa fa-key icon"></i>
                                        <input type="password" class="form-control" name="admin_password" placeholder="Enter Password" required></div>
                                        <br>
                                        <button type="submit" class="btn btn-success btn-lg btn-block"
                                        name="submit">Login</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>
        </div>
    </body>
    
</html>        