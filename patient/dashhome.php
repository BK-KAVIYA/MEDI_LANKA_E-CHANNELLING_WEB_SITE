<?php
include('db.php');
session_start();
$sql="SELECT Email,Telephone FROM patient WHERE Id='".$_SESSION['uid']."' ";
      $result=mysqli_query($conn,$sql);
      $rows = mysqli_num_rows($result);
            if ($rows > 0) {
        while($row=mysqli_fetch_array($result)){
          $Email=$row['Email'];
          $Telephone=$row['Telephone'];
        }
      }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <!-- css link -->
    <link rel="stylesheet" href="../css/w3.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css"> 
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/main.css">

    <!-- jQuery library -->
    <script src="../js/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <title>Channel a Doctor</title>
</head>
<body style="padding-left: 0px;">
  <div class="flex-column">
    <img class="allign-content-center ml-4" src="../img/avatar.png">
    <h5 >
      <?php
      echo $_SESSION['email'];
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
                <img class="d-block w-100" src="../img/bac.jpg" alt="First slide">
                <div class="carousel-caption">
                  <h3>Best Doctors</h3>
                  <p>There are many of Best Doctors are here</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../img/bac2.jpg" alt="Second slide">
                <div class="carousel-caption">
                  <h3>Best Specialies</h3>
                  <p>There are many of Best Specialies are here</p>
                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="../img/bac3.jpeg" alt="Third slide">
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
	<div class="container">
     <br><br>
     <div class="row">
       <div class="col-sm-6 f-r-b">
         <h2>Channel a Doctor</h2><hr><br>
         <form action="serch_doc.php" method="post">
                <div class="form-group">
                  <label for="email">Email address:</label>
                  <input type="email" class="form-control w-100 p-3" value=" <?php echo $Email; ?>" placeholder="Enter email" name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="pwd">Tel Number:</label>
                  <input type="text" class="form-control w-100 p-3" placeholder="Enter your Phone Number" name="tel" id="tel" value=" <?php echo $Telephone; ?>" > 
                </div>
                <div class="form-group">
                  <label for="pwd">Doctor's Name:</label>
                  <input type="text" class="form-control w-100 p-3" placeholder="Doctor's Name" name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="sel1">Any Specialization:</label>
                  <select class="form-control w-100" id="sel1" name="spec" required>
                     <option value="" data-area="0" selected="selected">Any Specialization</option>
                      <?php
                        $specList = mysqli_query($conn,"select distinct speciality from doctor");
                        while($spec = mysqli_fetch_row($specList)){
                        if($spec[0] == 1){
                            $spec[0] = "Mental";
                        }
                        elseif ($spec[0] == 2){
                            $spec[0] = "Dental";
                        }
                        elseif ($spec[0] == 3){
                            $spec[0] = "VOG";
                        }

                      ?>
                    <option value="<?php echo $spec[0]; ?>"><?php echo $spec[0]; ?></option>
                  <?php
                    }
                  ?>                  
 

                  </select>
                </div>
                <div class="form-group">
                  <label for="pwd">Select Day:</label>
                  <input type="date" class="form-control w-100 p-3" placeholder="DD/MM/YYYY" id="date" name="date" required>
                </div>

                <button type="submit" name="search" class="btn btn-primary">Check Availability</button>
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
     <br>
  </body>
</html>
