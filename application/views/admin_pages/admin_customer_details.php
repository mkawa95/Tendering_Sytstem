<?php
/**
 * Created by PhpStorm.
 * User: mkawa
 * Date: 4/9/2018
 * Time: 7:34 AM
 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url()?>nice/img/favicon.png">

    <title>marketing site</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url()?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url()?>nice/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url()?>nice/css/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>nice/css/style-responsive.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>nice/css/xcharts.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">

    <!--    Data tables -->
    <link href="<?php echo base_url()?>/DataTables/css/dataTables.bootstrap.min.css" rel=" stylesheet">
    <link href="<?php echo base_url()?>nice/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.css"/>

    <!--custom style sheet-->
    <style>
        .icon_menu{
            color: black;
        }
        .image-box{
            border: 1px solid #D5D8DC;
            padding: 5px;
            margin: 15px;
            border-radius: 0;
            min-height: 150px;
        }
        .edit{
            background-color: orange;
            border-radius: 4px;
            padding: 5px;
            margin: 5px;
        }
        .delete{
            background-color: firebrick;
            border-radius: 4px;
            padding: 5px;
            margin: 5px;
        }
        .items{
            border: 1px solid #D5D8DC ;
            padding: 10px;
            background-color: white;
        }
        ul.sidebar-menu li ul.sub li a {

            padding: 0 0 0 32px;

            line-height: 30px;

            height: 30px;

            -webkit-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

            color: #d0d8df;

            font-size: small;

        }
        ul.sidebar-menu li a{

            color: #d0d8df;

            text-decoration: none;

            display: block;

            padding: 8px 0 8px 15px;

            font-size: small;

            line-height: 25px;

            font-weight: 300;

            font-family: "Lucida Grande", Helvetica, Arial, Verdana, sans-serif;

            outline: none;

            -webkit-transition: all 0.3s ease;

            -moz-transition: all 0.3s ease;

            -o-transition: all 0.3s ease;

            transition: all 0.3s ease;

        }
    </style>
</head>

<body style="background-color: whitesmoke">
<!-- container section start-->
<div id="container" class="">
    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>

        <!--logo start-->
        <a href="index.html" class="logo">MI<span class="lite">MARKET</span></a>
        <!--logo end-->
        <h4 style="margin-left: 250px">ONLINE MARKETING SYSTEM ADMINISTRATION</h4>
        <!--  search form start -->


        <div class="top-nav notification-row" >
            <ul class="nav pull-right top-menu">
                <li id="task_notificatoin_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-task-l"></i>
                        <span class="badge bg-important"><?php foreach ($newStore as $new) echo $new['total']?></span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <li>
                            <p class="blue">New/Unverified stores</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">New Stores</div>
                                </div>
                                <div class="">
                                    <p class="">You have 8 new stores</p>
                                </div>

                            </a>
                        </li>
                        <li class="external">
                            <a href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">See All new stores</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="<?php echo base_url()?>/Images/systemImages/default_user.png" width="30" height="30" >                            </span>
                        <span class="username"><?php echo $_SESSION['admin_name']?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li class="eborder-top">
                            <a href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-user"></i> My Profile</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url()?>index.php/Admin/logout"><i class="fa fa-power-off"></i> Log Out</a>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>

    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">

                <li class="active">
                    <a class="" href="<?php echo base_url()?>index.php/Admin/home"><i class="icon_house_alt"></i> <span>Home</span></a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Companies</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class=" " href="<?php echo base_url()?>index.php/Admin/EnterprisesView">
                                <i class="fa fa-angle-double-right"></i>All stores (<?php foreach ($allStore as $store) echo $store['total']?>) </a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getNewStoreDetails">
                                <i class="fa fa-angle-double-right"></i>New stores (<?php foreach ($newStore as $new) echo $new['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getVerifiedStoreDetails">
                                <i class="fa fa-angle-double-right"></i>Verified stores (<?php foreach ($verifiedStore as $verified) echo $verified['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getSuspendedStoreDetails">
                                <i class="fa fa-angle-double-right"></i>Suspended stores (<?php foreach ($suspendedStore as $suspended) echo $suspended['total']?>)</a></li>
                        <li><a class="" href="<?php echo base_url()?>index.php/Admin/getDeniedStores"><i class="fa fa-angle-double-right"></i>Denied stores</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Messages</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="<?php echo base_url()?>index.php/messages/validate"><i class="fa fa-angle-double-right"></i>Send message</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Conversations</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Incoming</a></li>
                        <li><a class="" href="#"><i class="fa fa-angle-double-right"></i>Sent messages</a></li>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Categories</span><span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <?php
                        foreach ($allCategory as $category){?>
                            <li><a class="" href="#"><i class="fa fa-angle-double-right"></i><?php echo $category['category']?> <span> ( <?php echo $category['total']?> )</span></a></li>
                        <?php }?>
                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Admin/getAllCustomers" class=""><i class="fa fa-plus"></i>
                        <span>Customers</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Admin/getAllAdministrators" class=""><i class="fa fa-plus"></i>
                        <span>Administrators</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="<?php echo base_url()?>index.php/Products/storeOrderReport?u=<?php echo $_SESSION['admin_id']?>" class=""><i class="fa fa-plus" aria-hidden="true"></i>
                        <span>Statistics</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-menu">
                <li class="sub">
                    <a class="" href="<?php echo base_url()?>index.php/Direct/UserSetting"><i class="fa fa-cog"></i> <span>Settings</span></a>
                </li>

                <li class="">
                    <a class="" href="<?php echo base_url()?>index.php/Admin/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--    sidebar end-->


    <section id="main-content">
        <section class="wrapper">
            <div class="row">
                <div class="col-lg-3">

                </div>
                <div class="col-lg-8">

                </div>
            </div>

            <div class="row">
                <div class="col-lg-10 col-sm-offset-1">
                    <h5 class="#"><i class="fa fa-dashboard"></i> <a href="#">Home</a>  <i class="fa fa-angle-double-right"></i><span><a href="#">Administrators</a></span></h5>
                    <section class="">
                        <div class="col-lg-11">
                            <?php $success_msg = $this->session->flashdata('success_msg');
                            if ($success_msg){?>
                                <div class="alert alert-success alert-dismissible"><?php echo $success_msg?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></div>
                                <?php
                            }
                            ?>
                            <div class="row items" >
                                <?php
                                if (isset($customerDetails)){
                                ?>
                                <div class="col-lg-12" style="background-color: darkslategrey; padding: 10px; border-radius: 0;">
                                    <div class="col-lg-9">
                                        <h5 style="color: white">Online marketing system, customer details</h5>
                                    </div>
                                    <div class="col-lg-3">
                                    </div>
                                </div>

                                <div class="col-sm-12" style="border: 1px solid #BDBDBD ; font-size: small">
                                    <div class="col-sm-3 image-box">
                                        <h5 style="text-align: center; background-color: whitesmoke; padding: 10px"><strong >Profile picture</strong></h5>
                                        <img width="90%" height="150" src="<?php echo base_url("/Images/systemImages/default_user.png") ?>" alt="No image">
                                    </div>

                                    <div class="col-sm-8" style="margin: 10px">
                                        <div style="background-color: #A4A4A4; padding: 5px; border: 1px solid #BDBDBD">
                                            <h5 style="font-size: small; color: white; text-align: center">Customer Registration Details</h5>
                                        </div>
                                        <div class="col-sm-12" style="border: 1px solid #BDBDBD; padding: 5px; font-size: small; background-color: whitesmoke">
                                            <?php if (isset($customerDetails)){
                                                ?>
                                                <div class="col-sm-12">
                                                    <label><strong>Full names: </strong></label><span style="text-transform: capitalize; color: cornflowerblue"> <?php echo $customerDetails->full_name?></span><br>
                                                    <label><strong>Username: </strong></label><span> <?php echo $customerDetails->username?></span><br>
                                                    <label><strong>Date registered: </strong></label><span style="color: chocolate"> <?php echo $customerDetails->user_register_date?></span><br>
                                                    <label><strong>user phone: </strong></label><span > <?php echo $customerDetails->phone?></span><br>
                                                    <label><strong>Email Address: </strong></label><span style="color: cornflowerblue"> <?php echo $customerDetails->email?></span><br>
                                                    <label><strong>Location: </strong></label><span> <?php echo $customerDetails->location?></span><br>

                                                    <button style="float: right" class="btn btn-danger"><i class="fa fa-trash"></i> Delete account</button>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
    </section>
</div>
<!-- statics end -->
<!-- javascripts -->
<script src="<?php echo base_url()?>nice/js/jquery.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-ui-1.10.4.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>nice/js/jquery-ui-1.9.2.custom.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo base_url()?>nice/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>nice/js/bootstrap-wysiwyg.js"></script>
<!-- nice scroll -->
<script src="<?php echo base_url()?>nice/js/jquery.scrollTo.min.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.nicescroll.js" type="text/javascript"></script>
<!-- charts scripts -->
<script src="<?php echo base_url()?>nice/assets/jquery-knob/js/jquery.knob.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="<?php echo base_url()?>nice/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
<script src="<?php echo base_url()?>nice/js/owl.carousel.js"></script>
<!-- jQuery full calendar -->
<script src="<?php echo base_url()?>nice/js/fullcalendar.min.js"></script>
<!-- Full Google Calendar - Calendar -->
<script src="<?php echo base_url()?>nice/assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
<!--script for this page only-->
<script src="<?php echo base_url()?>nice/js/calendar-custom.js"></script>
<script src="<?php echo base_url()?>nice/js/jquery.rateit.min.js"></script>
<!-- custom select -->
<script src="<?php echo base_url()?>nice/js/jquery.customSelect.min.js"></script>
<script src="<?php echo base_url()?>nice/assets/chart-master/Chart.js"></script>

<!--custome script for all page-->
<script src="<?php echo base_url()?>nice/js/scripts.js"></script>
<script src="<?php echo base_url()?>nice/js/wysiwyg.js"></script>
<script src="<?php echo base_url()?>nice/summernote/summernote-lite.js"></script>

<script src="<?php echo base_url()?>/DataTables/js/dataTables.bootstrap.min.js" type="javascript"></script>
<script src="<?php echo base_url()?>/DataTables/js/jquery.dataTables.min.js"></script>
<script href="https://cdn.datatables.net/1.10.17/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.17/datatables.min.js"></script>

<!-- custom script for this page-->

<script>
    $('#enterprise').dataTable();
</script>
</html>
