<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="row row-offcanvas row-offcanvas-right">

    <div class="col-xs-12 col-sm-9">
        <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
        </p>





        <div class="jumbotron">

            <h1 style="color: #ff1c00"><b> Nepali Blog</b></h1>

            <p>Welcome to the blog of Nepal. Please like and share...</p>
            <div class="fb-like" data-href="https://www.facebook.com/quoteslink?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>
    </div>
</div>

<?php foreach($cmt as $key){?>
    <div class="container">



        <div class="row">

            <div class="col-sm-8 blog-main">

                <div class="blog-post">
                    <h2 class="blog-post-title"><?php echo $key -> title;?></h2>
                    <p class="blog-post-meta"><?php echo $key -> added_date;?> by <a href="#">Mark</a></p>

                    <p><?php echo $key -> description;?></p>
                </div><!-- /.blog-post -->
                <br>
                <br>
                <?php echo $key -> name;?>
                <p><?php echo $key -> comment;?></p>
                <p><?php echo $key -> added_date;?></p>

<!--                facebook-->

                <?php foreach($setting as $set){?>
                <?php if($set -> key == 'facebook_cmt' && $set -> value == '1'){?>

                        <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-comments" data-href="http://localhost/blog_project/index.php/blog/show/<?php echo $key->blog_id;?>" data-numposts="5" data-colorscheme="light"></div>

                    <?php }?>

                    <?php if($set -> key == 'local_cmt' && $set -> value == '1'){?>
                    <?php echo 'local cmt';?>
                    <?php }?>

                <?php }?>


            </div>

        </div><!-- /.row -->

    </div>

<?php }?>
