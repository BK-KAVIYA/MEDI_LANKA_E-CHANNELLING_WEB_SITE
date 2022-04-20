<?php
include("db.php");
session_start();

if (isset($_POST['search'])) {

    $name = $_POST['name'];
    $spec = $_POST['spec'];
    $date = $_POST['date'];



    if($spec == "Mental"){
        $spec = 1;
    }
    else if($spec == "Dental"){
        $spec = 2;
    }
    else if($spec == "VOG"){
        $spec = 3;
    }



}
?>
<!DOCTYPE html>
<html>
  <head>

    <!-- css link -->

   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>E Channel</title>
  </head>
  <body>

    <?php include 'navigationbar.php'; ?>
    <br><br>
    <div class="w3-container">
    <br><br><br>
    <h2>Choose Your Doctor:</h2><p style="font-size: 18px">(for selected Month)</p>

        <?php

        $day =  substr($date,8,2);
        $month =  substr($date, 5,2);
        $year =  substr($date, 0,4);
        /*echo $year."<br>";
        echo $date;*/

      $query1 ="SELECT * FROM doctor_shedule INNER JOIN doctor ON doctor_shedule.doctorId=doctor.id WHERE( 
          ((doctor_shedule.day >= $day) AND
          (doctor.speciality = '$spec') ) OR
          ((doctor_shedule.sheduleType='Daily') AND (doctor.speciality = '$spec')) OR
          ((doctor.docName = '$name') AND (doctor_shedule.day >= $day))  
          )ORDER BY FIELD(doctor.docName, '$name') DESC, doctor.docName ASC,doctor_shedule.day ASC";
        $result_set1 = mysqli_query($conn, $query1);
        ?>
        <table class="w3-table-all">
            <thead>
            <tr class="bg-info">
                <th>Doctor Name</th>
                <th>Specialist on</th>
                <th>Shedule Type</th>
                <th>Date</th>
                <th>Option</th>
            </tr>
            </thead>
            <?php

            if(mysqli_num_rows($result_set1)>0){
                while($record1 = mysqli_fetch_assoc($result_set1)){
                    if($record1['speciality']==2){
                        $record1['speciality']= "Dental";
                    }
                    else if($record1['speciality']==1){
                        $record1['speciality']= "Mental";
                    }else if($record1['speciality']==3){
                         $record1['speciality']= "VOG";
                    }
                    ?>
                    <tr>
                        <td><?php echo $record1['docName'] ?></td>
                        <td><?php echo  $record1['speciality'] ?></td>
                        <td><?php echo $record1['sheduleType'] ?></td>
                        <td>
                        <?php if($record1['day']==NULL){

                            echo $date;
                        }
                        else{

                            echo $month."/".$record1['day']."/".$year;
                           echo "</td>";
                        }

                        ?>
                        <td><a href="doc_info.php?ID=<?php echo  $record1['id'];?>&Day=<?php
                            if($record1['day']==NULL){
                                echo $date;
                            }
                            else{
                                echo $month."/".$record1['day']."/".$year;
                            }
                            ?>

                            "><button class="w3-button w3-white border border-info w3-round-large" >Channel</button></td>
                    </tr>
                    <?php

                }}
                else{
                    echo "
                    
                    <tr>
                        <td colspan=\"4\">
                        NO RESULTS FOUND. PLEASE SEARTH ON ANOTHER DATE.
                        </td>
                    </tr>
        
                    ";

                }?>
        </table>

</div>
<br><br><br><br><br>
    <?php include 'footer.php'; ?>
  </body>
  <script type="text/javascript">
    var dateToday = new Date();
    document.write(dateToday);
  </script>
  </html>