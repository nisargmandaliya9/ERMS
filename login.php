<?php
    session_start();
?>
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
    <title>ERMS | Login</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
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


        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand m-3" href="index.php">     
                        <h2 class="logo-icon">
                                ERMS
                        </h2>
                    </a>

                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="mdi mdi-menu"></i></a>
                </div>

            </nav>
        </header>

        <aside class="left-sidebar" data-sidebarbg="skin6">
      
            <div class="scroll-sidebar">
       
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i class="mdi mdi-home"></i><span
                                    class="hide-menu">Home</span></a></li>
                        
                        <?php 
                            if (isset($_SESSION['useremail'])) {
                        ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="user_profile.php" aria-expanded="false"><i class="mdi mdi-account-circle"></i><span
                                        class="hide-menu">User Profile</span></a></li>
        
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="add_empdata.php" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span
                                        class="hide-menu">Add Employee</span></a></li>
        
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="view_empdata.php" aria-expanded="false"><i class="mdi mdi-account-multiple"></i><span
                                        class="hide-menu">View Employee</span></a></li>

                        <?php
                            }
                         
                            if (isset($_SESSION['useremail'])) {
                        ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="index.php" aria-expanded="false"><i
                                    class="mdi mdi-logout"></i><span class="hide-menu">Logout</span></a></li>
                        <?php
                            } else {
                        ?>
                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="login.php" aria-expanded="false"><i class="mdi mdi-login-variant"></i><span
                                        class="hide-menu">Login</span></a></li>

                            <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                    href="user_register.php" aria-expanded="false"><i class="mdi mdi-account-plus"></i><span
                                        class="hide-menu">Add User</span></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
            
            </div>       
        </aside>

        <div class="page-wrapper">
            
            <div class="text-xs font-weight-bold text-primary text-uppercase text-center m-4">
                <h2>Welcome to Employee Record Management System!</h2>
            </div>

            <div class="container-fluid p-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <form class="card p-5" action="login_validate.php" method="POST">
                                <h1 class="text-center py-3">ADMIN LOGIN</h1>

                                <div class="mb-3">
                                    <label for="useremail" class="form-label">Email address</label>
                                    <input type="email" name="useremail" required class="form-control" id="useremail">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="userpswd" class="form-label">Password</label>
                                    <input type="password" name="userpswd" class="form-control" required id="userpswd">
                                </div>
                                    
                                <button type="submit" class="btn btn-primary" name="login">Login</button>

                                <div class="text-center m-4">
                                    <a href="user_register.php">Don't have an account? Sign Up!</a>
                                </div>
                        </form>
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

    <!--This page JavaScript -->
    <script src="assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
