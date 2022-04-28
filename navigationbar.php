<?php
include("db.php");
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

?>


<!DOCTYPE html>
<html>
<head>
	<!-- css link -->

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!--Alert-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>E Channel</title>
</head>
<body>
  <div>
	   <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
        <!-- Brand -->
        <a class="navbar-brand" href="#">MEDI LANKA</a>
		<img src="img/Logo/logo1.png" class="logo-nav float-right navbar-brand" >

        <!-- Toggler/collapsibe Button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link text-uppercase w3-bar-item w3-button w3-padding-large w3-hide-small text-white" href="home.php">Home</a>
            </li>
            <li class="nav-item">
              <form method="post"><center>
              <button class="nav-link text-uppercase w3-bar-item w3-button bg-primary w3-padding-large w3-hide-small text-white"  name="check">My Channelling</button></center>
              </form>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase w3-bar-item w3-button w3-padding-large w3-hide-small text-white" href="doctor.php">Docters</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-uppercase w3-bar-item w3-button w3-padding-large w3-hide-small text-white" href="about.php">About us</a>
            </li>
            </ul>
	            <form class="form-inline sercch-alighnment" style="margin-left:25px;" action="/action_page.php">
                <div class="row" style="flex-wrap: nowrap;">
	               <input class="form-control mr-sm-2" type="text" placeholder="Search">
	               <button class="btn btn-success" type="submit">Search</button>
                </div>
	            </form>
        <div style="margin-left: auto;">
			  <ul class="navbar-nav ml-4" >
  				<li class="nav-item">
  				  <a class="nav-link text-uppercase btn btn-info text-white" href="login.php">Login</a>
  				</li>

  				<li class="nav-item ml-3">
  				  <a class="nav-link text-uppercase btn btn-info text-white" href="register.php">Register</a>
  				</li>
        </ul>
        </div>
      </div>
      </nav>
    </div>
    <?php

$status=$_SESSION['status'];
//$uid=$_SESSION['sid'];
if (isset($_POST['check'])) {
    myFunction();
  }
function myFunction() {
  if($_SESSION['status']==1){
    header("location:channel.php");
  }else{
    echo  "<script type=\"text/javascript\">
              Swal.fire('Login First!!',
                    'To Use Fhis Feature Please Login',
                    'info'
              )
            </script>";
   // header("location:home.php");
  }
}
?>
</body>
</html>