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



?>
<?php

include ( "NexmoMessage.php" );

$nexmo_sms = new NexmoMessage('19edf2b9', 'GxyEBUQ1eKTxfJsb');

$info = $nexmo_sms->sendText("94$phone", 'MyApp', "Hi!. You have paid Rs $amount to channel Dr.$doctorName on $date.RefNo: $refid");

echo $nexmo_sms->displayOverview($info);


?>
<?php

$queryInsertPayedPatients="
INSERT INTO payedpatients( refNo, patientName, phone, nic, email, amount,dateBooked,doctorName) 
VALUES('".$refid."','".$name."','".$phone."','".$nic."','".$email."','".$amount."','".$date."','".$doctorName."')
";

if(mysqli_query($conn, $queryInsertPayedPatients)){
    echo "Paymet  Complete";
}
else{
    echo "err";
}

?>


<?php



$queryNew = "UPDATE time_shedule SET enable='0',bookedDate='".$dayBooked."' WHERE TNo='".$timeslotID."' ";
if(mysqli_query($conn, $queryNew) AND ($approved==true)){
    //echo "Paymet  Complete";
}
else{
   // echo "Something Went Wrong.Paymet NOT Complete";
}





//$query = "SELECT * FROM time_shedule WHERE TNo ='1' AND enable = '1' ";
//$result = mysqli_query($conn, $query);
//$rows = mysqli_num_rows($result);
//
//if($rows>0){
//    echo "Paymet NOT Complete";
//
//}
//else{
//    echo "Paymet  Complete";
//}


?>
<?php
    require __DIR__.'/PayPal-PHP-SDK/autoload.php';
    //API
    $api = new \PayPal\Rest\ApiContext(
            new \PayPal\Auth\OAuthTokenCredential(
                    'AW4AozIHJhHXJlGmKxiKOk8Y729xq6BfADawda6SgYSpgiAW6l7j9XXLrbvoXbNs7tEXbNYN6jScfnTM',
                    'EB9xgx6ROAMQZPr_SHk_sm5PS_smD5XjvxAJlWNzo8ayG1cYpIXv28lQ1LiC0PWqQxA8KQpII7jNkqHC'
            )
    );

    $api->setConfig([
            'mode' => 'sandbox',
            'http.ConnectionTimeOut' => 30,
            'log.LogEnabled' => false ,
            'log.FileName' =>'',
            'log.LogLevel' =>'FINE',
            'validation.level' =>'log'
    ])
?>

<!DOCTYPE html>
<html>
  <head>

    <!-- css link -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>E Channel</title>
  </head>
  <body>

    <?php include 'navigationbar.php'; ?>
<div class="w3-container w3-padding" id="div_color" >
    <br><br><br><br>
    <div class="w3-container w3-padding" >
        <p align="center" style="font-size:60px;color: darkblue"><strong>Thank You for your Payment</p><p align="center" style="font-size:22px;font-family: Tahoma">
            your transaction has been completed, and a receipt for your doctor reservation has been emailed to you. You may log into your account at
            <a href="https://developer.paypal.com/" >www.paypal.com/</a> to view details of this transaction.
            </strong></p>
        <hr>
    </div>
    <br>
    <div class="row">

        <div class="container w3-center" style="padding-bottom:85px">
            <a href="index.php"><button class="w3-btn w3-khaki w3-hover-blue w3-xxlarge">Back to Home</button></a>
        </div>

    </div>


</div>





<hr>

<br>

</body>
</html>