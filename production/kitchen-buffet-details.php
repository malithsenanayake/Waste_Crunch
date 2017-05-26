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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

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
            <div class="page-title">
                <div style="margin-top: 58px;">
                    <div class="row" style="background-color: #3498db">
                        <div class="title_left">
                            <h1 style="color: white"> &nbsp; Record Kitchen Buffet Details</h1>
                        </div>
                        <div class="title_right">
                        </div>
                    </div>
                </div>

            </div>
            <br>
            <br> <br>
            <br> <br>
            <br>
            <h3 class="box-title"> Entree items </h3>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>Least wasted </th>
                        <th> Most wasted </th>
                        <th> Wastage percentage > 50% </th>

                    </tr>

                    <tr>
                        <td> <div class="form-group">

                                <label>  </label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios5" id="optionsRadios113" value="option13"> Chicken salad
                                </label>
                                <br>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios5" id="optionsRadios114" value="option14"> Bread buns
                                </label>
                                <br>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios5" id="optionsRadios115" value="option15"> Soup
                                </label>
                            </div>  </td>

                        <td>
                            <div class="form-group">

                                <label>  </label>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios6" id="optionsRadios116" value="option16"> Chicken salad
                                </label>
                                <br>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios6" id="optionsRadios117" value="option17"> Bread buns
                                </label>
                                <br>
                                <br>

                                <label class="radio-inline">
                                    <input type="radio" name="optionsRadios6" id="optionsRadios118" value="option18"> Soup
                                </label>
                            </div>
                        </td>

                        <td>
                            <br>


                            <input type="checkbox" >  yes <br>
                            <br>
                            <input type="checkbox" >  yes <br>
                            <br>
                            <input type="checkbox" >  yes <br>

                        </td>
                    </tr>

                    </tfoot>
                </table>
            <h3 class="box-title"> Main Menu Items </h3>
            <table id="example3" class="table table-bordered table-hover">
                <thead>
                <tr>
                    <th>Least wasted </th>
                    <th> Most wasted </th>
                    <th> Wastage percentage > 50% </th>

                </tr>

                <tr>
                    <td> <div class="form-group">

                            <label>  </label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios13" value="option13"> Pasta
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios14" value="option14"> Chicken devil
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios15" value="option15"> Noodles
                            </label>
                        </div>  </td>

                    <td>
                        <div class="form-group">

                            <label>  </label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios16" value="option16"> Pasta
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios17" value="option17"> Chicken devil
                            </label>
                            <br>
                            <br>

                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios18" value="option18"> Noodles
                            </label>
                        </div>
                    </td>

                    <td>
                        <br>


                        <input type="checkbox" >  yes <br>
                        <br>
                        <input type="checkbox" >  yes <br>
                        <br>
                        <input type="checkbox" >  yes <br>

                    </td>
                </tr>

                </tfoot>
            </table>
            <h3 class="box-title"> Dessert Items </h3>
            <table id="example4" class="table table-bordered table-hover" >
                <thead>
                <tr>
                    <th>Least wasted </th>
                    <th> Most wasted </th>
                    <th> Wastage percentage > 50% </th>

                </tr>

                <tr>
                    <td> <div class="form-group">

                            <label> </label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios133" value="option13" > Orange pudding
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios143" value="option14"> Chocolate moose
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios5" id="optionsRadios153" value="option15"> Fruit triffle
                            </label>
                        </div>  </td>

                    <td>
                        <div class="form-group">

                            <label> </label>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios163" value="option16"> Orange pudding
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios137" value="option17"> Chocolate moose
                            </label>
                            <br>
                            <br>
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios6" id="optionsRadios138" value="option18"> Fruit triffle
                            </label>
                        </div>
                    </td>

                    <td>
                        <br>


                        <input type="checkbox" >  yes <br>
                        <br>
                        <input type="checkbox" >  yes <br>
                        <br>
                        <input type="checkbox" >  yes <br>

                    </td>
                </tr>

                </tfoot>
            </table>

        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>