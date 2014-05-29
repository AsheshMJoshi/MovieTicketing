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
                <li class="active"><a href="<?php echo site_url('blog/admin/blog')?>">Home</a></li>
                <li><a href="#about">BLOG</a></li>
               <?php

               foreach($head_list as $key){
                   $id = $key->page_id;
                   ?>
                   <li><a href="<?php echo site_url();?>/page/admin/page/show/<?php echo $key -> page_id;?>"><?php echo $key -> page_name?></a></li>


              <?php  } ?>

                <li class="dropdown">

                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"> Message
                        <?php $i=0;
                        foreach($notify as $key2){
                        if($key2 -> flag == true){
                                $i++;
                                echo $i;
                                }
                     }?>
                        <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('feedback/admin/feedback/index')?>">From Users</a></li>
                        <li><a href="<?php echo site_url('advertisement/admin/advertisement/index')?>">Advertisers</a></li>
                    </ul>
                </li>



                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">Settings <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo site_url('page/admin/page')?>">ADD PAGE</a></li>
                        <li><a href="<?php echo site_url('setting/index')?>">Comment Settings</a></li>
                        <li><a href="<?php echo site_url('login/admin/login/logout');?>">LOGOUT</a></li>
                        <li class="divider"></li>
                        <li class="dropdown-header">Enable comment type</li>
                        <li><a><form>
                                <input type="checkbox" name="facebook" value="on"/> Facebook<br/>
                                <input type="checkbox" name="Local" value="on"/> Local<br/><br/>
                             <input type="submit" value="Okay" title="Press okay and Page will load"/>
                        </form></li></a>

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