<?php 
  include("db.php");
    session_start();
  $id=$_REQUEST['ID'];
  $dateFromSession=$_REQUEST['Day'];


$day =  substr($dateFromSession, 3,2);
$month =  substr($dateFromSession, 0,2);
$year =  substr($dateFromSession, 6,4);

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
    <br><br><br><br>
    <hr class="">
    <div class="container target">
    <div class="row">
        <div class="col-sm-10">
            <!-- methana kalin list karna doc name eka session walin ganna -->

            <?php
            $sql="select * from doctor WHERE id='".$id."' ";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if ($rows > 0) {

                while($row=mysqli_fetch_array($result)){
                    $name = $row['docName'];
                    $address = $row['address'];
                    $speciality =  $row['speciality'];
                    $hospital =  $row['hospital'];
                    $Role =  "Doctor";
                    $phone =$row['telHome'];
                    $Email =$row['email'];
                    $channelRoomNo =$row['channelRoomNo'];


                    if($speciality == 1){
                        $speciality = "Mental";
                    }
                    else if($speciality == 2){
                        $speciality = "Dental";
                    }
                    else if($speciality == 3){
                        $speciality = "VOG";
                    }

                    echo "<div class=\"container\" id=\"div_color\">";
                    echo "<h1>Dr. ";
                    echo $name;
                    echo "</h1>";
                    echo "<p style=\"font-size: 18px\">";
                    echo $address;
                    echo "</p>";
                    echo "</div>";
                }

            }
            ?>

        </div>
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" height="150px" class="img-circle img-responsive" src="img/Avatar/docavatar.png"></a>
            <!-- user kiyala page ekakata link kala oninam -->
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-3">
            <!--left col eka meka-->
            <ul class="list-group">
                <li class="list-group-item text-muted" contenteditable="false" STYLE="background: #f2f2f2;">Profile</li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Speciality:</strong></span><?php echo $speciality;?></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Hospital:</strong></span> <?php echo $hospital;?></li>
                <li class="list-group-item"><span class="pull-left"><strong class="">Role: </strong></span> <?php  echo $Role;?></li>
            </ul>
            <br>
            <ul class="list-group">
                <li class="list-group-item text-muted" STYLE="background: #f2f2f2;">Contact Info: <i class="fa fa-dashboard fa-1x"></i>

                </li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Mobile No:</strong></span> <?php echo $phone;?></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Email:</strong></span> <?php echo $Email;?></li>
                <li class="list-group-item "><span class="pull-left"><strong class="">Channel No:</strong></span> <?php echo $channelRoomNo;?></li>
                         
            </ul>
              
        </div>

        <!--/col-3 right colm eka meka pre tag dala tiyenne-->
        <div class="col-sm-9" style="" contenteditable="false">
             
        <table class="responstable table ">
  
            <tr>
                <th>No:  </th>
                <th  >Time Slot  &nbsp &nbsp &nbsp &nbsp &nbsp </th>
                <th> Channel  </th>
            </tr>
            <?php
                $q1=mysqli_query($conn,"select * from time_shedule WHERE 
                ((id='".$id."' AND status='1'  AND enable='1')) 
                OR
                ((id='".$id."') AND((bookedDate= NULL) OR (bookedDate <> '".$day."')))
                "
                );
                if(mysqli_num_rows($q1)>0){
                    while($row = mysqli_fetch_row($q1)){

                       // $day =  substr($row[2], 3,2);

            ?>
            <!-- database eke time kiyalay date kialay colm 2 k tiye 2kma varchar type -->
            <tr>
                <td><?php echo $row[1]; ?></td>
                <td>Date: <?php echo  $dateFromSession; ?><br>Time: <?php echo $row[2]; ?> </td>


                <td><a href="booking_form.php?ID=<?php echo $id?>&timeslot=<?php echo $row[1]; ?>
                &dayBooked=<?php echo $day?>
                &Name=<?php echo $name?>
                &Date=<?php echo $year."-".$month."-".$day?>
                "><button type="button" font-size="20px"class="btn btn-info">Book    &nbsp &nbsp   </button></a></td>
            </tr>
        <?php }}
        else{
            ?>
            <tr>
                <td colspan="3">
                    NO RESULTS FOUND. ALL CHANNELS ARE BOOKED.
                </td>
            </tr>

        <?php
        }?>
 
        </table>


        
           <script>
            $(document).ready(function(){
                $("button").click(function(){
                    //alert("Do You Wish To Channel This Doctor");
                    this.disabled=true;
                });
            });
           </script>  
              
        </div>
    </div>

<br><br><br>

<?php include 'footer.php'; ?>
</body>


</html>
