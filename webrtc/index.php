<?php include('../includes/connect.php');
    include('../includes/doctor_session.php');
    $patient_id=$_GET['patient_id'];
    $sql="SELECT * FROM patient WHERE id=$patient_id";
    //echo $sql;exit;
    $result=mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    
    $doctor_id=$_GET['doctor_id'];
    $sql2="SELECT * FROM doctor WHERE id=$doctor_id";
    //echo $sql2;exit;
    $result2=mysqli_query($conn,$sql2);
    $doctor=mysqli_fetch_assoc($result2);
?>

<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Realtime communication with WebRTC</title>
        <link rel="stylesheet" href="css/main.css" />
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
    </head>
    
    <body>
        <div class="container">
            <h1>Welcome Dr. <?php echo strtoupper($doctor['doctor_name']);?></h1>
            <h3>you're being connected to your patient <?php echo strtoupper($data['patient_name']);?></h3><hr>
            <div class="row">
                <div class="col-lg-6">
                    <video class="video" width="720" height="360" id="localVideo" autoplay playsinline></video>
                </div>
                <div class="col-lg-6">
                    <video class="video" width="720" height="360" id="remoteVideo" autoplay playsinline></video>
                </div>
            </div>
            
            <div>
                <button class="btn btn-primary btn-lg" id="startButton">Start</button>
                <button class="btn btn-success btn-lg" id="callButton">Call</button>
            <button class="btn btn-danger btn-lg" id="hangupButton">Hang Up</button>
            </div>
            
            <script src="https://webrtc.github.io/adapter/adapter-latest.js"></script>
            <script src="js/main.js"></script>
            </div>
            </body>
            
            </html>            