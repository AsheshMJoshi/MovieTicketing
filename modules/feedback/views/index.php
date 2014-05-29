<!--google map-->
<style>
    #map_canvas {
        width: 700px;
        height: 300px;
    }
</style>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
    function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
            center: new google.maps.LatLng(27.7140433, 85.3084449),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


<div class="container">

    <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
            <p class="pull-right visible-xs">
                <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
            </p>
            <div class="jumbotron">
                <h1 style="color: red">Contact Us</h1>
                <p>  <p><h3>
                    Nepal Blog Board</h3></br>
                Blog Service Center</br>
                P.O. Box: 11018</br>
                Bhrikuti Mandap, Kathmandu,</br>
                NepalTel : 977.1.4256909</br>
                Fax : 977.1.4256910</br>
                E-mail : info@ntb.org.np
                </p></p>
                <div class="fb-like" data-href="https://www.facebook.com/quoteslink?ref=hl" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
                <iframe scrolling="no" border="0" frameborder="0" marginwidth="0" marginheight="0" allowtransparency="true" src="http://www.ashesh.com.np/linknepali-time.php?time_only=no&font_color=333333&aj_time=yes&font_size=12&line_brake=0&bikram_sambat=0&api=431159e022" width="308" height="22"></iframe>

        </div><!--/span-->
            <!--        google map-->
<!--                    <div style="border: #000000 solid 3px;" id="map_canvas"></div>-->
            <div style="float: left; margin-left: 190px">
            <p style="color: red">Write to us if you've got any query or suggestion.</p>

            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/contact/insert">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-10">
                        <input name="name" type="name" class="form-control" id="inputEmail3" style="width: 300px" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                        <input name="email" style="width: 300px" type="email" class="form-control" id="inputPassword3" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Message</label>
                    <div class="col-sm-10">

                            <textarea name="description" style="width: 300px" rows="3" id="inputEmail3" placeholder="your message.."></textarea>

                        </div>
                </div>



                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
            </div>
            <!--        google map-->
            <div style="border: #000000 solid 3px; margin-left: 20px" id="map_canvas"></div>

    </div>

<!--        google map-->
<!--        <div id="map_canvas"></div>-->



