
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/w3.css">



    <!-- jQuery library -->
    <script src="js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- css link -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <link href="css/paper-dashboard.css?v=2.0.1">
    <title>Channel a Doctor</title>
</head>
<body id="body-pd">
  <?php
          if(isset($_POST['button1'])) {
            session_start();
              session_destroy();
              if(isset($_COOKIE['uname']) and isset($_COOKIE['password'])){
              //  $uname=$_COOKIE['uname'];
               // $pass=$_COOKIE['password'];
                unset($_COOKIE['uname']);
                unset($_COOKIE['password']);
                setcookie('uname','',time()-3600);
                setcookie('password','',time()-3600);
                }
                header("location:../home.php");
           }
            ?>
    <header class="header" id="header">
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
        <form class="form-inline" action="/action_page.php">
          <input class="form-control" type="text" placeholder="Search">
          <button class="btn btn-primary ml-3" type="submit">Search</button>
        </form>
        <div class="row">
          <form method="post">
           <button value="button1" name="button1" class="btn btn-dark">Log Out</button>
          </form> 
        <div class="header__img ml-4">
            <img  src="img/Logo/logo1.png">
        </div> 
      </div>
    </header>

	<br>
    <div class="embed-responsive embed-responsive-16by9">
    <iframe src="dashhome.php" name="myFrame" class="embed-responsive-item" ></iframe>
     <br><br><hr class="hr">
    </div>     

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">MEDI LANKA</span>
                </a>

                <div class="nav__list">
                    <a href="dashhome.php" class="nav__link active" target="myFrame"> 
                    <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Admin Dashboard</span>
                    </a>

                    <a href="addAdoctor.php" class="nav__link" target="myFrame">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Manage Doctors</span>
                    </a>

                    <a href="patient/addPatient.php" class="nav__link" target="myFrame">
                        <i class='bx bx-user-plus nav__icon' ></i>
                        <span class="nav__name">Manage Patients</span>
                    </a>



                    <a href="My_account.php" class="nav__link" target="myFrame">
                        <i class='bx bx-edit nav__icon' ></i>
                        <span class="nav__name">Feedback</span>
                    </a>

                    <a href="feedback.php" class="nav__link" target="myFrame">
                        <i class='bx bx-bar-chart-alt-2 nav__icon'  target="myFrame"></i>
                        <span class="nav__name">Summary</span>
                    </a>
                </div>
            </div>
		</nav>
    </div>
    <?php include 'footer.php'; ?>
 <script src="js/main.js"></script>
  </body>
</html>
