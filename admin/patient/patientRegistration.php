<?php
include('../db.php');

session_start();
//$uid=$_SESSION['sid'];


?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>| MEDI LANKA |</title>
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/doctorPageStyle.css">

        <!-- JS-->
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body>
        <br><br><br><br>
        <?php
        /*$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "echannelling1";

// Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }*/
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];
        $addressLine1 = $_POST['addressLine1'];
        $addressLine2 = $_POST['addressLine2'];
        $city = $_POST['city'];
        $telNo = $_POST['telNo'];
        $categoryNum = 4;
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pwd=password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO patient(Uname,Email,Address,Telephone,Password) VALUES (' $firstName . $lastName ',' $email ',' $addressLine1  $addressLine2  $city ','{$telNo}','$pwd')";
            if (mysqli_query($conn, $sql)) {
                $sql2 = "INSERT INTO userlogin (userName,password,userCategory	) VALUES('" . $userName . " ','" . $pwd . "','$categoryNum')";
                 ?>
                    <img class="d-flex justify-content-center mb-3" style="border:none;width: 20%;margin-left: auto;margin-right: auto;" src="../img/feedback/success.png">
                    <div class="alert alert-success" role="alert">
                        <strong>Successfully Inserted</strong>&nbsp;<a href="../dashhome.php">Back to Home</a>
                    </div>
                    <div class="alert alert-primary" role="alert">
                        <strong>Insert Again</strong>&nbsp;<a href="../patient/addPatient.php">Click hear</a>
                    </div>
                    <?php
                } else {
                        echo mysqli_error($conn);
                    ?>
                    <div class="alert alert-danger" role="alert">
                        <strong>Insertion Failed</strong>&nbsp;<a href="../patient/addPatient.php">Try Again</a>
                    </div>
                    <?php
            }

        }
        mysqli_close($conn);
        ?>
        
    </body>
</html>

