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
	<style type="text/css">
		.register i{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 1s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        .registerone i{
            margin-top: 15%;
            margin-bottom: 5%;
            width: 25%;
            -webkit-animation: mover 2s infinite  alternate;
            animation: mover 2s infinite  alternate;
        }
        @-webkit-keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
        @keyframes mover {
            0% { transform: translateY(0); }
            100% { transform: translateY(-20px); }
        }
	</style>
</head>
<body background="img/Loging/back2.jpg">

<?php

	if(isset($_POST['login'])){
		$email=$_POST['email'];
		$pass=$_POST['pass'];
	}

	if(isset($_POST['login'])){
		$email = $_POST["email"];
		$sql="SELECT password FROM patient WHERE Email=\"".$email."\";";
		$s="SELECT password FROM admin WHERE Uname=\"".$email."\";";
		if($q=mysqli_query($conn,$s)){
	 		$row=mysqli_fetch_array($q);
	 		//$verify = password_verify($_POST['pass'],$row['password']);
			if ($_POST['pass']==$row['password']) {
				$_SESSION['uname']=$email;
				header("location:admin/dashboard.php");
			}
	 	}
	 	if($sqll=mysqli_query($conn,$sql)){
	 		$row=mysqli_fetch_array($sqll);
	 		$verify = password_verify($_POST['pass'],$row['password']);
			if ($verify) {
     		 	if(isset($_POST['remember'])){
					setcookie('email',$email,time()+60*60*7);
					setcookie('password',$pass,time()+60*60*7);
				}
				//session_start();
				$sql="SELECT uname FROM patient WHERE Email=\"".$email."\";";
				$q=mysqli_query($conn,$sql);
	 			$row=mysqli_fetch_array($q);
				$_SESSION['email']=$row['uname'];
				$_SESSION['status']=1;
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
			$sql="SELECT Id FROM patient WHERE Email='".$email."' ";
			$result=mysqli_query($conn,$sql);
			$rows = mysqli_num_rows($result);
            if ($rows > 0) {
		 		while($row=mysqli_fetch_array($result)){
					$_SESSION['uid']=$row['Id'];
		 		}
			}
	 	}
	

?>
<?php include 'navigationbar.php'; ?>						
<div class="container">
	<div class="d-flex justify-content-center h-100 ">
		<div class="card bg-info border-success">
			<div class="card-header">
			<div class="row d-flex text-uppercase">
				<img src="img/Logo/logo1.png" class="logo-nav float-right navbar-brand bg-info" >
				<h3>Sign In</h3>
			</div>

				<div class="d-flex justify-content-end social_icon">
					<span class="register"><i class="fab fa-facebook-square text-light"></i></span>
					<span class="registerone"><i class="fab fa-google-plus-square text-light"></i></span>
					<span class="register"><i class="fab fa-twitter-square text-light"></i></span>
				</div>
			</div>
			<div class="card-body bg-primary">
				<form method="post" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="E-mail" id="email" name="email">
						
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
						<input type="submit" name="login" value="Login" class="btn float-right login_btn bg-success border text-white font-weight-bold">
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
	if(isset($_COOKIE['email']) and isset($_COOKIE['password'])){
		$email=$_COOKIE['email'];
		$pass=$_COOKIE['password'];
		echo "<script>
			document.getElementById('email').value='$email';
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