<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="container">
    <?php foreach($contain as $key ){?>
        <div class="jumbotron">

            <h1 style="color: #ff1c00"><b><?php echo $key->page_name;?></b></h1>

            <p> <?php echo $key -> page_contain;?></p>

            <div class="fb-like" data-href="https://www.facebook.com/quoteslink?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        </div>





    <?php } ?>

</div>