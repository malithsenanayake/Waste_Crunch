<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Waste Crunch | Admin Portal </title>
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
    <script type="text/javascript" src="../vendors/2canvasjs.min%20.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <script type="text/javascript" src="/assets/script/canvasjs.min.js"></script>
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
            time.setSeconds(10);
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
                    <a href="index1.php" class="site_title">&nbsp;&nbsp;<img src="images/small%202.png">&nbsp;&nbsp;<span><b>Waste</b></span><span>Crunch</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="images/user.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Executive Chef,</span>
                        <h2>Mr.W.Weerasekara</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <br>
                        <h3><u>Executive Chef Functions</u></h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i>Dasboards <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index1.php">Main Dashboard</a></li>
                                    <li><a href="index2.html">A-La Carte Trends</a></li>
                                    <li><a href="index3.html">Bufft Trends</a></li>
                                    <li><a href="index3.html">Wastage Trends</a></li>
                                </ul>
                            </li>
                            <br>
                            <h3>Edit/View Menu Items</h3>
                            <br>
                            <li><a href="set-values.php"><i class="fa fa-edit"></i> Brakast Menu</a>
                            </li>
                            <li><a href="request_V2G_Electricity.html"><i class="fa fa-edit"></i>Lunch Menu</a>
                            </li>
                            <li><a href="set-values.php"><i class="fa fa-edit"></i> Dinner Menu</a>
                            </li>
                            <br>
                            <h3>Edit/View Staff Functions</h3>
                            <br>
                            <li><a><i class="fa fa-table"></i> Buffet Trends<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="profile.html">Breakfast</a></li>
                                    <li><a href="Profile.html">Lunch</a></li>
                                    <li><a href="contacts.html">Dinner</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-table"></i> A-La Carte Trends<span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="profile.html">Breakfast</a></li>
                                    <li><a href="Profile.html">Lunch</a></li>
                                    <li><a href="contacts.html">Dinner</a></li>
                                </ul>
                            </li>
                            <br>
                            <h3>Notifications and Messeges</h3>
                            <br>
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
                                    <li><a href="inbox.php">Overall reports</a></li>
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
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="images/img.jpg" alt="">Mr.W.Weerasekara
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
                          <span>System admin</span>
                          <span class="time"> 1 min ago</span>
                        </span>
                                        <span class="message">
                            New menu item have been added
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>System admin </span>
                          <span class="time">3 mins ago</span>
                        </span>
                                        <span class="message">
                          New Staff member have been added
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>System admin</span>
                          <span class="time">5 mins ago</span>
                        </span>
                                        <span class="message">
                          New Staff member have been added
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <span class="image"><img src="images/img.jpg" alt="Profile Image"/></span>
                                        <span>
                          <span>System admin</span>
                          <span class="time">2 days ago </span>
                        </span>
                                        <span class="message">
                          New menu item have been added
                        </span>
                                    </a>
                                </li>
                                <li>
                                    <div class="text-center">
                                        <a>
                                            <strong>See All Alerts</strong>
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
            <div class="">
                <div class="row top_tiles">
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="count">24</div>
                            <h3>Kitchen Staff Profiles</h3>
                            <p>View Details</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="count">15</div>
                            <h3>Management Profiles</h3>
                            <p>View Details</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="count">3</div>
                            <h3>Executive Profiles</h3>
                            <p>View Details</p>
                        </div>
                    </div>
                    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                            <div class="count"><!DOCTYPE html>
                                <html>
                                <head>
                                    <script>
                                        function startTime() {
                                            var today = new Date();
                                            var h = today.getHours();
                                            var m = today.getMinutes();
                                            var s = today.getSeconds();
                                            m = checkTime(m);
                                            s = checkTime(s);
                                            document.getElementById('txt').innerHTML =
                                                h + ":" + m + ":" + s;
                                            var t = setTimeout(startTime, 500);
                                        }
                                        function checkTime(i) {
                                            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                                            return i;
                                        }
                                    </script>
                                </head>

                                <body onload="startTime()">

                                <div id="txt"></div>

                                </body>
                                </html></div>
                            <h3>Local Time</h3>
                            <p>Colombo West</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Profile Creation
                                </h2>
                                <div class="filter">
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <div class="col-md-9 col-sm-12 col-xs-12">
                                    <div id="chartContainer" style="height: 300px; width: 135%;">
                                    </div>
                                </div>


                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top V2G profiles
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                    <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Keels super 01</a>
                                    <p><strong>Kw provided:1200. </strong></p>
                                    <p>
                                        <small>4 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                    <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Keels super 03</a>
                                    <p><strong>Kw provided:1130 </strong> </p>
                                    <p>
                                        <small>3 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-blue profile_thumb">
                                    <i class="fa fa-user blue"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">CMC CMB</a>
                                    <p><strong>Kw provided:1010 </strong>  </p>
                                    <p>
                                        <small>2 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                    <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Food city</a>
                                    <p><strong>Kw provided:980 </strong> </p>
                                    <p>
                                        <small>1 input Today</small>
                                    </p>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Top EV profiles
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                    <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Ms. Thisuri Dematagoda</a>
                                    <p><strong>Kw provided:15. </strong></p>
                                    <p>
                                        <small>4 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-green profile_thumb">
                                    <i class="fa fa-user green"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Mr. Nishan Fernando</a>
                                    <p><strong>Kw provided:13 </strong> </p>
                                    <p>
                                        <small>3 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-blue profile_thumb">
                                    <i class="fa fa-user blue"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Ms. Luxi Ganesh</a>
                                    <p><strong>Kw provided:12 </strong>  </p>
                                    <p>
                                        <small>2 inputs Today</small>
                                    </p>
                                </div>
                            </li>
                            <li class="media event">
                                <a class="pull-left border-aero profile_thumb">
                                    <i class="fa fa-user aero"></i>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">Ms.Thashma Abeysinghe</a>
                                    <p><strong>Kw provided:10 </strong> </p>
                                    <p>
                                        <small>1 input Today</small>
                                    </p>
                                </div>
                            </li>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>V2G input History
                            </h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">May</p>
                                    <p class="day">17</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">View Report</a>
                                    <p>V2G inputs and user data</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">May</p>
                                    <p class="day">16</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">View Report</a>
                                    <p>V2G inputs and user data</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">May</p>
                                    <p class="day">15</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">View Report</a>
                                    <p>V2G inputs and user data</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">May</p>
                                    <p class="day">14</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">View Report</a>
                                    <p>V2G inputs and user data</p>
                                </div>
                            </article>
                            <article class="media event">
                                <a class="pull-left date">
                                    <p class="month">May</p>
                                    <p class="day">13</p>
                                </a>
                                <div class="media-body">
                                    <a class="title" href="#">View Report</a>
                                    <p>V2G inputs and user data</p>
                                </div>
                            </article>
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
            All rights reserved. Copyrights: Waste Crunch 2017 v1.0
        </div>
        <div class="clearfix"></div>
    </footer>
    <!-- /footer content -->
</div>
</div>

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
<!-- jQuery Sparklines -->
<script src="../vendors/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
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
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>