<?php
    include('../includes/admin_session.php');
    include('../includes/connect.php');
?>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manage Patient</title>
        
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
            
            .btn {
            padding: 3px;
            
            }
            
            td,
            th {
            font-size: 14px;
            }
        </style>
        
    </head>
    
    <body>
        <?php include('header.php');?>
        <div class="container-fluid">  
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10"><hr>
                    <h4 class="header-line"><strong>Manage Registered Patients</strong></h4><hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Age </th>
                                    <th>Gender </th>
                                    <th>Room No.</th>
                                    <th>Department</th>
                                    <th>Doctor</th>
                                    <th>Contact No.</th>
                                    <th>Email ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $sql = "SELECT * from Patient";
                                    $result=mysqli_query($conn,$sql);
                                    $cnt=1;
                                    while($data=mysqli_fetch_array($result)){                                    
                                    ?>
                                    <tr class="odd gradeX">
                                        <td class="center"><?php echo $data['patient_id'];?></td>
                                        <td class="center"><?php echo strtoupper($data['patient_name']);?></td>
                                        <td class="center"><?php echo $data['patient_age'];?></td>
                                        <td class="center"><?php echo $data['patient_gender'];?></td>
                                        <td class="center"><?php echo $data['patient_roomno'];?></td>
                                        <td class="center"><?php echo $data['department_alloted'];?></td>
                                        <td class="center">Dr. <?php echo strtoupper($data['doctor_alloted']);?></td>
                                        <td class="center"><?php echo $data['patient_phoneno'];?></td>
                                        <td class="center"><?php echo $data['patient_email'];?></td>
                                        <td><a class="btn btn-primary"
                                            href="update_patient.php?id=<?php echo $data['id'];?>">Update</a>&nbsp;
                                            <a class="btn btn-danger"
                                        href="source/delete_patient.php?id=<?php echo $data['id'];?>">Delete</a></td>
                                    <?php } ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-1"></div>
            </div>
        </div>
    </div>
</body>
</html>                                