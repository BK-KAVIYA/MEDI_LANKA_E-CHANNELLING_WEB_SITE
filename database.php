<?php
	$host="localhost:3306";
	$user="root";
	$password="";

	$conn=mysqli_connect($host,$user,$password);
	if(!$conn){
		die("Connection failed".mysqli_connect_error());
	}else{
		echo "Connection successfull<br>";
	}

	$database="CREATE DATABASE echannelling1;";
	if(mysqli_query($conn,$database)){
		echo "Database create succussfully!!<br>";
	}else{
		echo "Database creating error".mysqli_error($conn);
	}

	$use="USE echannelling1;";
	if(mysqli_query($conn,$use)){
		echo "Use database echannelling<br>";
	}else{
		echo "Database access error ".mysqli_error($conn);
	}


	//mysql create table

	$sql="CREATE TABLE  Top_doctor_time_table (
		Doctor_id CHAR (5),
		Doctor_name VARCHAR(30),
		Date_time VARCHAR (40),
		PRIMARY KEY (Doctor_id));";
	if(mysqli_query($conn,$sql)){
		echo "Top_doctor_time_table table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}

	//add data to the database
	$sql="INSERT INTO Top_doctor_time_table (Doctor_id,Doctor_name,Date_time)
	VALUES 
	('D100','Dr R.W. Hemantha','Monday 4.00 pm - 8.00 pm'),
	('D200','Dr B.A.S.P. Somaweera','Wednesday 4.00 pm - 8.00 pm'),
	('D300','Dr M. Gunawardena','Friday 4.00 pm - 8.00 pm'),
	('D400','Dr B.G.N. Rathnasena','Monday 4.00 pm - 8.00 pm'),
	('D500','Prof Ishan De Zoysa','Saturday 2.00 pm - 6.00 pm'),
	('D600','Dr M.B.A.P. De Silva','Thursday 8.00 am - 2.00 pm'),
	('D700','Dr R.B.V. Rathnamala','Monday 8.00 am - 12.00 pm'),
	('D800','Dr G.C.A.U. Pitabedige','Tuesday 8.00 am - 12.00 pm');";

	if(mysqli_query($conn,$sql)){
		echo "Top_doctor_time_table data are add to the table<br>";
	}else{
		echo "Data ensertion error ".mysqli_error($conn);
	}

	$sql="CREATE TABLE  Channel_doctor (
	Channel_id CHAR (5),
	Name VARCHAR(30),
	Email VARCHAR (30),
	Tel_number VARCHAR(15),
	Specialization VARCHAR(30),
	Date DATE,
	PRIMARY KEY (Channel_id));";
	
	if(mysqli_query($conn,$sql)){
		echo "Channel_doctor table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}


	$sql="CREATE TABLE patient(
    Uname VARCHAR(50),
    Email VARCHAR(50),
    Address VARCHAR(100),
    Telephone INT,
    Password VARCHAR(40),
      PRIMARY KEY (Uname));";
    if(mysqli_query($conn,$sql)){
		echo "patient table create<br>";
	}else{
		echo "patient creation error ".mysqli_error($conn);
	}

	mysqli_close($conn);
?>