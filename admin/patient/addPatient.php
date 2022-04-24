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

            <div class="row">

                <div class="col-md-8 col-lg-8 ">
                    <form id="AddDoctorForm" class="needs-validation p-5" method="post" action="patientRegistration.php" novalidate>
                        <h3 class="text text-primary" style="text-align: center">Add a Patient</h3><br>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01"><strong>First name</strong></label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="" name="firstName" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02"><strong>Last name</strong></label>
                                <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" name="lastName" value="" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <label for="inputEmail4">Email</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Email.
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom01">Username</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Username"  name="userName" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Username.
                                </div>                                    
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" data-toggle="password" name="password" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Password.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Gender</strong></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="1" name="radio-stacked" required >
                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                    <label class="invalid-feedback" for="inlineRadio1">Select on of the Option</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="2" name="radio-stacked" required>
                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                    <label class="invalid-feedback" for="inlineRadio2">Select on of the Option</label>
                                </div>
                            </div>                            
                        </div>
                        <br>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Date of Birth</strong></label>
                                <input type="Date" class="form-control" id="validationCustom03" name="DOB" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Date.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Address Line 1</strong></label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Address Line 1" name="addressLine1" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Address.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Address Line 2</strong></label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Address Line 2" name="addressLine2" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Address.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>city</strong></label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="city" name="city" required>
                                <div class="invalid-feedback" >
                                    Please provide a valid city.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Contact Number</strong></label>
                                <input type="text" class="form-control" id="validationCustom03" placeholder="Contact Number" name="telNo" required>
                                <div class="invalid-feedback">
                                    Please provide a valid Contact Number.
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>Add a photo to the patient</strong></label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12">
                                <label for="validationCustom03"><strong>SMS Approved</strong></label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" name="radio-stacked" required >
                                    <label class="form-check-label" for="inlineRadio1">Yes</label>
                                    <label class="invalid-feedback" for="inlineRadio1">Select on of the Option</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" name="radio-stacked" required>
                                    <label class="form-check-label" for="inlineRadio2">No</label>
                                    <label class="invalid-feedback" for="inlineRadio2">Select on of the Option</label>
                                </div>
                            </div>                            
                        </div>
                        <br>
                        <button class="btn btn-primary" type="submit" name="save"> Save</button>
                    </form>                   
                </div>
                <div class="col-md-4 col-lg-4">
                    <img id="dctrimg" src="../img/patient/hospital.png">
                </div>
            </div>
        </div>

    </div>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict';
            window.addEventListener('load', function () {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function (form) {
                    form.addEventListener('submit', function (event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
    <script type="text/javascript">
        $("#password").password('toggle');
    </script>
<br><br><br>
</body>
</html>
