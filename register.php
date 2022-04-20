<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>MEDI LANKA</title>
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/font.css">

	<!-- form Style Css -->
    <link rel="stylesheet" href="css/regstyle.css"/>
     <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popup.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	<!-- validate -->
	<style>
         .error {color: #FF0000;}
    </style>
</head>
<?php include 'navigationbar.php'; ?>
<body class="form-v6">

<?php
// define variables and set to empty values
$nameErr = $emailErr = $AddressErr = $TelephoneErr = $passwordErr = $confirmpasswordErr =   "";
$name = $email = $Address = $Telephone =  $password = $confirmpassword = "";

//Name validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["full-name"])) {
	   $nameErr = "Name is required";
	}else {
	   $name = test_input($_POST["full-name"]);

	   $name = $_REQUEST["full-name"];
	   if(!preg_match("/^[a-zA-Z\s]*$/",$name)){
		   $nameErr = "only letters allowed";
	   }
	}
}

//email validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["your-email"])){
		$emailErr = "Email is required";
}else {
	$email = test_input($_POST["your-email"]);
	
	// check if e-mail address is well-formed
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	   $emailErr = "Invalid email format"; 
	}
 }
}

//address validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["Address"])){
		$AddressErr = "Enter your address";
	}
	else{
		$Address = test_input($_POST["Address"]);

		$address = $_REQUEST["Address"];
		if(!preg_match("/[a-zA-Z0-9\-\\,.]+$/",$address)){
			$AddressErr = "only letters and numbers allowed";
		}
	
	}
}


//telephone validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["Telephone"])){
		$TelephoneErr = "Enter your number";
	}
	else{
		$Telephone = test_input($_POST["Telephone"]);

		$Telephone = $_REQUEST["Telephone"];
		if(!preg_match("/^[0-9]+$/",$Telephone)){
			$TelephoneErr = "only numbers allowed";

		}

	}
}

//password validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["password"])){
		$passwordErr = "Enter your password";
	}
	else{
		if(isset($_POST['password'])) {
		  $password = $_POST['password'];
		  $number = preg_match('@[0-9]@', $password);
		  $uppercase = preg_match('@[A-Z]@', $password);
		  $lowercase = preg_match('@[a-z]@', $password);
		  $specialChars = preg_match('@[^\w]@', $password);
		 
		  if(strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) {
			$passwordErr = "Password must be at least 8 characters in length and must contain at least one number, one upper case letter, one lower case letter and one special character.";
		  }
		}
	}
}

//re-enter password validate
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["confirm-password"])){
		$confirmpasswordErr = "re-enter your password";
	}
	else{
		$confirmpassword = test_input($_POST["confirm-password"]);
		if($confirmpassword != $password){
			$confirmpasswordErr = "Your password is not match";
		}
	}		
}


function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
 }
?>
	<div class="page-content">
		<div class="form-v6-content">
			<div class="form-left">
				<img src="img/sample.png" alt="form">
			</div>
			<form class="form-detail" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<h2>Register Form</h2>
				<?php

					if(isset($_POST['register'])){ 
						if(($nameErr or $emailErr or $AddressErr or $TelephoneErr or $passwordErr or $confirmpasswordErr)==""){
							$pwd=password_hash($password, 
          						PASSWORD_DEFAULT);

							$sql = "INSERT INTO patient(Uname,Email,Address,Telephone,Password)
							VALUES('{$name}','{$email}','{$Address}','{$Telephone}','{$pwd}')";
							if(mysqli_query($conn,$sql)){
								echo  "<script type=\"text/javascript\">
										Swal.fire({
						  				title: '<strong>SUCCESSFULLY <u>register!!</u></strong>',
									  icon: 'success',
									  html:
									    'Please ' + '<a href=\"login.php\">click hear</a>' + ' to ' + '<b>login</b>', 
									     
									  showCloseButton: true,
									  showCancelButton: false,
									  focusConfirm: false,
									  confirmButtonText:
									    '<i class=\"fa fa-thumbs-up\"></i> Great!',
									  confirmButtonAriaLabel: 'Thumbs up, great!',
									  cancelButtonText:
									    '<i class=\"fa fa-thumbs-down\"></i>',
									  cancelButtonAriaLabel: 'Thumbs down'
								})
									</script>";
								
							}else{
								echo  "<script type=\"text/javascript\">
									Swal.fire({
									  icon: 'error',
									  title: 'Oops...',
									  text: 'Something went wrong!',
									  footer: 'Please enter the details according to the requerment!!'
									})
								</script>";
								
							}
						
					}
				}
	
				?>
				<div class="form-row">
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name">
					<span class = "error">* <?php echo $nameErr;?></span>
				</div>
				<div class="form-row">
					<input type="text" name="your-email" id="your-email" class="input-text" placeholder="Email Address">
					<span class = "error">* <?php echo $emailErr;?></span>
				</div>
				<div class="form-row">
					<input type="text" name="Address" id="full-name" class="input-text" placeholder="Address">
					<span class = "error">* <?php echo $AddressErr;?></span>
				</div>
				<div class="form-row">
					<input type="text" name="Telephone" id="full-name" class="input-text" placeholder="Telephone">
					<span class = "error">* <?php echo $TelephoneErr;?></span>
				</div>
				<div class="form-row">
					<input type="password" name="password" id="password" class="input-text" placeholder="Password">
					<span class = "error">* <?php echo $passwordErr;?></span>
				</div>
				<div class="form-row">
					<input type="password" name="confirm-password" id="confirm-password" class="input-text" placeholder="Confirm Password">
					<span class = "error">* <?php echo $confirmpasswordErr;?></span>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
				
			</form>
			
		</div>
	</div>
</body>
</html>
<?php mysqli_close($conn);?>