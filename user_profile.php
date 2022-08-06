<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Flexy lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Flexy admin lite design, Flexy admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Flexy Admin Lite is powerful and clean admin dashboard template, inpired from Bootstrap Framework">
    <meta name="robots" content="noindex,nofollow">
    <title>ERMS | User Profile</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">


        <?php include("include/header.php");  ?>
        
        <?php include("include/aside.php"); ?>

        <div class="page-wrapper">

            <div class="row justify-content-center">
                <div class="col-6 text-center">
                        <h1 class="mb-0 fw-bold">User Details</h1> 
                </div>
            </div>
        
            <div class="container-fluid">
                
                <div class="row justify-content-center">
                    <div class="col-6 col-md-9 m-4">
                    
                            <?php
                            // 1. Connecting Project to Database
                            $conn = mysqli_connect("localhost:8883", "root", "", "erms");

                            // 2. Checking Connectiong working or not
                            if (!$conn) {
                                die("Error in Connecting DB" . mysqli_connect_error());
                            } else {

                                // 3. SELECT query for user  
                                $userSelect = "SELECT * FROM `users`";

                                // 4. Execute query (select query) and store result in result    
                                $result = mysqli_query($conn, $userSelect);

                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                        <!--  execute loop with html -->
                                <form class="row g-3" action="change_userpswd.php" method="POST">

                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">First name</label>
                                        <input type="text" name="userfname" value="<?php echo $row['f_name']; ?>" class="form-control" id="validationDefault01" readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault02" class="form-label">Last name</label>
                                        <input type="text" name="userlname" value="<?php echo $row['l_name']; ?>" class="form-control" id="validationDefault02" readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">Email</label>
                                        <input type="email" name="useremail" value="<?php echo $row['user_email']; ?>" class="form-control" id="validationDefault01" readonly>
                                    </div>

                                    <div class="col-md-6">
                                        <label for="validationDefault01" class="form-label">Mobile</label>
                                        <input type="text" name="usermobile" value="<?php echo $row['user_mob']; ?>" class="form-control" id="validationDefault01" readonly>
                                    </div>

                                    <div class="col-md-6 my-5">
                                        <input type="submit" name="submit"  value="Change Password" class="btn btn-primary btn-user btn-block">
                                    </div>
                                </form>
                            <?php
                                    }
                                } 
                            }

                            ?>
                        </table>
                    </div>
                </div>

            </div>
            
            <?php include("include/footer.php"); ?>
            
        </div>
    </div>

    <!-- All Jquery -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

    <!-- App Style Switcher JavaScript -->
    <script src="dist/js/app-style-switcher.js"></script>

    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>

    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>

    <!--Custom JavaScript -->
    <script src="dist/js/custom.js"></script>
</body>

</html>