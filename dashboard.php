
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
    <title>Channel a Doctor</title>
</head>
<body id="body-pd">
  <?php
          if(isset($_POST['button1'])) {
            //header("location:dashboard.php");
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
                header("location:home.php");
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
	<br><br><br>
  <div class="flex-column">
    <img class="justify-content-center" src="img/avatar.png">
    <h5 class="ml-3">
      <?php session_start();
      echo $_SESSION['uname'];
      ?>
  </h5>
  </div>
  <header class="w3-container">
    <h5 align="center"><b><i class="fa fa-dashboard"></i>Medi Lanka E-channelling Center</b></h5>
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
        <h5>Prescriptions</h5>
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
        <h5>Medical tips</h5>
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
        <h5>My Health</h5>
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
        <h5>Lab Report</h5>
      </div>
    </div>
    </a>
  </div>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
				
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/bac.jpg" alt="First slide">
                <div class="carousel-caption">
                  <h3>Best Doctors</h3>
                  <p>There are many of Best Doctors are here</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/bac2.jpg" alt="Second slide">
                <div class="carousel-caption">
                  <h3>Best Specialies</h3>
                  <p>There are many of Best Specialies are here</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/bac3.jpeg" alt="Third slide">
                <div class="carousel-caption">
                  <h3>Best Medicines</h3>
                  <p>There are many of Best Medicines are here</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
	<div class="col-sm-12">
			 <div class="container">
     <br><br>
     <div class="row">
       <div class="col-sm-6 f-r-b">
         <h2>Channel a Doctor</h2><hr><br>
         <form action="/action_page.php">
           <div class="form-group">
             <label for="email">Email address:</label>
             <input type="email" class="form-control" placeholder="Enter email" id="email">
           </div>
           <div class="form-group">
             <label for="pwd">Name:</label>
             <input type="text" class="form-control" placeholder="Enter your Name" id="name">
           </div>
           <div class="form-group">
             <label for="sel1">Select list:</label>
             <select class="form-control" id="sel1">
               <option>Select a Doctor</option>
               <option>Doctor 01</option>
               <option>Doctor 02</option>
               <option>Doctor 03</option>
             </select>
           </div>
           <div class="form-group">
             <label for="pwd">Day and Number:</label>
             <input type="text" class="form-control" placeholder="Date And Number auto Genarate here" id="name">
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
       <br><br>
       <div class="col-sm-6">
         <h2>Today's Doctor's Time Table</h2><hr><br>
         <table class="table table-primary">
           <thead>
             <tr>
               <th>Doctor Name</th>
               <th>Date And Time</th>

             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Dr.A.S.K.Banagala</td>
               <td>Monday 4.00pm - 8.00pm</td>
             </tr>
             <tr>
               <td>Dr.ASHAN ABEYEWARDENE</td>
               <td>Wensday 4.00pm - 8.00pm</td>
             </tr>
             <tr>
               <td>Dr. DAMMIKE SILVA</td>
               <td>Friday 4.00pm - 8.00pm</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
     <br><br><hr class="hr">
     <div class="row">
       

    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <a href="#" class="nav__logo">
                    <i class='bx bx-layer nav__logo-icon'></i>
                    <span class="nav__logo-name">MEDI LANKA</span>
                </a>

                <div class="nav__list">
                    <a href="channel.html" class="nav__link active">
                    <i class='bx bx-grid-alt nav__icon' ></i>
                        <span class="nav__name">Channel a Doctor</span>
                    </a>

                    <a href="doctor.html" class="nav__link">
                        <i class='bx bx-user nav__icon' ></i>
                        <span class="nav__name">Doctors</span>
                    </a>

                    <a href="notice.html" class="nav__link">
                        <i class='bx bx-message-square-detail nav__icon' ></i>
                        <span class="nav__name">Special Notes</span>
                    </a>



                    <a href="report.html" class="nav__link">
                        <i class='bx bx-folder nav__icon' ></i>
                        <span class="nav__name">Reports</span>
                    </a>

                    <a href="parmacy.php" class="nav__link">
                        <i class='bx bx-bar-chart-alt-2 nav__icon' ></i>
                        <span class="nav__name">Parmacy</span>
                    </a>
                </div>
            </div>
		</nav>
    </div>
    <?php include 'footer.php'; ?>
 <script src="js/main.js"></script>
  </body>
</html>
