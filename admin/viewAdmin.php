<?php
include('db.php');

session_start();
//$uid=$_SESSION['sid'];


?>
<!DOCTYPE html>
<html>
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
        <div  >
            <?php include('navbar/navigationbarAdmin.php') ?>
        </div>
        <br><br>
        <div >
            <hr>
            <br>

            <div class="ml-4 mr-2">
                <div>   <div class="bg-primary text-light">
                            <h3 style="text-align: center">Medi Lanka Web Site Admin List</h3>
                        </div>
                        <br>

                    <?php
                    $sql = "SELECT * FROM admin";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        ?>
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">User name</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">NIC</th>
                                    <th scope="col">Contact No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["Uname"]; ?></th>
                                        <td><?php echo $row["adminName"]; ?></td>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["NIC"]; ?></td>
                                        <td><?php echo $row["telNo"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td>
                                            <a href="#" type="button" class="btn btn-danger btn-sm">Delete</a>
                                        </td>

                                    </tr>
                                </tbody>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }

                        mysqli_close($conn);
                        ?>
                    </table>                  
                </div>
            </div>
        </div>
        <div class="p-3">
            <br><br>
            <img style="border:none;width: 100%;" src="img/Admin/addadmin1.png">
        </div>
    </div>
</body>
</html>
