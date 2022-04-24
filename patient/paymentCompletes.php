<?php
include("db.php");
session_start();
$approved=$_REQUEST['approved'];
$timeslotID =$_REQUEST['timeslot'];
$dayBooked = $_REQUEST['dayBooked'];

$name=$_REQUEST['Name'];
$refid =$_REQUEST['refNo'];
$phone = $_REQUEST['phone'];
$nic=$_REQUEST['nic'];
$email =$_REQUEST['email'];
$amount = $_REQUEST['amount'];

$doctorName =$_REQUEST['DocName'];
$date =$_REQUEST['Date'];
$roomNo =$_REQUEST['RoomNo'];
echo $name;


?>

<?php
        $queryInsertPayedPatients="INSERT INTO payedpatients( refNo, patientName, phone, nic, email, amount,dateBooked,doctorName) 
    VALUES('".$refid."','".$name."','".$phone."','".$nic."','".$email."','".$amount."','".$date."','".$doctorName."');";

    if(mysqli_query($conn, $queryInsertPayedPatients)){
        //header("location:home.php");
        //echo "Paymet  Complete";
    }
    else{
        echo "err";
    }



    $queryNew = "UPDATE time_shedule SET enable='0',bookedDate='".$dayBooked."' WHERE TNo='".$timeslotID."' ";
    if(mysqli_query($conn, $queryNew) AND ($approved==true)){
        //echo "Paymet  Complete";
    }
    else{
       // echo "Something Went Wrong.Paymet NOT Complete";
    }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <!-- css link -->

	   <link rel="stylesheet" href="css/bootstrap.min.css">
	   <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<title>MEDI LANKA</title>
</head>
<body>
    <br><br>
    <div class="container-fluid">
    <p align="center" style="font-size:60px;color: darkblue">
    	<strong>Thank Your for Your Payment</strong>
    </p>
    <p align="center" style="font-size:22px;font-family: Tahoma">
    	<strong>your transaction has been completed, and a receipt for your doctor reservation has been emailed to you. You may log into your account at <a href="https://developer.paypal.com/">www.paypal.com/<a> to view details of this transaction.</strong>
    </p>
    <hr><br>
    <div class="center">
    	<a href="home.php"><button type="button" class="btn btn-primary btn-lg btn-block">Back to home</button></a>
    </div>
   <hr>
</body>
</html>