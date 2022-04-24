<?php
include("db.php");
session_start();
?>
<?php
$sql="SELECT Email,Telephone FROM patient WHERE Id='".$_SESSION['uid']."' ";
      $result=mysqli_query($conn,$sql);
      $rows = mysqli_num_rows($result);
            if ($rows > 0) {
        while($row=mysqli_fetch_array($result)){
          $Email=$row['Email'];
          $Telephone=$row['Telephone'];
        }
      }

  $timeSlotNum = $_REQUEST['timeslot'];
  $id=$_REQUEST['ID'];
  $dayBooked = $_REQUEST['dayBooked'];
  $name = $_REQUEST['Name'];
  $date = $_REQUEST['Date'];

?>
<!DOCTYPE html>
<html>
  <head>

    <!-- css link -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style2.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/w3.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>E Channel</title>
  </head>
  <body>
    <br><br>
    <nav aria-label="...">
            <ul class="pagination">
                <li class="page-item ">
                    <a class="page-link bg-primary text-light" href="#" tabindex="-1"> Previous</a>
                </li>
            </ul>
    </nav>
    <div class="container" >
      <div class="row">
        <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" height="150px" class="img-circle img-responsive" src="img/Avatar/docavatar.png"></a>
            <!-- user kiyala page ekakata link kala oninam -->
        </div>
        <div >
        <h2 class="mt-5"> <span>Dr.<?php echo $name?></span></h2>
        <p style="color: #ff435b">Date:<?php echo $date?>&nbsp;&nbsp;</p>
        </div>
    </div>
    <br>
    <div class="w3-container">
        <h2>Enter Your Details</h2>
    </div>
    <br>
    <div  class="container">
        <form class = "container card-8" method="post" action="recieptDetails.php?ID=<?php echo $id?>&timeslot=<?php echo $timeSlotNum?>&dayBooked=<?php echo $dayBooked?>&Date=<?php echo $date?>">
            <div class = "form-group">
                <label class = "w3-label"><b>Full Name</b></label>
                <input class = "w3-input" value="<?php echo $_SESSION['email']; ?>" name="name" type = "text" placeholder="Enter your name" style = "width:90%" required>

            </div>

            <div class = "form-group">
                <label class = "w3-label"><b>Phone</b></label>
                <input class = "w3-input" name="pn" style = "width:90%"
                       data-validation="length" data-validation-length="8-9"
                       data-validation-error-msg="Telephone Number has to be a 9 numbers eg:71XXXXXXX"
                       placeholder="Enter your Telephone Number   EX:71XXXXXXX" value="<?php echo $Telephone; ?>"
                required>

            </div>

            <div class = "form-group">
                <label class = "w3-label"><b>NIC</b></label>
                <input class = "w3-input" name="nic" style = "width:90%"
                       data-validation="length" data-validation-length="10-10"
                       data-validation-error-msg="Invalid NIC Number"
                       placeholder="EX:93XXXXXXXv"
                >

            </div>

            <div class = "form-group">
                <label class = "label"><b>Email</b></label>
                <input class = "w3-input" name="email" type = "text" style = "width:90%"
                       data-validation="email" value="<?php echo $Email; ?>" required 
                >

            </div>

            <button type="submit"  class="w3-button w3-block w3-quarter bg-primary w3-section w3-ripple w3-padding" name="detailsSubmit">Continue</button>



        </form>
    </div>
</div>
    <br><br> <br>
  </body>
  </html>