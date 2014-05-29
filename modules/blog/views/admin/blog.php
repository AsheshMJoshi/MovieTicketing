<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php foreach($cmt as $key){?>
<div class="container">
<h1>Hell</h1>
    <div class="row">

    <div class="col-sm-8 blog-main">

        <div class="blog-post">

            <h2 class="blog-post-title"><?php echo $key -> title;?></h2>
            <p class="blog-post-meta"><?php echo $key -> added_date;?> by <a href="#">Marks</a></p>

            <p><?php echo $key -> description;?></p>
        </div><!-- /.blog-post -->
        <br>
        <br>
        <?php echo $key -> name;?>
        <p><?php echo $key -> comment;?></p>
        <p><?php echo $key -> added_date;?></p>



        <!--                facebook-->


                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" data-href="http://localhost/blog_project/index.php/blog/admin/blog/show/<?php echo $key->blog_id;?>" data-numposts="5" data-colorscheme="light"></div>








    </div>

</div><!-- /.row -->
<?php }?>