<?php
    include('../includes/admin_session.php');
    include('../includes/connect.php');
    
    $id=$_GET['id'];
    $sql="SELECT * FROM `doctor` WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Update Patient</title>
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
                            <h5>Enter Doctor Details</h5>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <form class="form-box" action="source/doctor_update.php?id=<?php echo $id;?>" method="post"
                                enctype="multipart/form-data">
                                    <input class="form-control" type="text" value="<?php echo $row['doctor_name'];?>"
                                    name="doctor_name"><br>
                                    <input class="form-control" type="text" value="<?php echo $row['doctor_id'];?>"
                                    name="doctor_id"><br>
                                    <input class="form-control" type="text" value="<?php echo $row['doctor_address'];?>"
                                    name="doctor_address"><br>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="doctor_gender"
                                                value="male"
                                                <?php if($row['doctor_gender'] == "male"){ echo "checked";}?>>
                                            Male</div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="doctor_gender"
                                                value="female"
                                                <?php if($row['doctor_gender'] == "female"){ echo "checked";}?>>
                                                Female
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="doctor_gender"
                                                value="other"
                                                <?php if($row['doctor_gender'] == "other"){ echo "checked";}?>>
                                                Other
                                            </div>
                                        </div>
                                        <input class="form-control" type="number" name="doctor_phoneno"
                                        value="<?php echo $row['doctor_phoneno'];?>"><br>
                                        
                                        <input class="form-control" type="text" name="doctor_department"
                                        value="<?php echo $row['doctor_department'];?>"><br>
                                        
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="inputGroupFileAddon01">Upload
                                                Photo</span>
                                            </div>
                                            <div class="custom-file">
                                                <input class="custom-file-input" type="file" name="photo"
                                                value="<?php echo $row['doctor_photo'];?>" name="photoupload">
                                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                            </div>
                                        </div>
                                        
                                        <input type="hidden" value="<?php echo $row['doctor_photo'];?>"
                                        name="perviousphoto">
                                        
                                        <input class="form-control" type="text" name="doctor_email"
                                        value="<?php echo $row['doctor_email'];?>"><br>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3"> </div>
                </div>
                </div>
                </body>
                
                </html>                