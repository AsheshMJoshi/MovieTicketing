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


                <div class="row">
            <?php foreach($blog as $key){?>

                <div class="col-6 col-sm-6 col-lg-4">
                    <a href="#"><h2><?php echo $key -> title;?></h2></a>
                    <p><?php echo $key -> description;?></p>
                    <p><a class="btn btn-default" href="<?php echo site_url();?>/blog/show/<?php echo $key-> blog_id;?>" role="button">View details &raquo;</a></p>
                </div>

            <?php } ?>
            </div>
                <!--/row-->
            <div style="text-align:center;"><?php echo $this->pagination->create_links();?></div>
        </div><!--/span-->
    </div>
</div>