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
    <script type="text/javascript" src="../vendors/canvasjs.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript">
        var i = 67;
        function increment() {
            i = i + 23;
            document.getElementById('number').innerHTML = i;
        }
        setInterval('increment()', 3400);
    </script>
    <script>
        document.getElementById("amount").innerHTML = localStorage.getItem("amount");
    </script>
    <script type="text/javascript">
        window.onload = function () {


            var dataPoints1 = [];
            var dataPoints2 = [];

            var chart = new CanvasJS.Chart("chartContainer", {
                zoomEnabled: true,
                title: {},
                toolTip: {
                    shared: true

                },
                legend: {
                    verticalAlign: "top",
                    horizontalAlign: "center",
                    fontSize: 18,
                    fontWeight: "bold",
                    fontFamily: "calibri",
                    fontColor: "dimGrey"
                },

                axisY: {
                    prefix: 'Kw',
                    includeZero: false
                },
                data: [{
                    type: "line",
                    xValueType: "dateTime",
                    showInLegend: true,
                    name: "Today",
                    dataPoints: dataPoints1
                },
                    {

                        type: "line",
                        xValueType: "dateTime",
                        showInLegend: true,
                        name: "17/05/2017",
                        dataPoints: dataPoints2
                    }],
                legend: {
                    cursor: "pointer",
                    itemclick: function (e) {
                        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                            e.dataSeries.visible = false;
                        }
                        else {
                            e.dataSeries.visible = true;
                        }
                        chart.render();
                    }
                }
            });


            var updateInterval = 1000;

            var yValue1 = 100;
            var yValue2 = 55;

            var time = new Date;
            time.setHours(10);
            time.setMinutes(40);
            time.setSeconds(00);
            time.setMilliseconds(00);


            var updateChart = function (count) {
                count = count || 1;

                for (var i = 0; i < count; i++) {


                    time.setTime(time.getTime() + updateInterval);


                    var deltaY1 = .5 + Math.random() * (-.5 - .5);
                    var deltaY2 = .5 + Math.random() * (-.5 - .5);


                    yValue1 = Math.round((yValue1 + deltaY1) * 100) / 100;
                    yValue2 = Math.round((yValue2 + deltaY2) * 100) / 100;


                    dataPoints1.push({
                        x: time.getTime(),
                        y: yValue1
                    });
                    dataPoints2.push({
                        x: time.getTime(),
                        y: yValue2
                    });


                }
                ;

                chart.options.data[0].legendText = "Today Kw " + yValue1;
                chart.options.data[1].legendText = " 17/05/2017 Kw " + yValue2;

                chart.render();

            };

            updateChart(1000);

            setInterval(function () {
                updateChart()
            }, updateInterval);
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
                    <a href="index1.php" class="site_title"><img src="images/GPLOGO.png"><span>Green Pay</span></a>
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

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Dashboards <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index1.php">Main Dashboard</a></li>
                                    <li><a href="index2.html">V2G Dashboard</a></li>
                                    <li><a href="index3.html">EV Dashboard</a></li>
                                </ul>
                            </li>
                            <li><a href="set_values.html"><i class="fa fa-edit"></i> Set Values</a>
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
                                    <li><a href="inbox.html">inbox</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="menu_section">
                        <h3>Performance</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-desktop"></i>reports <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="inbox.html">Financial reports</a></li>
                                    <li><a href="inbox.html">V2G performance reports</a></li>
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
                                <li><a href="index.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                        <li role="presentation" class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown"
                               aria-expanded="false">
                                <i class="fa fa-envelope-o"></i>
                                <span class="badge bg-green">4</span>
                            </a>
                            <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
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
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
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
                                            <strong><a href="inbox.html">See All Alerts</a></strong>
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
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-users"></i> V2G Subscribers Online </span>
                    <div class="count">
                        <Small>1/10</Small>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-automobile"></i> EV Users Online </span>
                    <div class="count">
                        <Small>1/21</Small>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-area-chart"></i> Total Electricity Provided</span>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="count green"><h1><small>Kw:</small></h1></div>
                        </div>
                        <div class="col-md-4">
                            <div class="count green"><h1 id="number">67</h1></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Total Payments </span>
                    <div class="count">
                        <div class="col-md-4">
                            <div class="count green"><h1 id="number">Rs: 6,842</h1></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Daily Limit </span>
                    <div class="count">
                        <div class="col-md-4">
                            <div class="count grey"><h1 id="number">Rs: 9,000</h1></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Local Date and Time </span>
                    <div class="count">
                        <Small>
                            <iframe src="http://free.timeanddate.com/clock/i5pxfpsk/n1925/fs24/fc73879c/tcf7f7f7/pcf7f7f7/ftb/tt0/tw0/tm1/ts1/tb4"
                                    frameborder="0" width="149" height="58"></iframe>
                        </Small>
                    </div>
                </div>
            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12g col-xs-12">
                    <div class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3>
                                    <small>Daily V2G Performance</Small>
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Daily V2G Performance - Overview </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <iframe width="503.5" height="357.5" seamless frameborder="0" scrolling="no" src="https://docs.google.com/spreadsheets/d/187QkLmSTSFqTxgW4atqggBkCcOAMPMLzyhqgqTXkMDg/pubchart?oid=680890861&amp;format=interactive"></iframe>
                            </div>

                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Daily V2G Performance - LIVE</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 bg-white">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div id="chartContainer" style="height: 360px; width: 100%;">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="x_content">


                            </div>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br/>

            <div class="row">


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>V2G Performance sector-wise</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Western</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>123k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Southern</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>53k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Central</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>23k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Uva </span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>3k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Nothern</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
                                            <span class="sr-only">60% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>1k</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320 overflow_hidden">
                        <div class="x_title">
                            <h2>Top V2G Contributors</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="" style="width:100%">
                                <tr>
                                    <th style="width:37%;">
                                        <p>Top performers</p>
                                    </th>
                                    <th>
                                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                            <p class=""></p>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                            <p class=""></p>
                                        </div>
                                    </th>
                                </tr>
                                <tr>
                                    <td>
                                        <canvas class="canvasDoughnut" height="140" width="140"
                                                style="margin: 15px 10px 10px 0"></canvas>
                                    </td>
                                    <td>
                                        <table class="tile_info">
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square blue"></i>CMC </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square green"></i>Foodcity </p>
                                                </td>
                                                <td>10%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square purple"></i>Keels </p>
                                                </td>
                                                <td>20%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square aero"></i>Arpico </p>
                                                </td>
                                                <td>15%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p><i class="fa fa-square red"></i>Others </p>
                                                </td>
                                                <td>30%</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Peak Hour Performance (Killo Watts)</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>7:00PM-7:59PM  0.00%</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                     data-transitiongoal="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>8:00PM-8:59PM  0.00%</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                     data-transitiongoal="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>9:00PM-9:59PM  0.00%</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                     data-transitiongoal="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>10:00PM-10:59PM  0.00%</p>
                                        <div class="">
                                            <div class="progress progress_sm" style="width: 76%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                     data-transitiongoal="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
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
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- ECharts -->
<script src="../vendors/echarts/dist/echarts.min.js"></script>
<script src="../vendors/echarts/map/js/world.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
