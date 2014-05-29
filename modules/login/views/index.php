<html lang="en"><head>
    <!--    <meta charset="utf-8">-->
    <!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--    <meta name="description" content="">-->
    <!--    <meta name="author" content="">-->
    <!--    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">-->


    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css_new/bootstrap/docs/dist/css/bootstrap.min.css "/>

    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body style="background-color : #c0c0c0;">
<br>
<br>
<br>
<br>

<?php
if($this->session->flashdata('error'))
{
    echo $this->session->flashdata('error');
}
?>


<center>
    <div class="container">

        <form action="<?php echo site_url('login/admin/login/validate')?>" method="post"  class="form-signin">
            <h2 class="form-signin-heading">Please Login First</h2>
            <input name = "admin_name" class="form-control" placeholder="Username" type="text" style="width: 300px;" required=""/>
            <br/>
            <input name = "password" class="form-control" placeholder="Password" type="password" style="width: 300px;" required=""/>
            <!--        <label class="checkbox">-->
            <br/>
            <input value="remember-me" type="checkbox"> Remember me(Doesn't work now)
            <!--        </label>--><br>
            <input class="btn btn-lg btn-primary btn-block" type="submit" name = "submit" value ="login" style="width: 300px"/>
        </form>

    </div>
</center><!-- /container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->

<?php $this->load->view('public/footer');?>
</body></html>