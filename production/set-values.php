<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Green Pay | Main Dashboard </title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script  type="text/javascript">
        function store(){
            var inputAmount= document.getElementById("amount");
            localStorage.setItem("amount", inputAmount.value);
        }
    </script>
</head>

<!--Side bar coding-->

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index1.html" class="site_title"><img src="images/GPLOGO.png"><span>Green Pay</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>Admin</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Dashboards <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index1.html">Main Dashboard</a></li>
                                    <li><a href="index2.html">V2G Dashboard</a></li>
                                    <li><a href="index3.html">EV Dashboard</a></li>
                                </ul>
                            </li>
                            <li><a href="set-values.php"><i class="fa fa-edit"></i> Set Values</a>
                            </li>
                            <li><a href="request_V2G_Electricity.html"><i class="fa fa-desktop"></i> Request V2G Electricity</a>
                            </li>
                            <li><a><i class="fa fa-table"></i> Manage Accounts <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="profile.html">Manage V2G accounts</a></li>
                                    <li><a href="Profile.html">Manage EV accounts</a></li>
                                    <li><a href="contacts.html">Directory</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-envelope"></i> Messeges <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="inbox.php">inbox</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Performance</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-desktop"></i>reports <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="inbox.php">Financial reports</a></li>
                                    <li><a href="inbox.php">V2G performance reports</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /sidebar menu -->

            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <img src="images/img.jpg" alt="">Admin
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right"></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">4</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Keels Super 01 </span>
                          <span class="time"> 1 min ago</span>
                        </span>
                                        <span class="message">
                            We are experiencing some network issues. Our V2G Units show as offline. please verify from your end and do let us know ASAP
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Keels Super 02 </span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          Test messege
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>Arpico Super 01</span>
                          <span class="time">5 mins ago</span>
                        </span>
                                        <span class="message">
                          Please verify the connection. Thank you.
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                                        <span>
                          <span>CMC Colombo 7</span>
                          <span class="time">2 days ago </span>
                        </span>
                                        <span class="message">
                          Please check if carpark lot #2 V2Gs are online. Thank you
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong><a href="inbox.php">See All Alerts</a></strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">

                        <div id="chartContainer" style="height:80%; width: 100%;">
                            <form action="#">
                                <h4> Set monthly maximum V2G payment</h4>
                                <hr>
                                <label> Set payment period.:</label>
                                <div class="form-group">
                                    <div id="reportrange" class="pull-left" style="background: #fff; align-items: left; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                        <span>January 01, 2017 - December 28, 2017</span> <b class="caret"></b>
                                    </div>
                                    <br>
                                    <br>
                                    <br>

                                    <label for="amount">Set maximum payable amount Rs.:</label>
                                    <input type="number" class="form-control" style="width:19%" id="amount" placeholder="Enter amount" name="amount">
                                </div>
                                <div class="form-group">

                                <div class="checkbox">
                                    <label><input type="checkbox" name="remember"> Make this payment reccurent  </label>
                                </div>
                                <br>
                                <h4 for="amount">Set maximum peak demand power required</h4>
                                <hr>
                                <label for="amount">Week days Kw:</label>
                                <input type="number" class="form-control" style="width:19%" id="weekkw" placeholder="Enter Kw" name="amount">
                                    <br>
                                <label for="amount">Weekends Kw:</label>
                                <input type="number" class="form-control" style="width:19%" id="weekendkw" placeholder="Enter Kw" name="amount">
                                <br>
                                <button onclick="store()" type="button" class="btn btn-default">Submit</button></div>
                            </form>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12 bg-white">

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br />

            <div class="row">


                <div class="col-md-4 col-sm-4 col-xs-12">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">

                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                </div>

            </div>


        </div>
    </div>
</div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class="pull-right">
        All rights reserved. Copyrights: Green Pay 2017 v1.0
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>