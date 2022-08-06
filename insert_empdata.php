<?php
// Check Submit Button click or not
if (isset($_POST['submit'])) {
    // Get all Post data in to variables
    $fname = $_POST['empfname'];
    $lname = $_POST['emplname'];
    $email = $_POST['empemail'];
    $mobile = $_POST['empmobile'];
    $address = $_POST['empaddress'];
    $city = $_POST['empcity'];
    $state = $_POST['empstate'];
    $date = $_POST['empdate'];
    $jobtype = $_POST['empjob'];
    $salary = $_POST['empsalary'];
    // Checking data empty or not
    if ($fname != "" && $lname != "" &&  $email != "" && $mobile != ""  && $address != "" && $city != "" && 
        $state != "" && $date != "" && $jobtype != "" && $salary != "") {

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost:8883", "root", "", "erms");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }
  
        // Prepare INSERT Query
        $insertQuery = "INSERT INTO `empdetails`(`fname`, `lname`, `email`,`mobile`,`address`,`city`,`state`,`date`,`jobtype`,`salary`)  VALUES ('$fname','$lname','$email','$mobile','$address','$city','$state','$date','$jobtype','$salary')";

        // Execute INSERT Query
        $result = mysqli_query($conn, $insertQuery);

        if ($result) {
    ?>
            <script>
                alert("Data Inserted!");
                window.location.href = "add_empdata.php";
            </script>
    <?php

        } else {
            echo "Error" . mysqli_error($conn);
        }

        } else {
    ?>
        <script>
            alert("All field are empty....!!");
        </script>
    <?php
        }
    
    } else {
        header("Location: add_empdata.php");
    }

?>