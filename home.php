<?php
include("db.php");
session_start();
$_SESSION['status']=0;
?>
<!DOCTYPE html>
<html>
  <head>

    <!-- css link -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style2.css" type="text/css" media="screen">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style media="screen">
    .section-team {
      font-family: "Poppins", sans-serif;
      padding: 80px 0;
    }

    .section-team .header-section {
      margin-bottom: 50px;
    }

    .section-team .header-section .small-title {
        margin-bottom: 25px;
      font-size: 16px;
        font-weight: 500;
        color: #3e64ff;
    }

    .section-team .header-section .title {
        font-weight: 700;
        font-size: 45px;
        color: white;
    }

    .section-team .single-person {
      margin-top: 30px;
      padding: 30px;
      background-color: #f6f9ff;
      border-radius: 5px;
    height: 420px;
    }

    .section-team .single-person:hover {
      background: linear-gradient(to right, #016cec, #00b5f7);
    }

    .section-team .single-person .person-image {
        position: relative;
        margin-bottom: 50px;
        border-radius: 50%;
        border: 4px dashed transparent;
        transition: padding .3s;
    }

    .section-team .single-person:hover .person-image {
      padding: 12px;
        border: 4px dashed #fff;
    }

    .section-team .single-person .person-image img {
      width: 100%;
        border-radius: 50%;
    }

    .section-team .single-person .person-image .icon {
      position: absolute;
        bottom: 0;
        left: 50%;
        transform: translate(-50%,50%);
        display: inline-block;
        width: 60px;
        height: 60px;
        line-height: 60px;
        text-align: center;
        background: linear-gradient(to right, #016cec, #00b5f7);
        color: #fff;
        border-radius: 50%;
        font-size: 24px;
    }

    .section-team .single-person:hover .person-image .icon {
      background: none;
      background-color: #fff;
      color: #016cec;
    }

    .section-team .single-person .person-info .full-name {
      margin-bottom: 10px;
      font-size: 28px;
        font-weight: 700;
    }

    .section-team .single-person .person-info .speciality {
        text-transform: uppercase;
        font-size: 14px;
        color: #016cec;
    }

    .section-team .single-person:hover .full-name,
    .section-team .single-person:hover .speciality {
      color: #fff;
    }

    .mini-footer {
       background:#192027;
       text-align:center;
       padding:32px 0
    }
    .mini-footer p {
       margin:0;
       line-height:26px;
       font-size:15px;
       color:white;
    }
    .mini-footer p a {
       color:white;
    }
    .mini-footer p a:hover {
       color:#34bfa3
    }
      .same-height{
        height: 190px;
      }
  
  </style>
   

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>E Channel</title>
  </head>
  <body>

    <?php include 'navigationbar.php'; ?>

      <!--slider-->

        <div class="container-fluid">
          <div class="row brand">
			  
            <div class="col-md-12">
              <h1 class="text-center font-weight-bold text-primary  p-4">MEDI LANKA E-CHANNELLING CENTER</h1>
            </div>
			  
          </div>

          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
				
				<div class="bg-info login-register d-none d-lg-block">
					<div class="row">
						<img class="logo-home " src="img/Logo/logo1.png" >
					</div>
					<div class="row">
						<input type="button" class="btn btn-outline-light btn-blockd m " value="LOGIN" onclick="location.href='login.php'">
					</div>
					<div class="row">
					<input type="button" class="btn btn-outline-light btn-blockd " value="JOIN" onclick="location.href='register.php'">
					</div>
					<p class="text-light p-4 text-justify">Digital Health Private Limited is Sri Lanka’s pioneering digital health solutions service provider, offering medical services to subscribers from the convenience of their mobile phone and website.</p>
				</div>
				
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
		    <br><br>

        <section class="section-team bg-primary" id="aboutus">
        <div class="container">
          <!-- Start Header Section -->
          <div class="row justify-content-center text-center">
            <div class="col-md-8 col-lg-6">
              <div class="header-section">
                <h3 class="small-title text-light">Our Experts</h3>
                <h2 class="title">Let's meet with our Doctors</h2>
              </div>
            </div>
          </div>
          <!-- / End Header Section -->
          <div class="row">
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img class="same-height" src="img\Doctors\profile.jpg" alt="">
                  <span class="icon">
                      <img src="img/Logo/logo1.png">
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">DR. Jayanth Thilakarathna</h3>
                  <span class="speciality">Specilies for EYE</span>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img class="same-height" src="img\Doctors\maxresdefault.jpg" alt="">
                  <span class="icon">
                      <img src="img/Logo/logo1.png">
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">DR. Mauri Kumari</h3>
                  <span class="speciality">Specilies for baby</span>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img class="same-height" src="img\Doctors\thushara.jpg" alt="">
                  <span class="icon">
                        <img src="img/Logo/logo1.png">
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">DR. Saduni Marasinhe</h3>
                  <span class="speciality">Specilies for Lady</span>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
            <!-- Start Single Person -->
            <div class="col-sm-6 col-lg-4 col-xl-3">
              <div class="single-person">
                <div class="person-image">
                  <img class="same-height" src="img\Doctors\Pandula2.jpg" alt="">
                  <span class="icon">
                      <img src="img/Logo/logo1.png">
                  </span>
                </div>
                <div class="person-info">
                  <h3 class="full-name">DR. Sarath Makanda</h3>
                  <span class="speciality">Specilies for body</span>
                </div>
              </div>
            </div>
            <!-- / End Single Person -->
          </div>
        </div>
      </section>
        <br><br>
        <!-- form and calender -->
        <div class="container-fluid bg-info">
          <br><br>
          <div class="row box">
            <div class="col-sm-6 f-r-b">
              <h2 class="text-light">Channel a Doctor</h2><hr><br>
              <form action="serch_doc.php" method="post">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control" placeholder="Enter email" name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Tel Number:</label>
                  <input type="text" class="form-control" placeholder="Enter your Phone Number" name="tel" id="tel">
                </div>
                <div class="form-group">
                  <label for="pwd">Doctor's Name:</label>
                  <input type="text" class="form-control" placeholder="Doctor's Name" name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="sel1">Any Specialization:</label>
                  <select class="form-control" id="sel1" name="spec" required>
					           <option value="" data-area="0" selected="selected">Any Specialization</option>
                      <?php
                        $specList = mysqli_query($conn,"select distinct speciality from doctor");
                        while($spec = mysqli_fetch_row($specList)){
                        if($spec[0] == 1){
                            $spe = "PHYSIOTHERAPY";
                        }
                        elseif ($spec[0] == 2){
                            $spe = "EYE SURGEON";
                        }
                        elseif ($spec[0] == 3){
                            $spe = "PEDIATRICIAN PHYSICIAN";
                        }elseif ($spec[0] == 4){
                            $spe = "CLINICAL GENETICIST & GENETIC COUNSELOR";
                        }elseif ($spec[0] == 5){
                            $spe = "  PEDIATRIC CARDIOLOGIST";
                        }elseif ($spec[0] == 6){
                            $spe = "NEONATOLOGIST";
                        }elseif ($spec[0] == 7){
                            $spe = "RESTORATIVE DENTISTRY";
                        }elseif ($spec[0] == 8){
                            $spe = "DERMATOLOGIST";
                        }elseif ($spec[0] == 9){
                            $spe = "MICROBIOLOGIST";
                        }else{
                            $spe = "OTHERS";
                        }

                      ?>
                    <option value="<?php echo $spec[0]; ?>"><?php echo $spe; ?></option>
                  <?php
                    }
                  ?>                  
 

                  </select>
                </div>
                <div class="form-group">
                  <label for="pwd">Select Day:</label>
                  <input type="date" class="form-control" placeholder="DD/MM/YYYY" id="date" name="date" required>
                </div>

                <button type="submit" name="search" class="btn btn-primary">check availability</button>
              </form>
            </div>
            <br><br>
            <div class="col-sm-6">
              <h2 class="text-light"> Top Doctor's Time Table</h2><hr><br>
              <table class="table text-white table-white font-weight-bold">
                <thead>
                  <tr>
                    <th>Doctor Name</th>
                    <th>Date And Time</th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                  $q="select * from Top_doctor_time_table;";

                  $result = mysqli_query($conn, $q);
                  $rows = mysqli_num_rows($result);
                  if ($rows > 0) {

                      while($row=mysqli_fetch_array($result)){
                          $name = $row['Doctor_name'];
                          $time =  $row['Date_time'];
                          

                          echo "<tr>";
                            echo "<td>";
                              echo $name;
                            echo "</td>";
                            echo "<td>";
                              echo $time;
                            echo "</td>";
                          echo "</tr>";
  
                      }
                  }

                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <br><br>
        </div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126985.91233567244!2d80.48070740135898!3d5.95198778472467!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae138d151937cd9%3A0x1d711f45897009a3!2sMatara!5e0!3m2!1sen!2slk!4v1607139275787!5m2!1sen!2slk" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		  
       <?php include 'footer.php'; ?>


  </body>
</html>
