<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--KAVINDA -->
   
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<!--Alert-->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body background="img/Loging/back.jpg">
<?php include 'navigationbar.php'; ?>

<?php

	if(isset($_POST['login'])){
		$uname=$_POST['uname'];
		$pass=$_POST['pass'];
	}

	if(isset($_POST['login'])){
		$uname = $_POST["uname"];
		$sql="SELECT password FROM patient WHERE Uname=\"".$uname."\";";
	 	if($sqll=mysqli_query($conn,$sql)){
	 		$row=mysqli_fetch_array($sqll);
	 		$verify = password_verify($_POST['pass'],$row['password']);
			if ($verify) {
     		 	if(isset($_POST['remember'])){
					setcookie('uname',$uname,time()+60*60*7);
					setcookie('password',$pass,time()+60*60*7);
				}
				//session_start();
				$_SESSION['uname']=$uname;
				header("location:dashboard.php");

 		 	}else{
      			echo  "<script type=\"text/javascript\">
							Swal.fire({
								icon: 'error',
								title: 'Invalid!',
								text: 'username or password!',	  
									})
						</script>";
			}
		}else{
			echo  "<script type=\"text/javascript\">
										Swal.fire({
						  				title: '<strong>Register!! <u>first</u></strong>',
									  icon: 'info',
									  html:
									    'Please ' + '<a href=\"register.php\">click hear</a>' + ' to ' + '<b>register</b>', 
									     
									  showCloseButton: true,
									  showCancelButton: false,
									  focusConfirm: false,
									  confirmButtonText:
									    '<i class=\"fa fa-thumbs-up\"></i> Ok!',
									  confirmButtonAriaLabel: 'Thumbs up, Ok!',
									  cancelButtonText:
									    '<i class=\"fa fa-thumbs-down\"></i>',
									  cancelButtonAriaLabel: 'Thumbs down'
								})
									</script>";;
		}
	}
	

?>
						
<div class="container">
	<div class="d-flex justify-content-center h-100 ">
		<div class="card bg-info">
			<div class="card-header">
			<div class="row d-flex text-uppercase">
				<img src="img/Logo/logo1.png" class="logo-nav float-right navbar-brand bg-info" >
				<h3>Sign In</h3>
			</div>

				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square text-light"></i></span>
					<span><i class="fab fa-google-plus-square text-light"></i></span>
					<span><i class="fab fa-twitter-square text-light"></i></span>
				</div>
			</div>
			<div class="card-body bg-primary">
				<form method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" id="uname" name="uname">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" id="password" name="pass">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox" name="remember">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" name="login" value="Login" class="btn float-right login_btn bg-info text-white font-weight-bold">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>

</div>
<?php
	if(isset($_COOKIE['uname']) and isset($_COOKIE['password'])){
		$uname=$_COOKIE['uname'];
		$pass=$_COOKIE['password'];
		echo "<script>
			document.getElementById('uname').value='$uname';
			document.getElementById('password').value='$pass';

		</script>";
	}
?>
<div style="height: 300px;">
	<?php include 'footer.php'; ?>
</div>

</body>
</html>
<?php mysqli_close($conn);?>