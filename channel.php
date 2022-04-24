<?php
include("db.php");
session_start();
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- css link -->

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">

 <!-- js -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

 <title>E Channel</title>
</head>
<body>

 <?php include 'navigationbar.php'; ?>

   <!-- patient detail -->
     <br><br><br>
    <div class="container sm-3 border-left border-info border-right ">
    <div>
      
      <h2 class="ml-4 bg bg-info p-3 text-light text-center">Your Booking Informatin</h2>
    </div>
   
    <?php

        $uid=$_SESSION['uid'];

        $sql="SELECT * FROM payedpatients WHERE Uid='1'";
        $result = mysqli_query($conn,$sql);
        $rows = mysqli_num_rows($result);
        if($rows>0){
        while ($row = mysqli_fetch_array($result)){
        $name =$row['patientName'];
        $refid = $row['refNo'];
        $appoinmentDate =$row['dateBooked'];
        $doctorCharges =$row['amount'];
        $docname =$row['doctorName']; ?>

       <div class="container"  style="font-size: 20px">
    <table class="container ">
      
      <br><br>
        <tr class="w3-container ">
            <td class="w3-container w3-padding">Reference No  </td>
            <td class="w3-container">: 000<?php echo $refid;?></td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Patient's Name  </td>
            <td class="w3-container">: Mr/Mrs/Miss.<?php echo $name;?></td>
        </tr>
        <tr class="w3-container">
            <td class="w3-container w3-padding">Doctor's Hospital  </td>
            <td class="w3-container">: <?php echo $docname;?></td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Appoinment Time  </td>
            <td class="w3-container">: <?php echo $appoinmentDate;?> </td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Doctor Charges  </td>
            <td class="w3-container">: <?php echo $doctorCharges;?>.00 LKR</td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Doctor Charges VAT  </td>
            <td class="w3-container">: <?php

                                    $doctorChargesVat = (($doctorCharges*115)/100);
                                    echo number_format((float)$doctorChargesVat, 2, '.', '')." LKR (VAT 15%)";

                                    ?>
                                    </td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Hospital Charges  </td>
            <td class="w3-container">: 800.00 LKR</td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Booking Charges  </td>
            <td class="w3-container">: 99.00 LKR</td>
        </tr>

        <tr class="w3-container w3-padding">
            <td class="w3-container"><strong>Total Charges(Including Tax) </strong> </td>
            <td class="w3-container">:<strong> <?php echo number_format((float)$doctorChargesVat+(800.00+99.00), 2, '.', '');
                    $finalCost = number_format((float)$doctorChargesVat+(500.00+99.00), 2, '.', '');
                    $inDollors = number_format((float)0.0063* $finalCost, 2, '.', '');
                    ?> LKR</strong></td>
        </tr>
    </table>
    <hr>

</div> <?php

    }
}
?>
    <a href="home.php"><button type="submit" class="btn btn-info btn-lg text-light btn-block" >BACK</button></a>
</div>
<br>
<br>
<br>      
        
    <?php include 'footer.php'; ?>
   <style media="screen">
     .hr{
       height: 5px;
       background-color: white;
     }
   </style>
</div>
   </body>
 </html>
 <?php mysqli_close($conn);?>
