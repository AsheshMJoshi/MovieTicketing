<?php foreach($feedback as $key){?>
<div class="container">
    <h1>MSG</h1>
    <div class="row">

        <div class="col-sm-8 blog-main">

            <div class="blog-post">

                <h2 class="blog-post-title"><?php echo $key -> Name;?></h2>
                <h2 class="blog-post-title"><?php echo $key -> email;?></h2>
                <p class="blog-post-meta"><?php echo $key -> send_date;?></p>
            <hr>
                <p><?php echo $key -> feedback;?></p>
            </div><!-- /.blog-post -->

        </div>

    </div><!-- /.row -->
<?php }?>