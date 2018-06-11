<?php
session_start();
// echo $_SESSION['email'];
 if(!$_SESSION['email']){
    header("location:../../indexP.php");
}?>
<?php
$email = $_SESSION['email'] ;
include_once("../../connect/connection.php");
                    $r= mysqli_query($connect, "SELECT * from client WHERE email ='$email' ");
                    $l=mysqli_fetch_assoc($r);
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>My profil-member area</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- chartist CSS -->
    <link href="../assets/plugins/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <!--c3 CSS -->
    <link href="../assets/plugins/c3-master/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- Dashboard 1 Page CSS -->
    <link href="css/pages/dashboard.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/default-dark.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">DZ BOOKINg</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="../../indexP.php">
                        <span>
                        <img src="../../img/logoN.png" width="175" height="35" alt="" data-retina="true" >
                        </span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a>
                            </form>
                        </li>
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        
                        <li class="nav-item">
                            <a class="nav-link waves-effect waves-dark" href="#"><img src="<?php echo$l['img'];?>" alt="user" class="profile-pic" /></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="index.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="pages-profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="table-basic.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu">Table</span></a></li>
                        <li> <a class="waves-effect waves-dark" href="map-google.php" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Map</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                    </div>
                </div>
                <div class="card-body">
                    <p class="lead">Hello <?php echo$l['username'];?>, it's nice to see you</p>
                </div>
                <div class="row justify-content-start" >
                    <div class="col-lg-4">
                        <div class="card" >
                            <img class="card-img-top img-responsive" src="../../img/promo_bg.jpg"  alt="Card image cap">
                            <div class="card-body">
                                <h4 class="font-normal">Need a Bed? Why DZBOOKINg.com is the Most Diverse and Popular Accommodation Platform in the World.</h4>
                                <span class="label label-info label-rounded">Why DZBOOKINg</span>
                                <p class="m-b-0 m-t-20">DZBOOKINg.com revealed today that it offers more than 820,000 unique properties that have 21 million bookable rooms worldwide, making it Priceline Group’s largest global business with more awesome, unique places to stay than any other digital travel brand in the world.</p>
                                <div class="d-flex m-t-20">
                                    <button class="btn p-l-0 btn-link ">Read more</button>
                                    <div class="ml-auto align-self-center">
                                        <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart-o"></i></a>
                                        <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-share-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                     <div class="col-lg-8">
                        <h4 class="lead">Other options on your account</h4>
                        <div class="card-body">
                            <b>Recently added hotels <br></b>
                            <p>Add properties to your list by clicking on the heart in the image.</p>
                        </div>
                    </div>
                </div>
                    </div>
                   
                
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer" align="center"> © 2018 Admin  by mns&titi </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/chartist-js/dist/chartist.min.js"></script>
    <script src="../assets/plugins/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 JavaScript -->
    <script src="../assets/plugins/d3/d3.min.js"></script>
    <script src="../assets/plugins/c3-master/c3.min.js"></script>
    <!-- Chart JS -->
    <script src="js/dashboard.js"></script>
</body>

</html>
