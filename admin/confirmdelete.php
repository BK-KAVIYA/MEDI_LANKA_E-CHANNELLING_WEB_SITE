<?php
include('db.php');
session_start();
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
<?php

        /*$address = $_POST['address'];
        $telNo = $_POST['telNo'];
        $baseHospital = $_POST['baseHospital'];
        $telHome = $_POST['telHome'];
        $email = $_POST['email'];
        $channelRoomNo = $_POST['channelRoomNo'];
        $priceForChannel = $_POST['priceForChannel'];*/
        $submit_id = $_REQUEST['id'];
        if(isset($_POST['delete'])){
            $sql="DELETE FROM doctor WHERE id=".$submit_id.";";
            if ($conn->query($sql) === TRUE) {
            ?>
            <br><br>
             <img class="d-flex justify-content-center mb-3" style="border:none;width: 20%;margin-left: auto;margin-right: auto;" src="img/feedback/info.png">
            <div class="alert alert-success" role="alert">
                <strong>Delete Successfully</strong>&nbsp;<a href="dashhome.php">Back to Home</a>
            </div>
        <?php
            } else {
            echo "Error updating record: " . $conn->error;
             }
        }
        ?>

</body>
</html>
