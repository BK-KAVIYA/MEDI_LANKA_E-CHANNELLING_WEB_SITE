<?php
include('db.php');

session_start();
//$uid=$_SESSION['sid'];


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>| MEDI LANKA |</title>
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/doctorPageStyle.css">

        <!-- JS-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <br><br><br><br>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "echannelling1";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $spec = $_POST['specialty'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $addressLine1 = $_POST['addressLine1'];
        $addressLine2 = $_POST['addressLine2'];
        $city = $_POST['city'];
        $NIC = $_POST['NIC'];
        $telNo = $_POST['telNo'];
        $baseHospital = $_POST['baseHospital'];
        $telHome = $_POST['telHome'];
        $channelRoomNo = $_POST['channelRoomNo'];
        $priceForChannel = $_POST['priceForChannel'];
        $categoryNum = 2;
        if($spec=="PHYSIOTHERAPY"){
                 $specialty=1;
        }else if($spec="EYE SURGEON"){
                 $specialty=2;
        }else if($spec="PEDIATRICIAN PHYSICIAN"){
                 $specialty=3;
        }else if($spec="CLINICAL GENETICIST & GENETIC COUNSELOR"){
                 $specialty=4;
        }else if($spec="PEDIATRIC CARDIOLOGIST"){
                 $specialty=5;
        }else if($spec="NEONATOLOGIST"){
                 $specialty=6;
        }else if($spec="RESTORATIVE DENTISTRY"){
                 $specialty=7;
        }else if($spec="DERMATOLOGIST"){
                 $specialty=8;
        }else if($spec="MICROBIOLOGIST"){
                 $specialty=9;
        }else{
                $specialty=10;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $sql = "INSERT INTO doctor (docName,address,speciality,NIC,telNo,hospital,email,telHome,channelRoomNo,priceForChannel) VALUES (' $firstName . $lastName ',' $addressLine1 . $addressLine2 . $city ','{$specialty}',' {$NIC} ','{$telNo}','{$baseHospital }',' $email ','{$telHome}','{$channelRoomNo}','{$priceForChannel}')";
            if (mysqli_query($conn, $sql)) {
                $sql2 = "INSERT INTO userlogin (userName,password,userCategory	) VALUES('" . $userName . " ','" . $password . "','$categoryNum')";
                 ?>
                    <img class="d-flex justify-content-center mb-3" style="border:none;width: 20%;margin-left: auto;margin-right: auto;" src="img/feedback/success.png">
                    <div class="alert alert-success" role="alert">
                        <strong>Successfully Inserted</strong>&nbsp;<a href="dashhome.php">Back to Home</a>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        <strong>Insert Again</strong>&nbsp;<a href="addAdoctor.php">Click hear</a>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Insertion Failed</strong>&nbsp;<a href="addAdoctor.php">Try Again</a>
                    </div>
                    <?php
            }

        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>

