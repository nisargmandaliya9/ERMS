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
    <title>ERMS | Change Password</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">

    <script type="text/javascript">

        function checkPass() {
            if(document.changepswd.newpswd.value != document.changepswd.confirmpswd.value){
                document.changepswd.confirmpswd();
                return false;
            }
            return true;
        }
    </script>
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

        <?php include("include/header.php"); ?>

        <?php include("include/aside.php"); ?>
        
        <div class="page-wrapper">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">

                        <form class="row g-3" name="changepswd" action="changepswd_query.php" method="POST" onsubmit="return checkPass();">
                            <h2 class="text-center py-3">Change Password</h2>

                                <div class="col-md-12">
                                    <label for="validationDefault01" class="form-label">Current Password</label>
                                    <input type="password" name="currentpswd" id="currentpswd" class="form-control" id="validationDefault01" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault02" class="form-label">New Password</label>
                                    <input type="password" name="newpswd" id="newpswd" class="form-control" id="validationDefault02" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="validationDefault02" class="form-label">Confirm Password</label>
                                    <input type="password" name="confirmpswd" id="confirmpswd" class="form-control" id="validationDefault02" required>
                                </div>

                                <div class="text-center col-12 p-4">
                                    <button name="sbmt" class="btn btn-primary" type="submit">Change</button>
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