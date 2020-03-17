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
        <title>Add Patient</title>
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
        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js"></script>
        
        <style>
            hr {
            border: 0;
            height: 1px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0));
            }
            
            .card {
            border-radius: 0px;
            padding-bottom: 5px;
            }
            
            .form-control,
            .btn {
            border-radius: 0px;
            border-left: 0px;
            border-right: 0px;
            border-top: 0px;
            }
            
            .form-control:focus {
            border-color: inherit;
            box-shadow: none;
            }
        </style>
    </head>
    <body>
        <?php include('header.php');?>
        <hr>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <h5>Enter Patient Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form action="source/patient.php" method="post" enctype="multipart/form-data">
                                    <input class="form-control" type="text" placeholder="Enter Name" name="patient_name" required><br>
                                    <input class="form-control" type="number" placeholder="Enter Age" name="patient_age" required><br>
                                    <input class="form-control" type="number" placeholder="Patient ID" name="patient_id" required><br>
                                    <input class="form-control" type="number" placeholder="Room Number" name="patient_roomno" required><br>
                                    <div class="form-group">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="patient_gender" value="male">Male
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="patient_gender" value="female">Female
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="patient_gender"
                                            value="other">Other
                                        </div>
                                    </div>
                                    <input class="form-control" type="text" placeholder="Enter Address" name="patient_address" required><br>
                                    <select name="doctor_alloted" class="form-control">
                                        <option>Doctor Alloted</option>
                                        <?php 
                                            $sql="select * from doctor";
                                            $result=mysqli_query($conn,$sql);
                                            while($data=mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['doctor_name'];?>">
                                            <?php echo $data['doctor_name']; ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <select name="department_alloted" class="form-control">
                                        <option>Department Alloted</option>
                                        <?php 
                                            $sql="select * from department ";
                                            $result=mysqli_query($conn,$sql);
                                            while($data=mysqli_fetch_array($result)){
                                            ?>
                                            <option value="<?php echo $data['department_name'];?>">
                                            <?php echo $data['department_name']; ?></option>
                                            <?php
                                            }
                                        ?>
                                    </select>
                                    <br>
                                    <input class="form-control" type="number" name="patient_phoneno" placeholder="Mobile No" required><br>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroupFileAddon01">Upload Photo</span>
                                        </div>
                                        <div class="custom-file">
                                            <input class="custom-file-input" type="file" name="patient_photo" placeholder="upload Photo">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                    <input class="form-control" type="email" name="patient_email" placeholder="E-mail" required><br>
                                    <input class="form-control" type="password" name="patient_password" placeholder="Enter Password" required><br>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3"> </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>