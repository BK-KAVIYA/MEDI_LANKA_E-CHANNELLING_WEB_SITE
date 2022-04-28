<?php
session_start();
include('db.php');

$userid = $_SESSION['uname'];

$sql ="SELECT * FROM admin WHERE Uname='".$userid."'";
$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
if($rows>0){
    while($row=mysqli_fetch_array($result)){

        $name =  $row['adminName'];
        $address =  $row['address'];
        $email =  $row['email'];
        $tel =$row['telNo'];


    }

}


?>
<?php

if(isset($_POST['submit'])){

    $name = $_POST['name1'];
    $address = $_POST['address1'];
    $email = $_POST['email1'];
    $telephone = $_POST['telephone1'];



    $query1 = "UPDATE admin SET adminName = '".$name."' , address = '".$address."', email = '".$email."', telNo = '".$telephone."' WHERE Uname='".$userid."'";

    if(mysqli_query($conn, $query1)){
        echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-success text-white'>
        
        
		<h4 class='modal-title'>Success</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>Successfully Updated!.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div> ";



    }
    else{
        echo "<div id='myModal1' class='modal fade' role='dialog'>
  <div class='modal-dialog'>

    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header bg-danger text-white'>
        
        
		<h4 class='modal-title'>Error</h4>
		<button type='button' class='close' data-dismiss='modal'>&times;</button>
      </div>
      <div class='modal-body'>
        <p>Update Unsuccesfull!.</p>
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-success' data-dismiss='modal'>Close</button>
      </div>
    </div>

  </div>
</div> ";
    }


}


?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <title>| MEDI LANKA |</title>
         <!-- css link -->

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/doctorPageStyle.css">

        <!-- js -->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

</head>

<body>
<br><br>
        <?php include('navbar/navigationbarAdmin.php') ?>
<div class="container">
    <br><br>
    <div class="row">
        <div class="panel-primary center-block col-md-8 col-lg-8" >
            <form class="form-horizontal" method="post" action="My_account.php" name="change"  >
                <br>
                <br>
                <div class="panel-heading bg-primary text-light"><h3>ACCOUNT SETTINGS</h3> </div>
                <div class="panel-body panel-default">
                    <table width="400" border="0" cellspacing="10" cellpadding="10"class="table table-hover">
                        <tr>
                            <td>
                                <div class="flex-column">
                                <img class="justify-content-center" src="img/avatar.png">
                                <h5 class="ml-3">
                                  <?php echo $_SESSION['uname'];
                                  ?>
                                </h5>
                                </div>
                            </td>
                            <td>
                                <input type="text" class="form-control" name="name1" placeholder="Your Name" value="<?php echo $email?>" disabled>
                            </td>
                        </tr>
                        <tr><td>Name</td>
                            <td> <input type="text" class="form-control" name="name1" placeholder="Your Name" value="<?php echo $name?>"
                                        data-validation="length" data-validation-length="min1"
                                        data-validation-error-msg="Name should be Not Null"></td>


                        </tr><tr>
                            <td>Address</td>
                            <td> <input type="text" class="form-control" name="address1" placeholder="Personal Address" value="<?php echo $address?>"
                                        data-validation="length" data-validation-length="min1"
                                        data-validation-error-msg="Address should be Not Null"
                                ></td>

                        </tr><tr>
                            <td>Email</td>
                            <td> <input type="email" class="form-control" name="email1"  value="<?php echo $email?>"
                                        data-validation="email"></td>

                        </tr><tr>
                            <td>Telephone</td>
                            <td> <input type="text" class="form-control" name="telephone1"  value="<?php echo $tel?>"
                                        data-validation="length" data-validation-length="9-10"
                                        data-validation-error-msg="Telephone Number has to be a 10 numbers"
                                ></td>

                        </tr>
                    </table>
                    <div class="d-flex justify-content-end ">
                        <button type="submit" value="Changephone" class="btn btn-info text-light"name="submit">Update</button>
                    </div>
        </div>
    </form>
</div>
<div class="col-md-4 col-lg-4">
            <br><br>
            <img style="border:none;width: 100%;" src="img/Admin/addadmin2.png">
</div>
</div>
</div>
</body>
<br><br><br>

<script type="text/javascript"  src="../src/js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
<script src="../src/js/jquery.form-validator.min.js"></script>
<script>
    $.validate({
        lang: 'en'
    });
</script>

<script> $(document).ready(function () {
        // Show the Modal on load
        $('#myModal1').modal('show');
    });</script>



</html>






















