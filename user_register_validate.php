<?php
    // Check Submit Button click or not
    if (isset($_POST['rgstr'])) {

        // Get all Post data in to variables
        $fname = $_POST['userfname'];
        $lname = $_POST['userlname'];
        $email = $_POST['useremail'];
        $password = $_POST['userpswd'];
        $mobile = $_POST['usermobile'];

        // Checking data empty or not
        if ($fname != "" && $lname != "" && $email != "" && $password != "" && $mobile != "") {

        // 1. Connecting Project to Database
        $conn = mysqli_connect("localhost:8883", "root", "", "erms");

        // Checking Connectiong working or not
        if (!$conn) {
            die("Error in Connecting DB" . mysqli_connect_error());
        }

        $ret = mysqli_query($conn, "SELECT user_email FROM users WHERE user_email='$email'");

        $result = mysqli_fetch_array($ret);

        if($result > 0){
?>
        <script>
            alert("Email already registered"); 
            window.location.href = "user_register.php";
        </script>
<?php
        } else {
            $insertQuery = "INSERT INTO `users`(`f_name`, `l_name`, `user_email`, `user_pass`, `user_mob`) VALUES ('$fname','$lname','$email','$password','$mobile')";

            // Execute INSERT Query
            $res = mysqli_query($conn, $insertQuery);

            if ($res) {
?>
            <script>
                alert("New User Registered Successfully!");
                window.location.href = "user_register.php";
            </script>
        <?php 
            } else{
                echo "Error" . mysqli_error($conn);
            }
        }
    } else {
?>
        <script>
            alert("Something went wrong!!");
        </script>
<?php
    }
}

?>
