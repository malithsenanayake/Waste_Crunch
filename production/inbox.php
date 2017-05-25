<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Green Pay | CEB Portal </title>
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
              <li><a><i class="fa fa-edit"></i> Set Values</a>
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
                  <li><a href="index1.html">inbox</a></li>
                </ul>
              </li>
            </ul>
          </div>
          <div class="menu_section">
            <h3>Performance</h3>
            <ul class="nav side-menu">
              <li><a><i class="fa fa-desktop"></i>reports <span class="fa fa-chevron-down"></span></a>
                <ul class="nav child_menu">
                  <li><a href="index1.html">Financial reports</a></li>
                  <li><a href="index1.html">V2G performance reports</a></li>
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
          <div class="">

            <div class="page-title">
              <div class="title_left">
                <h3>Inbox</h3>
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

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>
                    </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="row">
                      <div class="col-sm-3 mail_list_column">
                        <button id="compose" class="btn btn-sm btn-success btn-block" type="button">COMPOSE</button>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>Dennis Mugo <small>3.00 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-star"></i>
                            </div>
                            <div class="right">
                              <h3>Jane Nobert <small>4.09 PM</small></h3>
                              <p><span class="badge">To</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle-o"></i><i class="fa fa-paperclip"></i>
                            </div>
                            <div class="right">
                              <h3>Musimbi Anne <small>4.09 PM</small></h3>
                              <p><span class="badge">CC</span> Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-paperclip"></i>
                            </div>
                            <div class="right">
                              <h3>Jon Dibbs <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              .
                            </div>
                            <div class="right">
                              <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              .
                            </div>
                            <div class="right">
                              <h3>Debbis & Raymond <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-circle"></i> <i class="fa fa-edit"></i>
                            </div>
                            <div class="right">
                              <h3>Dennis Mugo <small>3.00 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                        <a href="#">
                          <div class="mail_list">
                            <div class="left">
                              <i class="fa fa-star"></i>
                            </div>
                            <div class="right">
                              <h3>Jane Nobert <small>4.09 PM</small></h3>
                              <p>Ut enim ad minim veniam, quis nostrud exercitation enim ad minim veniam, quis nostrud exercitation...</p>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /MAIL LIST -->

                      <!-- CONTENT MAIL -->
                      <div class="col-sm-9 mail_view">
                        <div class="inbox-body">
                          <div class="mail_heading row">
                            <div class="col-md-8">
                              <div class="btn-group">
                                <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                                <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                                <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                              </div>
                            </div>
                            <div class="col-md-4 text-right">
                              <p class="date"> 8:02 PM 12 FEB 2014</p>
                            </div>
                            <div class="col-md-12">
                              <h4> Donec vitae leo at sem lobortis porttitor eu consequat risus. Mauris sed congue orci. Donec ultrices faucibus rutrum.</h4>
                            </div>
                          </div>
                          <div class="sender-info">
                            <div class="row">
                              <div class="col-md-12">
                                <strong>Jon Doe</strong>
                                <span>(jon.doe@gmail.com)</span> to
                                <strong>me</strong>
                                <a class="sender-dropdown"><i class="fa fa-chevron-down"></i></a>
                              </div>
                            </div>
                          </div>
                          <div class="view-mail">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                              Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                            <p>Riusmod tempor incididunt ut labor erem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                              nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                              mollit anim id est laborum.</p>
                            <p>Modesed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                          </div>
                          <div class="attachment">
                            <p>
                              <span><i class="fa fa-paperclip"></i> 3 attachments — </span>
                              <a href="#">Download all attachments</a> |
                              <a href="#">View all images</a>
                            </p>

                          </div>
                          <div class="btn-group">
                            <button class="btn btn-sm btn-primary" type="button"><i class="fa fa-reply"></i> Reply</button>
                            <button class="btn btn-sm btn-default" type="button"  data-placement="top" data-toggle="tooltip" data-original-title="Forward"><i class="fa fa-share"></i></button>
                            <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Print"><i class="fa fa-print"></i></button>
                            <button class="btn btn-sm btn-default" type="button" data-placement="top" data-toggle="tooltip" data-original-title="Trash"><i class="fa fa-trash-o"></i></button>
                          </div>
                        </div>

                      </div>
                      <!-- /CONTENT MAIL -->
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
      </div>
    </div>

    <!-- compose -->
    <div class="compose col-md-6 col-xs-12">
      <div class="compose-header">
        New Message
        <button type="button" class="close compose-close">
          <span>×</span>
        </button>
      </div>

      <div class="compose-body">
        <div id="alerts"></div>

        <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor">
          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
            <ul class="dropdown-menu">
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li>
                <a data-edit="fontSize 5">
                  <p style="font-size:17px">Huge</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 3">
                  <p style="font-size:14px">Normal</p>
                </a>
              </li>
              <li>
                <a data-edit="fontSize 1">
                  <p style="font-size:11px">Small</p>
                </a>
              </li>
            </ul>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
            <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
            <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
            <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
            <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
            <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
            <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
            <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
            <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
            <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
            <div class="dropdown-menu input-append">
              <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
              <button class="btn" type="button">Add</button>
            </div>
            <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
          </div>

          <div class="btn-group">
            <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
            <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
          </div>

          <div class="btn-group">
            <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
            <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
          </div>
        </div>

        <div id="editor" class="editor-wrapper"></div>
      </div>

      <div class="compose-footer">
        <button id="send" class="btn btn-sm btn-success" type="button">Send</button>
      </div>
    </div>
    <!-- /compose -->

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>