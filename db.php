<?php
	$host="localhost:3306";
	$user="root";
	$password="";
	$dbname = "echannelling1";

	$conn=mysqli_connect($host,$user,$password,$dbname);
	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}else{
		//echo "Connection successfull<br>";
	}
?>