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

        <div  >
            <?php include('navbar/navigationbardoc.php') ?>
        </div>
        <br><br>
        <div >
            <hr>
            <br>

            <div class="ml-4 mr-2">
                <div >
                        <h3 class="text text-primary" style="text-align: center">Medi Lanka Doctors List</h3><br>

                    <?php
                    $sql = "SELECT * FROM doctor";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        ?>
                        <table class="table">
                            <thead class="table-primary">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Specialty</th>
                                    <th scope="col">NIC</th>
                                    <th scope="col">Contact No</th>
                                    <th scope="col">Base Hospital</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Room No</th>
                                    <th scope="col">Fee</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row["docName"]; ?></th>
                                        <td><?php echo $row["address"]; ?></td>
                                        <td><?php echo $row["speciality"]; ?></td>
                                        <td><?php echo $row["NIC"]; ?></td>
                                        <td><?php echo $row["telNo"]; ?></td>
                                        <td><?php echo $row["hospital"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["channelRoomNo"]; ?></td>
                                        <td><?php echo $row["priceForChannel"]; ?></td>
                                        <td>
                                            <a href="editDoctor.php?id=<?php echo $row['id'] ?>"type="button" class="btn btn-success btn-sm">Edit</a>
                                            <a href="deletDoctor.php?id=<?php echo $row['id'] ?>" type="button" class="btn btn-danger btn-sm">Delete</a>
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

    </div>
</body>
</html>
