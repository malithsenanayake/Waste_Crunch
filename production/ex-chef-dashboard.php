<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Waste Crunch</title>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css"/>
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

<!--Side bar coding-->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'ex-chef-left-scroll.php'; ?>
        </div>

        <!-- top navigation -->
        <?php include 'ex-chef-top-nav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col">
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12" style=" color: white">
                    <a href="ex-chef-breakfast-menu.php"> <div class="tile-stats" style=" background-color: #3498db;  color: white">
                        <div class="icon"><i class="fa fa-check-square-o"></i>
                            <br><br><br>
                            <h3>12%</h3>
                        </div>
                        <div class="count">Breakfast</div>
                        <h3>Submitted</h3>
                        <p>Total Wastage</p>
                    </div></a>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="ex-chef-lunch-menu.php"> <div class="tile-stats" style=" background-color: #6f6bbf; color: white">
                        <div class="icon"><i class="fa fa-check-square-o"></i>
                            <br><br><br>
                            <h3>2%</h3>
                        </div>
                        <div class="count">Lunch</div>
                        <h3>Submitted</h3>
                        <p>Total Wastage</p>
                    </div></a>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <a href="ex-chef-dinner-menu.php"><div class="tile-stats" style=" background-color: #00a85b;  color: white">
                        <div class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <br><br><br>
                            <h3>-</h3>
                        </div>
                        <div class="count">Dinner</div>
                        <h3>Pending</h3>
                        <p>Total Wastage</p>
                    </div></a>
                </div>
                <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tile-stats" style=" background-color: #de4e3c;  color: white">
                        <div class="icon"></div>
                        <div class="count">Wastage</div>
                        <h3 id="txt"></h3>
                        <p>Total Wastage</p>
                    </div>
                </div>
            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12g col-xs-12">
                    <div class="dashboard_graph">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Daily V2G Performance - Overview </h2>
                                    <div class="clearfix"></div>
                                </div>
                                <iframe width="100%" height="354" seamless frameborder="0" scrolling="no"
                                        src="https://docs.google.com/spreadsheets/d/187QkLmSTSFqTxgW4atqggBkCcOAMPMLzyhqgqTXkMDg/pubchart?oid=32122629&amp;format=interactive"></iframe>
                            </div>

                        </div>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <br/>

            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320 overflow_hidden">
                        <div class="x_title">
                            <h2>Gender</h2>
                            <div class="clearfix"></div>
                        </div>

                        <div class="x_content">

                            <div row="">
                            <span>
                             <div class="col-md-12">
                             <div class="col-md-6">
                                 <center>
                            <div style="width: 100%;     margin-top: -45px;">
                            <table style="width:100%">

                                    <div id="genderChart"></div>

                                <script src="gender.js"></script>
                                <td>

                                </td>
                                </tr>
                            </table>
                            </div>
                            </center>
                             </div>
                                 <div class="col-md-6">
                                      <table class="tile_info">
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square blue"></i>Male </p>
                                    </td>
                                    <td>62%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-square green"></i>Female </p>
                                    </td>
                                    <td>48%</td>
                                </tr>
                            </table>
                             </div>
                             </div>
                            </span>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Nationality Details</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Locals</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                            <span class="sr-only">72%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>72%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Indians</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 18%;">
                                            <span class="sr-only">18%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>18%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>Chinese</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 12%;">
                                            <span class="sr-only">12%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>12%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>European </span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 7%;">
                                            <span class="sr-only">7%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>7%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="widget_summary">
                                <div class="w_left w_25">
                                    <span>African</span>
                                </div>
                                <div class="w_center w_55">
                                    <div class="progress">
                                        <div class="progress-bar bg-green" role="progressbar" aria-valuenow="60"
                                             aria-valuemin="0" aria-valuemax="100" style="width: 3%;">
                                            <span class="sr-only">3%</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="w_right w_20">
                                    <span>3%</span>
                                </div>
                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Food Preferences</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <div class="col-md-12 col-sm-12 col-xs-6">
                                    <div>
                                        <p>Vegetarian 20%</p>
                                        <div class="">
                                            <div class="progress progress-bar-success" style="width: 20%;">
                                                <div class="progress-bar bg-green" role="progressbar"
                                                     data-transitiongoal="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <p>Non-vegetarian 80%</p>
                                        <div class="">
                                            <div class="progress progress-bar-success" style="width: 80%;">
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
