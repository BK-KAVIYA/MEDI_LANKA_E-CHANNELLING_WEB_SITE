<?php
include('../db.php');

session_start();
//$uid=$_SESSION['sid'];
?>
<!DOCTYPE html>
<head>
        <meta charset="UTF-8">
        <title>| MEDI LANKA |</title>
         <!-- css link -->

        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../css/doctorPageStyle.css">

        <!-- js -->
        <script src="../js/jquery.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        

    </head>
    <body>
        <br><br>
        <?php include('../navbar/navigationbarpatient.php') ?>
        <div class="container">
            <hr>
            <br>
        <div class="container">
            <hr>
            <br>

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <form id="searchPatientForm"> 
                        <h3 class="text text-primary" style="text-align: center">List of Patients</h3><br>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-10 mb-3"><input type="text" class="form-control" placeholder="Type the Doctor's Name Here..."></div>
                                <div class="col-md-2"><button type="submit" class="btn btn-outline-success">Search</button></div>
                            </div>
                        </div>
                    </form> 
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Specialization</th>
                                <th scope="col">Address</th>
                                <th scope="col">Contact No</th>
                                <th scope="col">Email</th>
                                <th scope="col">Username</th>
                                <th scope="col">Availablity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>Mark</td>
                                <td>Mark</td>
                                <td>Otto</td>
                            </tr>
                        </tbody>
                    </table>                  
                </div>
            </div>
        </div>

    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
