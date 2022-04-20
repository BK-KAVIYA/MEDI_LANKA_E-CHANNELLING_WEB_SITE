<?php
include("db.php");
session_start();
?>
<?php

  $timeSlotNum = $_REQUEST['timeslot'];
  $id=$_REQUEST['ID'];
  $dayBooked = $_REQUEST['dayBooked'];
  $appoinmentDate = $_REQUEST['Date'];

  if (isset($_POST['detailsSubmit'])) {

    $name = $_POST['name'];
    $nic = $_POST['nic'];
    $phone = $_POST['pn'];
    $email = $_POST['email'];
  }

$query = "SELECT * FROM payedpatients ORDER BY refNo DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$rows = mysqli_num_rows($result);

if($rows>0){
    while($row=mysqli_fetch_array($result)){

        $refid=  $row['refNo'];

        $refid++;
    }
}

$query2 = "SELECT * FROM doctor WHERE id='".$id."'";
$result2 = mysqli_query($conn,$query2);
$rows2 = mysqli_num_rows($result2);
if($rows>0){
    while ($row2 = mysqli_fetch_array($result2)){
        $hospital =$row2['hospital'];
        $doctorCharges = $row2['priceForChannel'];
        $roomNo =$row2['channelRoomNo'];
        $docName =$row2['docName'];


    }
}
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
    <br><br><br><br><br><br>
    <div class="container border-left border-info">
    <div>
      
       
      <img src="img/banner/banner.png" style="width:700px;height: 100px;border-radius: 0;">
    </div>
   
    
    <div class="container"  style="font-size: 20px">
    <table class="w3-container ">
      
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
            <td class="w3-container w3-padding">Phone Number  </td>
            <td class="w3-container">: <?php echo $phone;?></td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">NIC number  </td>
            <td class="w3-container">: <?php echo $nic;?></td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Email  </td>
            <td class="w3-container">: <?php echo $email;?></td>
        </tr>

        <tr class="w3-container">
            <td class="w3-container w3-padding">Doctor's Hospital  </td>
            <td class="w3-container">: <?php echo $hospital;?></td>
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

        <tr class="w3-container w3-padding">
            <td class="w3-container"><br>
            <button type="submit" class="w3-button w3-block  bg-info w3-section w3-ripple w3-padding"  data-toggle="modal" data-target="#myModal">Continue</button>
            </td>
        </tr>
    </table>

</div>
</div>

<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header bg-primary">
                <p class="modal-title" style="font-size:25px"><strong>Payment</strong></p>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->

            <div class="modal-body" >


                <div class="container">
                    <label>Please Select Payment Option</label>
                    <select class="w3-input w3-border" name="reaction" style="background-color:#f1f1f1">
                        <option value="3" disabled>eZ Cash</option>
                        <option value="3" disabled>m-Cash</option>
                        <option value="0">Visa/Master (Local Cards Only)</option>
                        <option value="1" disabled>Dialog CDMA - Add to Bill</option>
                        <option value="2" disabled>Sampath Vishwa</option>
                        <option value="3" disabled>Etisalat - Add to Bill</option>
                        <option value="3" disabled>Airtel - Add to Bill</option>
                        <option value="3" disabled>Hutch - Add to Bill</option>
                        <option value="3" disabled>LankaBell - Add to Bill</option>

                    </select>

                </div>


            </div>

            <!-- Modal footer -->
            <div class="modal-footer">

                <!--<button type="submit"  class="w3-button w3-block w3-quarter w3-red w3-section w3-ripple w3-padding" name="payment">Pay</button>-->
                <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_xclick">
                    <input type="hidden" name="business" value="ruwan.wedisa0150-facilitator@gmail.com">
                    <input type="hidden" name="lc" value="LK">
                    <input type="hidden" name="item_name" value="billPay">
                    <input type="hidden" name="item_number" value="billPay">
                    <input type="hidden" name="amount" value="<?php echo $inDollors?>">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="button_subtype" value="services">
                    <input type="hidden" name="no_note" value="1">
                    <input type="hidden" name="no_shipping" value="1">
                    <input type="hidden" name="rm" value="1">
                    <input type="hidden" name="return" value="http://localhost/channelling/paymentComplete.php?approved=true&timeslot=<?php echo $timeSlotNum?>&dayBooked=<?php echo $dayBooked?>
                    &Date=<?php echo $appoinmentDate?>
                    &RoomNo=<?php echo $roomNo?>
                    &DocName=<?php echo $docName?>
                    &Name=<?php echo $name?>
                    &refNo=<?php echo $refid?>
                    &phone=<?php echo $phone?>
                    &nic=<?php echo $nic?>
                    &email=<?php echo $email?>
                    &amount=<?php echo $finalCost?>

                    ">
                    <input type="hidden" name="cancel_return" value="http://localhost/channelling/paymentComplete.php?approved=false&timeslot=<?php echo $timeSlotNum?>&dayBooked=<?php echo $dayBooked?>">
                    <input type="hidden" name="tax_rate" value="5.000">
                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted">
                    <input type="hidden" name="notify_url" value="https:http://echannelling.000webhostapp.com/payPalListner.php">
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>

            </div>

        </div>
    </div>
</div>
<br><br><br><br>

<?php include 'footer.php'; ?>
  </body>
  </html>