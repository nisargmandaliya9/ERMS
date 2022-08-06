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
    <title>ERMS | Employees</title>
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

            <div class="row mx-3">
                <div class="col-6">
                        <h1 class="mb-0 fw-bold">Employee Details</h1> 
                </div>
            </div>
        
            <div class="container-fluid">
                
                <div class="row justify-content-center">
                    <div class="col-12 col-md-11">
                        <table class="table table-hover table-responsive bg-light">
                            <!-- Table Header  -->
                            <tr>
                                <th>ID</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Date Employed</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>

                            <?php

                            // 1. Connecting Project to Database
                            $conn = mysqli_connect("localhost:8883", "root", "", "erms");

                            // 2. Checking Connectiong working or not
                            if (!$conn) {
                                die("Error in Connecting DB" . mysqli_connect_error());
                            } else {


                                // 3. SELECT query for user  
                                $empSelect = "SELECT * FROM `empdetails`";

                                // 4. Execute query ( select query ) and store result in result    
                                $result = mysqli_query($conn, $empSelect);

                                if (mysqli_num_rows($result) > 0) {

                                    while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                        <!--  execute loop with html -->
                                        <tr>
                                            <td><?php echo $row['id']; ?></td>
                                            <td><?php echo $row['fname']; ?></td>
                                            <td><?php echo $row['lname']; ?></td>
                                            <td><?php echo $row['email']; ?></td>
                                            <td><?php echo $row['mobile']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['jobtype']; ?></td>
                                            <td><?php echo $row['salary']; ?></td>

                                            <td><a href="update_empdata.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Update</a> </td>

                                            <td><a href="delete_empdata.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a> </td>
                                        </tr>
                            <?php
                                    }
                                } else {

                                    echo "No Data Found";
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