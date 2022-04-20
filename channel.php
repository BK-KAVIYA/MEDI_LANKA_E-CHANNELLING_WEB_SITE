 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- css link -->

 <link rel="stylesheet" href="css/bootstrap.min.css">
 <link rel="stylesheet" href="css/style.css">

 <!-- js -->
 <script src="js/jquery.min.js"></script>
 <script src="js/popper.min.js"></script>
 <script src="js/bootstrap.min.js"></script>

 <title>E Channel</title>
</head>
<body>

 <?php include 'navigationbar.php'; ?>

   <!-- form and calender -->
   <div class="container">
     <br><br>
     <div class="row box">
       <div class="col-sm-6 f-r-b">
         <h2>Channel a Doctor</h2><hr><br>
         <form action="/action_page.php">
           <div class="form-group">
             <label for="email">Email address:</label>
             <input type="email" class="form-control" placeholder="Enter email" id="email">
           </div>
           <div class="form-group">
             <label for="pwd">Name:</label>
             <input type="text" class="form-control" placeholder="Enter your Name" id="name">
           </div>
           <div class="form-group">
             <label for="sel1">Select list:</label>
             <select class="form-control" id="sel1">
               <option>Select a Doctor</option>
               <option>Doctor 01</option>
               <option>Doctor 02</option>
               <option>Doctor 03</option>
             </select>
           </div>
           <div class="form-group">
             <label for="pwd">Day and Number:</label>
             <input type="text" class="form-control" placeholder="Date And Number auto Genarate here" id="name">
           </div>

           <button type="submit" class="btn btn-primary">Submit</button>
         </form>
       </div>
       <br><br>
       <div class="col-sm-6">
         <h2>Today's Doctor's Time Table</h2><hr><br>
         <table class="table table-primary">
           <thead>
             <tr>
               <th>Doctor Name</th>
               <th>Date And Time</th>

             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Dr.A.S.K.Banagala</td>
               <td>Monday 4.00pm - 8.00pm</td>
             </tr>
             <tr>
               <td>Dr.ASHAN ABEYEWARDENE</td>
               <td>Wensday 4.00pm - 8.00pm</td>
             </tr>
             <tr>
               <td>Dr. DAMMIKE SILVA</td>
               <td>Friday 4.00pm - 8.00pm</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
     <br><br><hr class="hr">
     <div class="row">
       <div class="col-sm-12">
         <h2 style="color:white;"> Doctor's Time Table</h2><hr><br>
         <table class="table table-info">
           <thead>
             <tr>
               <th>Doctor Name</th>
               <th>Date And Time</th>
               <th>special</th>
               <th>Hospital</th>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td>Doctor 01</td>
               <td>Monday 4.00pm - 8.00pm</td>
               <td>Eye</td>
               <td>colombo</td>
             </tr>
             <tr>
               <td>Doctor 02</td>
               <td>Wensday 4.00pm - 8.00pm</td>
               <td>Dental</td>
               <td>colombo</td>
             </tr>
             <tr>
               <td>Doctor 03</td>
               <td>Friday 4.00pm - 8.00pm</td>
               <td>Eye</td>
               <td>colombo</td>
             </tr>
           </tbody>
         </table>
       </div>
     </div>
   </div>
    <?php include 'footer.php'; ?>
   <style media="screen">
     .hr{
       height: 5px;
       background-color: white;
     }
   </style>

   </body>
 </html>
