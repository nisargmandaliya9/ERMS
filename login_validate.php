<?php 
    session_start();

      if(isset($_POST['login']))
        {
          $email=$_POST['useremail'];
          $password=$_POST['userpswd'];

          // Checking data empty or not
          if ($email != "" AND $password != "") {

              // Start performing query using db [INSERT]

              // 1. Connecting Project to Database
              $conn = mysqli_connect("localhost:8883", "root", "", "erms");

              // Checking Connectiong working or not
              if (!$conn) {
                  die("Error in Connecting DB" . mysqli_connect_error());
              }

              $selectUser = "SELECT id FROM users WHERE `user_email`='$email' AND `user_pass`='$password'";
              
              $rows = mysqli_query($conn, $selectUser);

              $arr = mysqli_fetch_array($rows);

              if($arr > 0) {

                  $_SESSION['uid'] = $ret['id'];

      ?>
              <script>
                  alert("Logged in successfully!");
                  window.location.href  = "user_profile.php";
              </script>
      <?php
              }
              else{
      ?>
              <script>
                  alert("Invalid email or password.");
                  window.location.href = "login.php";
              </script>
      <?php
              }
        } 
      }
?>
