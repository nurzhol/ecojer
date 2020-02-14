<!DOCTYPE HTML>
<html>

<head>
    <title>Dashboard - Pakistan Institute of Management</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/core.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <link rel="stylesheet" href="assets/icons/fontawesome/styles.min.css">
    <link rel="stylesheet" href="lib/css/chartist.min.css">

    <script type="text/javascript" src="lib/js/jquery.min.js"></script>
    <script type="text/javascript" src="lib/js/tether.min.js"></script>
    <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="lib/js/chartist.min.js"></script>
    <script type="text/javascript" src="assets/js/app.min.js"></script>
    
</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-toggleable-md">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav">
            <span>
                <i class="fa fa-code-fork"></i>
            </span>
        </button>

        <button class="navbar-toggler navbar-toggler-left" type="button" id="toggle-sidebar">
            <span>
               <i class="fa fa-align-justify"></i>
            </span>
        </button>

        <a class="navbar-brand logo" href="#">
            <img src="assets/img/logo.png" alt="Modish">
        </a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <button class="sidebar-toggle btn btn-flat" id="toggle-sidebar-desktop">
                <span>
                    <i class="fa fa-align-justify"></i>
                </span>
            </button>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdown-has-after" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img src="assets/img/default-user.jpg" alt="" class="user-img"> John Doe
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-user"></i> <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="fa fa-sign-out"></i> <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /NAVBAR -->

    <div class="page-container">
        <div class="page-content">
            <!-- inject:SIDEBAR -->

            <div id="sidebar-main" class="sidebar sidebar-default">
    <div class="sidebar-content">
        <ul class="navigation">
            <li class="navigation-header">
                <span>Main</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="#"><i class="fa fa-home"></i> <span>Dashboard</span></a>
            </li>

            <li class="navigation-header">
                <span>Operation Control Application</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="#"><i class="fa fa-book"></i><span>Course</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-graduation-cap"></i> <span>Programs</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-briefcase"></i> <span>Organizations</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-address-card-o"></i> <span>Participants</span></a>
                <ul>
                    <li><a href="add-participants.html">Add</a></li>
                    <li><a href="view-participants.html">View</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-id-badge"></i> <span>Faculty</span></a>
                <ul>
                    <li><a href="register-faculty.php">Register</a></li>
                    <li><a href="view-faculty.php">View</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a>
                <ul>
                    <li><a href="add-participants.html">Register</a></li>
                    <li><a href="view-participants.html">View</a></li>
                </ul>
            </li>
            
            <li class="navigation-header">
                <span>Developed By</span>
                <i class="icon-menu"></i>
            </li>

            <li>
                <a href="#"><i class="fa fa-info"></i> <span>CodeScript</span></a>
                
            </li>
        </ul>
    </div>
            </div>

            <!-- inject:/SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="content-wrapper">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="page-title">Dashboard <small>Control Panel</small></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-primary-1">
                                <div class="inner">
                                    <h2>532</h2>
                                    <p>Total No. of Courses</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-book"></i>
                                </div>

                                <div class="details bg-primary-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-info-1">
                                <div class="inner">
                                    <h2>1321</h2>
                                    <p>Enrollments</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-users"></i>
                                </div>

                                <div class="details bg-info-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-success-1">
                                <div class="inner">
                                    <h2>249</h2>
                                    <p>Organizations</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-briefcase"></i>
                                </div>

                                <div class="details bg-success-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-xs-6">
                            <div class="widget-overview bg-danger-1">
                                <div class="inner">
                                    <h2>8,952</h2>
                                    <p>Unique Visitors</p>
                                </div>

                                <div class="icon">
                                    <i class="fa fa-pie-chart"></i>
                                </div>

                                <div class="details bg-danger-3">
                                    <span>View Details <i class="fa fa-arrow-right"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row margin-top-10">
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Sales Overview</h5>
                                </div>
                                <div class="ct-chart-dashboard height-250 ct-chart-blue"></div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recent Course</h5>

                                    <div class="recent-products">
                                        <ul>
                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Course Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Course Name goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Course Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Course Name goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Course Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Course Name goes here.</span>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="product-image">
                                                    <img src="assets/img/default-img.png" alt="">
                                                </div>

                                                <div class="product-info">
                                                    <span class="product-title">
                                                        <a href="#">Course Name</a>
                                                        <span class="pull-right">
                                                            <badge class="badge badge-primary">$1,800</badge>
                                                            </span>
                                                    </span>
                                                    <span class="product-description">Course Name goes here.</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recent Members</h5>

                                    <ul class="recent-members">
                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>

                                        <li>
                                            <img src="assets/img/profile-picture.jpg" alt="">
                                            <span class="user-name">Username</span>
                                            <span class="joined-date">Today</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-block">
                                    <h5 class="card-title">Recent Enrollments</h5>
                                    <table class="table table-stripped table-hover">
                                        <thead>
                                            <tr>
                                                <td>#</td>
                                                <td>Course</td>
                                                <td>Status</td>
                                                <td>Price</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Course Name</td>
                                                <td>
                                                    <badge class="badge badge-warning">Pending</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Course Name</td>
                                                <td>
                                                    <badge class="badge badge-success">Completed</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Course Name</td>
                                                <td>
                                                    <badge class="badge badge-primary">Shipped</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">190</a></td>
                                                <td>Course Name</td>
                                                <td>
                                                    <badge class="badge badge-danger">Cancelled</badge>
                                                </td>
                                                <td>
                                                    $525
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /PAGE CONTENT -->
        </div>
    </div>
</body>

</html>