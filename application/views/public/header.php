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
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui-1.10.4.custom.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="offcanvas.css" rel="stylesheet">


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
                <li class="active"><a href="<?php echo site_url('blog/index')?>">Home</a></li>
                <li><a href="#">BLOG</a></li>
                <?php

                foreach($head_list as $key){
                    $id = $key->page_id;
                    ?>
                    <li><a href="<?php echo site_url();?>/page/show/<?php echo $key -> page_id;?>"><?php echo $key -> page_name?></a></li>


                <?php  } ?>

                <li><a href="#contact">Contact</a></li>

            </ul>
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
</div><!-- /.navbar -->

<br/><br/>

<div class="container">


