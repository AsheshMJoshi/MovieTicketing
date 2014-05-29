<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico"/>

    <title><?php echo $header?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_new/bootstrap/docs/dist/css/bootstrap.min.css "/>
    <link href="<?php echo base_url()?>assets/css_new/bootstrap/docs/dist/css/bootstrap-theme.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/css_new/bootstrap/docs/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>






</head>
<body>

<div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">BLOG</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">PAGE</a></li>


                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Sales

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Orders</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Reports</a></li>
                        <li><a href="#">Coupons</a></li>
                    </ul>
                </li>
                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Content

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Movies</a></li>
                        <li><a href="#">Shows</a></li>
                        <li><a href="#">Pages</a></li>
                        <li><a href="#">Gallary</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>
                </li>
                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Cinemas

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add Cinemas</a></li>
                        <li><a href="#">Add Parking info</a></li>

                    </ul>
                </li>
                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Administration

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Add settings</a></li>
                        <li><a href="#">Add Admin</a></li>
                    </ul>
                </li>

                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Action

                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('home/index');?>">Front-End Page</a></li>
                        <li><a href="#">Dashboard</a></li>
                        <li><a href="<?php echo site_url('admin/login/logout');?>">Logout</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->

<br/><br/>
<hr/>

    <div class="container">

        <!-- Main component for a primary marketing message or call to action -->
        <div class="jumbotron">

            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
            <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>