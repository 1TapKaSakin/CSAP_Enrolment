<?php

    if(isset($_POST['enroll'])){
        $FName = $_POST['FName'];
        $LName = $_POST['LName'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "csap";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if(!$con){
        die("Connection Failed!");
    }

    $sql = "INSERT INTO studentsinfo (Fname, Lname, gender, Birthday) VALUES ('$FName', '$LName', '$gender', '$birthday')";

    $rs = mysqli_query($con, $sql);

    if($rs){
        echo'<script>alert("You are enrolled. We will message you for the schedule on enrollment.")</script>';
        header("Location: ../Babythesis/Enrollment.html");
    }
        
?>