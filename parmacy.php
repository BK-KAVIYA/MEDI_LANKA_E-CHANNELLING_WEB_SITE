
<!DOCTYPE html>
<html>
<head>
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
<br><br>
    <div class="container bg-info">
      <div class="row">
        <div class="col-sm-6 p-box">
          <form action="/action_page.php">
		  
        		  <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" placeholder="Enter name" id="name">
                    </div>
        			
        			<div class="form-group">
                      <label for="address">Address:</label>
                      <textarea class="form-control" id="address" rows="1"> Enter address </textarea>
              </div>
        		  
              <div class="form-group">
                   <label for="email">Email Address:</label>
                   <input type="email" class="form-control" placeholder="Enter email" id="email">
              </div>
        			
              <div class="form-group">
                  <label for="contact">Contact Number:</label>
                  <input type="text" class="form-control" placeholder="Enter contact number" id="contact">
              </div>
        			
        			<div class="form-group">
                      <label for="pwd">Ricipt Image</label>
                <input type="file" class="form-control" placeholder="Choose the image" id="img">
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="col-sm-4 l-box ml-5 mt-5 align-content-center">
          <h2>At first select your recipt image and Enter the Email then click submit</h2>
          <img class="cover" src="img/pic1/cover.jpg">
        </div>
      </div>
<!---- image ---------->
      <div class="row">
        <div class="col-sm-3 m-box">

            <img src="img/pic1/paracetamol.jpg" alt="" class="img-fluid">

            <h4>PARACETAMOL 500MG</h4>
            <p>RS. 147</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/aspirin1.jpg" alt="" class="img-fluid">

            <h4>ASPIRIN TAB DR 150MG</h4>
            <p>RS. 253</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/amoxycillin.jpg" alt="" class="img-fluid">

            <h4>AMOXYCILLIN 250MG</h4>
            <p>RS. 450</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/benzylpenicillin.jpg" alt="" class="img-fluid">

            <h4>PENICILLIN 600MG</h4>
            <p>RS. 138</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/ibuprofen.jpg" alt="" class="img-fluid">

            <h4>IBUPROFEN TAB 400MG</h4>
            <p>RS. 334</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/losartan.jpg" alt="" class="img-fluid">

            <h4>LOSARTAN 50MG</h4>
            <p>RS. 230</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/vermox.jpg" alt="" class="img-fluid">

            <h4>MEBENDAZOLE 500MG</h4>
            <p>RS. 600</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
        <div class="col-sm-3 m-box">

            <img src="img/pic1/domperidone.jpg" alt="" class="img-fluid">

            <h4>DOMPERIDONE ORAL</h4>
            <p>RS. 700</p>
            <a href="medinfo.html" class="btn btn-info">Read More..</a>
            <a href="#" class="btn btn-info">Add to Cart</a>

        </div>
      </div>
    </div>
    <div style="height: 300px;">
      <?php include 'footer.php'; ?>
    </div>



    <style media="screen">
      body{
        height: 100vh;
        background-color: #0d3f61;
      }
      .p-box{
        margin: 10px;
        padding: 10px;
        justify-content: center;
        color: white;
      }
      .m-box{
        border: 2px solid aqua;
        border-radius: 14px;
        text-align: center;
        padding: 5px;
      }
      .l-box{
        margin: 5px;
        padding: 5px;

      }
      .cover{
        width: 450px;
        height: 260px;
        border-radius: 20px;
      }
	  h2,h4{
		  color: #FFF;
		  
	  }

	  
    </style>
    

  </body>
</html>
