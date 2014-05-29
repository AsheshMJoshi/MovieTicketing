

<?php   echo validation_errors();
if(isset($error)){
    echo $error;
}
echo form_open_multipart('setting/insert')
?>

<h2 class="sub-header">Adding Setting</h2>
<div class="table-responsive">
    <table class="table table-striped">

        <!--<form name="gallery" method="post" action="<?php //echo site_url();?>/admin/gallery/insertGallery" enctype="multipart/form-data">-->


        <tr>
            <td>KEY</td>
            <td><input type="text" name="key" placeholder ="Enter Key"/></td>
        </tr>
        <tr>
            <td>Value</td>
            <td><input type="text" name="value" placeholder ="Enter value"/></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" /><input type="reset" name="reset" value="Reset" /></td>
        </tr>
    </table>
    </form>

    </table>
</div>






