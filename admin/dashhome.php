
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/w3.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">--> 


    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- css link -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/paper-dashboard.css?v=2.0.1">
</head>
<body id="body-pd">
  <div class="flex-column">
    <img class="justify-content-center" src="img/avatar.png">
    <h5 class="ml-3">
      <?php session_start();
      echo $_SESSION['uname'];
      ?>
  </h5>
  </div>

  <header class="w3-container">
    <h5 align="center"><b><i class="fa fa-dashboard"></i>Admin Dashboard</b></h5>
  </header>
  <div class="w3-row-padding w3-margin-bottom">
    <a data-toggle="modal" href="#myModal">
    <div class="w3-quarter w3-padding">
      <div class="w3-container w3-card w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-medkit custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>Appointments</h5>
      </div>
    </div>
    </a>
    <a  href="view_medicaltips.php">
    <div class="w3-quarter w3-padding">
      <div class="w3-container w3-card w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-user-md custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>99</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>Doctors</h5>
      </div>
    </div>
    </a>
    <a data-toggle="modal" href="#myModal">
    <div class="w3-quarter w3-padding">
      <div class="w3-container w3-card w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-heartbeat custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>New patients</h5>
      </div>
    </div>
    </a>
    
    <a data-toggle="modal" href="#myModal">
    <div class="w3-quarter w3-padding">
      <div class="w3-container w3-card w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-hospital custom w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>50</h3>
        </div>
        <div class="w3-clear"></div>
        <h5>Feedback</h5>
      </div>
    </div>
    </a>
  </div>

     <br><br><hr class="hr">      
 <script src="js/main.js"></script>
  </body>
</html>
