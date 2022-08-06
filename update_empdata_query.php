<?php

if(isset($_POST['sbmt'])){

    echo $fname = $_POST['empfname'];
    echo $lname = $_POST['emplname'];
    echo $email = $_POST['empemail'];
    echo $mobile = $_POST['empmobile'];
    echo $jobtype = $_POST['empjob'];
    echo $salary = $_POST['empsalary'];


    // Checking data empty or not
    if ($fname != "" && $lname != "" && $email != "" && $mobile != "" && 
        $jobtype != "" && $salary != "") {

        // Start performing query using db [INSERT]

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost:8883", "root", "", "erms");

        // 2. Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connection.." . mysqli_connect_error());
        } else {

            // 3. prepare query
            $updateUser = "UPDATE `empdetails` SET `fname`='$fname',`lname`='$lname',`mobile`='$mobile',`jobtype`='$jobtype',`salary`='$salary' WHERE `email`='$email'";

            if(mysqli_query($conn, $updateUser)){

                ?>
                    <script>
                        alert("Data Updated successfully");
                        window.location.href="view_empdata.php";
                    </script>
                <?php

            }else{
                echo "Error in update data : ".mysqli_error($conn);
            }

        }
        
    }


}

?>