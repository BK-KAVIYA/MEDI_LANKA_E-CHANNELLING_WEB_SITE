<?php
include('db.php');
session_start();
$submit_id = $_REQUEST['id'];

?>
<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>| MEDI LANKA |</title>
        
        <!-- CSS -->
        <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/doctorPageStyle.css">

        <!-- JS-->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <br><br>
        <?php include('navbar/navigationbardoc.php') ?>
        <div class="container">
            <hr>
            <br>
                <div>
                    <h3 class="text text-primary" style="text-align: center">Medi Lanka Doctors List</h3><br>

                    <?php
                    $sql = "SELECT * FROM doctor WHERE id=".$submit_id.";";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        ?>
                        <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <table class="table col-lg-8">
                            <thead class="table-info">
                                <tr>
                                    <th scope="col">Name</th>
                                    <td><?php echo $row["docName"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Address</th>
                                    <td><?php echo $row["address"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Specialty</th>
                                    <td><?php echo $row["speciality"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">NIC</th>
                                    <td><?php echo $row["NIC"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Contact No</th>
                                    <td><?php echo $row["telNo"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Base Hospital</th>
                                    <td><?php echo $row["hospital"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Email</th>
                                    <td><?php echo $row["email"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Room No</th>
                                    <td><?php echo $row["channelRoomNo"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Charges</th>
                                    <td>RS : <?php echo $row["priceForChannel"]; ?></td>
                                </tr>
                                <tr>
                                    <th scope="col">Confirmation</th>
                                    <td>
                                        <form action="confirmdelete.php?id=<?php echo $submit_id ?>" method="POST"> 
                                             <button class="btn btn-primary" type="submit" name="delete">Confirm</button>
                                        </form>
                                    </td>
                                </tr>
                            </thead>
                            
                            <?php
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                    </table>                  
                </div>
                <div class="col-md-4 col-lg-4">
                    <img id="dctrimg" src="img/editRemv.png">
                </div>
     </div>
</body>
</html>
