<?php

    $queryInsertPayedPatients="
    INSERT INTO payedpatients( refNo, patientName, phone, nic, email, amount,dateBooked,doctorName) 
    VALUES('".$refid."','".$name."','".$phone."','".$nic."','".$email."','".$amount."','".$date."','".$doctorName."')";

    if(mysqli_query($conn, $queryInsertPayedPatients)){
        echo "Paymet  Complete";
    }
    else{
        echo "err";
    }

    $queryNew = "UPDATE time_shedule SET enable='0',bookedDate='".$dayBooked."' WHERE TNo='".$timeslotID."' ";
    if(mysqli_query($conn, $queryNew) AND ($approved==true)){
    //echo "Paymet  Complete";
    }
    else{
     // echo "Something Went Wrong.Paymet NOT Complete";
}
?>