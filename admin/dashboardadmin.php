<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="css/adminstyle.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<title>MEDI LANKA</title>
</head>
<body>

<!-- SIDEBAR -->
	<section id="sidebar">
		<h3 class="brand">
			<img class="bx " src="img/Logo/logo1.png" style="width:25px;">
			<span class="text" style="margin-left:5px;">MEDI LANKA</span>
		</h3>
		<ul class="side-menu top">
			<li class="active">
				<a href="#">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-user' ></i>
					<span class="text">Manage Doctors</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-plus-medical' ></i>
					<span class="text">patient Management</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bx-user-pin' ></i>
					<span class="text">Admin Management</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Feedback</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">8</span>
			</a>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<br>
	    <div class="embed-responsive embed-responsive-16by9">
	    	<iframe src="dashhome.php" name="myFrame" class="embed-responsive-item" ></iframe>
	    </div>
		</section>
	    <?php include('footer.php') ?>
<script src="js/adminscript.js"></script>
</body>
</html>