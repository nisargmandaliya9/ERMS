<?php
    session_start();
    $conn = mysqli_connect("localhost:8883", "root", "", "erms");

    if(isset($_POST['sbmt'])) {

        $cpassword = $_POST['currentpswd'];
        $newpassword = $_POST['newpswd'];
        $confirmpass = $_POST['confirmpswd'];

        $query = mysqli_query($conn,"SELECT id FROM `users` WHERE `user_pass`='$cpassword'");
        $row = mysqli_fetch_array($query);

    if($row > 0) {
        if ($newpassword == $confirmpass) {
            $changepass = "UPDATE `users` SET `user_pass`='$newpassword' WHERE `user_pass`='$cpassword'";
            $ret = mysqli_query($conn, $changepass);
?>       
        <script>
            alert("Your password successully changed");
            window.location.href = "login.php"; 
        </script>
<?php
        } else{
?>
        <script>
            alert("New password and Confirm password do not match");
            window.location.href = "change_userpswd.php"; 
        </script>
<?php
        }

    } else {
?>
        <script>
            alert("Enter valid current password");
            window.location.href = "change_userpswd.php";
        </script>
<?php
    }

    }

?>