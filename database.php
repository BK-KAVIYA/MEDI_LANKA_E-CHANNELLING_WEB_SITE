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

	//create table top doctors time table

	$sql="CREATE TABLE  Top_doctor_time_table (
		Doctor_id INT,
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
	('1','Dr R.W. Hemantha','Monday 4.00 pm - 8.00 pm'),
	('2','Dr B.A.S.P. Somaweera','Wednesday 4.00 pm - 8.00 pm'),
	('3','Dr M. Gunawardena','Friday 4.00 pm - 8.00 pm'),
	('4','Dr B.G.N. Rathnasena','Monday 4.00 pm - 8.00 pm'),
	('5','Prof Ishan De Zoysa','Saturday 2.00 pm - 6.00 pm'),
	('6','Dr M.B.A.P. De Silva','Thursday 8.00 am - 2.00 pm'),
	('7','Dr R.B.V. Rathnamala','Monday 8.00 am - 12.00 pm'),
	('8','Dr G.C.A.U. Pitabedige','Tuesday 8.00 am - 12.00 pm');";

	if(mysqli_query($conn,$sql)){
		echo "Top_doctor_time_table data are add to the table<br>";
	}else{
		echo "Data ensertion error ".mysqli_error($conn);
	}
	//create table channel_doctor

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

//create table patient

	$sql="CREATE TABLE patient(
		Id INT NOT NULL AUTO_INCREMENT,
    Uname VARCHAR(50),
    Email VARCHAR(50),
    Address VARCHAR(100),
    Telephone INT,
    Password VARCHAR(80),
     PRIMARY KEY (Id));";
   if(mysqli_query($conn,$sql)){
		echo "patient table create<br>";
	}else{
		echo "patient creation error ".mysqli_error($conn);
	}



	//create table doctor 

	$sql="CREATE TABLE doctor (
  id varchar(100) NOT NULL,
  docName varchar(200) DEFAULT NULL,
  address varchar(200) DEFAULT NULL,
  speciality int(20) DEFAULT NULL,
  NIC varchar(12) DEFAULT NULL,
  telNo int(10) DEFAULT NULL,
  hospital varchar(100) NOT NULL,
  email varchar(50) NOT NULL,
  telHome int(10) NOT NULL,
  channelRoomNo int(11) NOT NULL,
  priceForChannel int(11) NOT NULL,
  PRIMARY KEY (id));";

	if(mysqli_query($conn,$sql)){
		echo "Doctor_table table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}

	$sql="INSERT INTO `doctor` (`id`, `docName`, `address`, `speciality`, `NIC`, `telNo`, `hospital`, `email`, `telHome`, `channelRoomNo`, `priceForChannel`) VALUES
('1', 'Dr. Dilshan Kavinda', 'No 25 Galle road, Matara.', 1, '9926700657v', 714215221, 'Matara Hospital,Matara', 'dilshan@gmail.com', 766477051, 22, 1800),
('3', 'Dr. A.S.K.Banagala', 'Thalalla north, Kekanadura, Matara.', 2, '856521485v', 925488552, 'Kotawila Central Hospital', 'bsnsgsls45@gmail.com', 415214852, 34, 2200),
('4', 'Dr.NADEENA JAYASURIYA', 'Minuwangoda,Colombo', 2, '632547521v', 713205874, 'Asiri pvt Ltd', 'nadeena34@gmail.com', 115547852, 11, 3000),
('5', 'Dr. KANISHKA DISSANAYAKE', 'Baddegama, Galle.', 3, '992670657V', 412264366, 'Karapitiya General hospital', 'dilshankavinda371@gmail.com', 412264366, 34, 2000);";

if(mysqli_query($conn,$sql)){
		echo "Doctor_table data are add to the table<br>";
	}else{
		echo "Data insertion error ".mysqli_error($conn);
	}

	//create table admin 

	$sql="CREATE TABLE IF NOT EXISTS `admin` (
  `Uname` varchar(20) NOT NULL,
  `adminName` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `NIC` varchar(10) NOT NULL,
  `telNo` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`NIC`),
  UNIQUE KEY `userId` (`Uname`),
  UNIQUE KEY `userId_2` (`Uname`));";

	if(mysqli_query($conn,$sql)){
		echo "Admin table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}

	$sql="INSERT INTO `admin` (`Uname`, `adminName`, `address`, `NIC`, `telNo`, `email`, `password`) VALUES
	('KAVIYA', 'Baladurage Kavinda', 'Kekanadura, Matara', '992670657V', 788311883, 'dilshankavinda371@gmail.com', 'Kavi@@99');";

if(mysqli_query($conn,$sql)){
		echo "Admin data are add to the table<br>";
	}else{
		echo "Data insertion error ".mysqli_error($conn);
	}

	//create table booking_recipt 

	$sql="CREATE TABLE IF NOT EXISTS `booking_recipt` (
  `refNo` int(200) NOT NULL AUTO_INCREMENT,
  `Full Name` varchar(255) NOT NULL,
  `Phone` int(10) NOT NULL,
  `NIC` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`refNo`));";

	if(mysqli_query($conn,$sql)){
		echo "booking_recipt table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}

		//create table booking_recipt 

	$sql="CREATE TABLE IF NOT EXISTS `channel_doctor` (
  `Channel_id` char(5) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Tel_number` varchar(15) DEFAULT NULL,
  `Specialization` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  PRIMARY KEY (`Channel_id`));";

	if(mysqli_query($conn,$sql)){
		echo "channel_doctor table create<br>";
	}else{
		echo "Table creation error ".mysqli_error($conn);
	}




		mysqli_close($conn);
?>