<?php
include("db.php");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

	<title>MEDI LANKA</title>
	<style type="text/css">
		@media print{
		body *:not(#mysection):not(#mysection *){
			visibility: hidden;
		}
		#mysection{
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
		}
		}
		body{
			background:#eee;
			margin-top:20px;
		}
		.text-danger strong {
		     color: #9f181c;
		}
		.receipt-main {
			background: #ffffff none repeat scroll 0 0;
			border-bottom: 12px solid #0388fc;
			border-top: 12px solid #0388fc;
			margin-top: 50px;
			margin-bottom: 50px;
			padding: 40px 30px !important;
			position: relative;
			box-shadow: 0 1px 21px #acacac;
			color: #333333;
			font-family: open sans;
		}
		.receipt-main p {
			color: #333333;
			font-family: open sans;
			line-height: 1.42857;
		}
		.receipt-footer h1 {
			font-size: 15px;
			font-weight: 400 !important;
			margin: 0 !important;
		}
		.receipt-main::after {
			background: #414143 none repeat scroll 0 0;
			content: "";
			height: 5px;
			left: 0;
			position: absolute;
			right: 0;
			top: -13px;
		}
		.receipt-main thead {
			background: #414143 none repeat scroll 0 0;
		}
		.receipt-main thead th {
			color:#fff;
		}
		.receipt-right h5 {
			font-size: 16px;
			font-weight: bold;
			margin: 0 0 7px 0;
		}
		.receipt-right p {
			font-size: 12px;
			margin: 0px;
		}
		.receipt-right p i {
			text-align: center;
			width: 18px;
		}
		.receipt-main td {
			padding: 9px 20px !important;
		}
		.receipt-main th {
			padding: 13px 20px !important;
		}
		.receipt-main td {
			font-size: 13px;
			font-weight: initial !important;
		}
		.receipt-main td p:last-child {
			margin: 0;
			padding: 0;
		}	
		.receipt-main td h2 {
			font-size: 20px;
			font-weight: 900;
			margin: 0;
			text-transform: uppercase;
		}
		.receipt-header-mid .receipt-left h1 {
			font-weight: 100;
			margin: 34px 0 0;
			text-align: right;
			text-transform: uppercase;
		}
		.receipt-header-mid {
			margin: 24px 0;
			overflow: hidden;
		}
		
		#container {
			background-color: #dcdcdc;
		}
	</style>

</head>
<body>
<section id="mysection"> 
<?php
            $sql="select * from patient WHERE id='".$_SESSION['uid']."' ";
            $result = mysqli_query($conn, $sql);
            $rows = mysqli_num_rows($result);
            if ($rows > 0) {

                while($row=mysqli_fetch_array($result)){
                    $name = $row['Uname'];
                    $address = $row['Address'];
                    $Role =  "patient";
                    $phone =$row['Telephone'];
                    $Email =$row['Email'];
                }
             }

 ?>

<div class="col-md-12">
  
 <div class="row">
        <div class="receipt-main col-xs-10 col-sm-10 col-md-10 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" style="margin-left:auto;margin-right: auto;">

            <div class="row">
    			<div class="receipt-header">
					<div class="col-xs-6 col-sm-6 col-md-6">
						<div class="receipt-left">
							<img class="img-responsive" alt="iamgurdeeposahan" src="../img/avatar.png" style="width: 71px; border-radius: 43px;">
						</div>
					</div>
					<div class="receipt-header receipt-header-mid">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
							<h5><?php echo $name; ?> </h5>
							<p><b>Mobile :</b> <?php echo $phone; ?></p>
							<p><b>Email :</b><?php echo $Email; ?></p>
							<p><b>Address :</b> <?php echo $address; ?></p>
						</div>
					</div>
					<div class="col-xs-4 col-sm-4 col-md-12">
						<div class="justify-content-end">
							<h3>INVOICE # 102</h3>
						</div>
					</div>
				</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-8 d-flex justify-content-end">
						<div >
							<img src="img/Logo/logo1.png" style="width:80px">
							<h5>MEDI LANKA</h5>
							<p>041-264366<i class="fa fa-phone"></i></p>
							<p>medilanka@gmail.com <i class="fa fa-envelope-o"></i></p>
							<p>Matara, Sri Lanka. <i class="fa fa-location-arrow"></i></p>
						</div>
					</div>
            </div>
			
            <div>
                <table class="table table-bordered">
                    <thead class="bg-primary">
                        <tr>
                            <th>Description</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php

                    		$sum=0.00;
                    		$hos=800;
                    		$book=99;
                    		$dis=0.05;
					        $uid=$_SESSION['uid'];

					        $sql="SELECT * FROM payedpatients WHERE Uid='$uid';";
					        $result = mysqli_query($conn,$sql);
					        $rows = mysqli_num_rows($result);
					        if($rows>0){
					        while ($row = mysqli_fetch_array($result)){
					        $name =$row['patientName'];
					        $refid = $row['refNo'];
					        $appoinmentDate =$row['dateBooked'];
					        $doctorCharges =$row['amount'];
					        $docname =$row['doctorName']; 
					        $date=$row['dateBooked']; ?>
                        <tr>
                            <td class="col-md-9">Payment for <?php echo $date; ?></td>
                            <td class="col-md-3">RS : <?php $sum=+$sum+$doctorCharges; echo  $doctorCharges; ?>/-</td>
                        </tr>
                        <tr>
                            <td class="col-md-9">VAT(tax)</td>
                            <td class="col-md-3">RS : <?php $sum=$sum+$doctorCharges*(15/100); echo $doctorCharges*(15/100); ?>/-</td>
                        </tr>
                        <?php 
                        		}
                        	}		
                        ?>
                        <tr>
                            <td class="text-right">
                            <p>
                                <strong>Total Amount: </strong>
                            </p>
                            <p>
                                <strong>Hospital Charges: </strong>
                            </p>
							<p>
                                <strong>Booking Charges: </strong>
                            </p>
							<p>
                                <strong>Balance Due: </strong>
                            </p>
							</td>
                            <td>
                            <p>
                                <strong>RS :<?php echo number_format((float)$sum, 2, '.', ''); ?>/-</strong>
                            </p>
                            <p>
                                <strong>RS: 800.00/-</strong>
                            </p>
							<p>
                                <strong>RS : 99.00/-</strong>
                            </p>
							<p>
                                <strong><?php $sub=$sum*$dis; echo number_format((float)$sub, 2, '.', ''); ?>/-</strong>
                            </p>
							</td>
                        </tr>
                        <tr>
                           
                            <td class="text-right"><h2><strong>Total: </strong></h2></td>
                            <td class="text-left text-danger"><h2><strong>RS : <?php $tot=($sum+$hos+$book)-$sub; echo number_format((float)$tot, 2, '.', ''); ?>/-</strong></h2></td>
                        </tr>
                    </tbody>
                </table>
            </div>
			
			<div class="row">
				<div class="receipt-header receipt-header-mid receipt-footer">
					<div class="col-xs-8 col-sm-8 col-md-12 text-left">
						<div class="receipt-right">
							<p><b>Date :</b> <?php echo date('F j, Y, g:i:s A'); ?></p>
							<h5 style="color: rgb(140, 140, 140);">Thanks for Booking.!</h5>
						</div>
					</div>
				</div> 
				<div class="col-xs-4 col-sm-4 col-md-6 d-flex justify-content-end">
						<div>
							<img class="col-md-8 ml-5" src="img/banner/paid.png">
						</div>
					</div>
            </div>
        </div>    
	</div>
</div>
</section>

	<center><button class="btn btn-primary mb-5 " onclick="window.print()">Download</button></center>

</body>
</html>