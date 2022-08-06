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
    <title>ERMS | Add Employees</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/Flexy-admin-lite/" />
    
    <!-- Custom CSS -->
    <link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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


        <?php include("include/header.php"); ?>

        <?php include("include/aside.php"); ?>
    

        <div class="page-wrapper">

            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <form class="row g-3" action="insert_empdata.php" method="POST">
                            <h2 class="text-center py-3">Add Employee</h2>

                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">First name</label>
                                <input type="text" name="empfname" class="form-control" id="validationDefault01" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault02" class="form-label">Last name</label>
                                <input type="text" name="emplname" class="form-control" id="validationDefault02" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">Email</label>
                                <input type="email" name="empemail" class="form-control" id="validationDefault01" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault01" class="form-label">Mobile</label>
                                <input type="text" name="empmobile" class="form-control" id="validationDefault01" required>
                            </div>

                            <div class="col-md-12">
                                <label for="validationDefault02" class="form-label">Address</label>
                                <textarea name="empaddress" class="form-control" required></textarea>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault03" class="form-label">City</label>
                                <input type="text" name="empcity" class="form-control" id="validationDefault03" required>
                            </div>

                            <div class="col-md-6">
                                <label for="validationDefault04" class="form-label">State</label>
                                <input type="text" name="empstate" class="form-control" id="validationDefault03" required>                                
                            </div>

                            <div class="col-md-4">
                                <label for="validationDefault04" class="form-label">Date Employed</label>
                                <input type="Date" name="empdate" class="form-control" id="validationDefault03" required>                                
                            </div>

                            <div class="col-md-4">
                                <label for="validationDefault04" class="form-label">Job Type</label>
                                <input type="text" name="empjob" class="form-control" id="validationDefault03" required>                                
                            </div>

                            <div class="col-md-4">
                                <label for="validationDefault04" class="form-label">Salary</label>
                                <input type="text" name="empsalary" class="form-control" id="validationDefault03" required>                                
                            </div>

                            <div class="text-center col-12 p-4">
                                <button name="submit" class="btn btn-primary" type="submit">Add Employee</button>
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

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
