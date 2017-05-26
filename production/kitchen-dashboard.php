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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.16/d3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/c3/0.4.10/c3.min.css"/>

</head>

<!--Side bar coding-->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <?php include 'kitchen-left-scroll.php'; ?>
        </div>

        <!-- top navigation -->
        <?php include 'kitchen-top-nav.php'; ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div style="margin-top: 58px;">
                        <div class="row"style="background-color: #3498db">
                            <div class="title_left">
                                <h1 style="color: white">&nbsp; &nbsp;Kitchen staff Dashboard</h1>
                            </div>
                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <br>
                <div class="clearfix"></div>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
                                <div class="row">
                                    <center>
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                                    </div>

                                    <div class="clearfix"></div>


                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view"
                                             style=" background-color: #3498db;  color: white">
                                            <div class="col-sm-12">
                                                <h1>Breakfast</h1>
                                                <div class="left col-xs-7">
                                                    <h2>Total wastage </h2>
                                                    <h2>Most Wasted Items </h2>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-check-circle-o"></i> Brown bread</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <h1>12%</h1>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">

                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <a href="kitchen-breakfast-menu.php"><button type="button" class="btn btn-success btn-xs">View menu</button></a>
                                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                                        <i class="fa fa-user"> </i> Record Buffet Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view" style=" background-color: #6f6bbf; color: white">
                                            <div class="col-sm-12">
                                                <h1>Lunch</h1>
                                                <div class="left col-xs-7">
                                                    <h2>Total wastage </h2>
                                                    <h2>Most Wasted Items </h2>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-check-circle-o"></i> Potatoes</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <h1>2%</h1>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">

                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <a href="kitchen-lunch-menu.php"><button type="button" class="btn btn-success btn-xs">View menu</button></a>
                                                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
                                                        <i class="fa fa-user"> </i> Record Buffet Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view"
                                             style=" background-color: #00a85b;  color: white">
                                            <div class="col-sm-12">
                                                <h1>Dinner</h1>
                                                <div class="left col-xs-7">
                                                    <h2>Total wastage </h2>
                                                    <h2>Most Wasted Items </h2>
                                                    <ul class="list-unstyled">
                                                        <li><i class="fa fa-check-circle-o"></i> Pending</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <h1>&nbsp;&nbsp;--%</h1>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">

                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <a href="kitchen-dinner-menu.php"><button type="button" class="btn btn-success btn-xs">View menu</button></a>
                                                    <a href="kitchen-buffet-details.php"><button type="button" class="btn btn-primary btn-xs">
                                                            <i class="fa fa-user"> </i> Record Buffet Details
                                                        </button></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view"
                                             style="background-color: #de4e3c; color: white"">
                                            <div class="col-sm-12">
                                                <h1>Wastage</h1>
                                                <div class="left col-xs-7">
                                                    <h2>Total wastage </h2>
                                                    <h2>&nbsp;</h2>
                                                    <ul class="list-unstyled">
                                                        <li>&nbsp;</li>
                                                    </ul>
                                                </div>
                                                <div class="right col-xs-5 text-center">
                                                    <h1>&nbsp;&nbsp;&nbsp;14%</h1>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 bottom text-center">
                                                <div class="col-xs-12 col-sm-6 emphasis">

                                                </div>
                                                <div class="col-xs-12 col-sm-6 emphasis">
                                                    <button type="button" class="btn btn-success btn-xs">View</button>
                                                    <button type="button" class="btn btn-primary btn-xs">
                                                        <i class="fa fa-user"> </i> Record Buffet Details
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                </center>
                            </div>
                        </div>
                    </div>
                </div>



            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Success</h4>
                        </div>
                        <div class="modal-body">
                            <p>Details have been recorded!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
