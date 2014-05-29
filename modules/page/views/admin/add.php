

<?php   echo validation_errors();
if(isset($error)){
    echo $error;
}
echo form_open_multipart('page/admin/page/insert')
?>

<h2 class="sub-header">Adding Page</h2>
<div class="table-responsive">
    <table class="table table-striped">

        <!--<form name="gallery" method="post" action="<?php //echo site_url();?>/admin/gallery/insertGallery" enctype="multipart/form-data">-->


        <tr>
            <td>Page Name</td>
            <td><input type="text" name="page_name" /></td>
        </tr>
        <tr>
            <td>Page url</td>
            <td><input type="text" name="page_url" /></td>
        </tr>
        <tr>
            <td>Page Contain</td>
            <td><textarea type="text" name="page_contain" rows="5" cols="50"></textarea></td>
        </tr>
        <tr>
            <td>Meta-Keywords</td>
            <td><input type="text" name="meta_keywords" /></td>
        </tr>
        <tr>
            <td>Meta-Description</td>
            <td><input type="text" name="meta_description" /></td>
        </tr>
        <tr>
            <td>Added Date</td>
            <td><input type="hidden" name="added_date" value="<?php echo date('y-m-d');?>"/>
                <?php echo date('y-m-d');?>
            </td>
        </tr>


        <tr>
            <th>Status</th>
            <td>
                ON <input type="radio" name="status"  value="true" checked/>
                OFF <input type="radio" name="status"  value="false"/>
            </td>
        </tr>


        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Submit" /><input type="reset" name="reset" value="Reset" /></td>
        </tr>
    </table>
    </form>

    </table>
</div>






