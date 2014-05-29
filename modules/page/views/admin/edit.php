

<?php   echo validation_errors();
echo form_open('page/admin/page/update');
?>

<h2 class="sub-header">Editing Page</h2><h3>Make Changes under given boxes</h3>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <?php foreach($page as $key){?>
            <th>Article topic</th>
            <td>
                <input type="hidden" name="page_id" value="<?php echo $key -> page_id;?>"/>
                <input type="text" name="page_name" value="<?php echo $key-> page_name;?>"  placeholder="Enter Topic" required/>
                <input type="hidden" name="modified_date"  value ="<?php ?>" required/>
            </td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
                <textarea name="page_contain" rows="10" cols="50" placeholder="Enter Description" required><?php echo $key -> page_contain;?></textarea>
            </td>
        </tr>

        <tr>
            <th>Meta-Keywords</th>
            <td>
                <textarea name="meta_keywords" rows="10" cols="50" placeholder="Enter Description" required><?php echo $key -> meta_keywords;?></textarea>
            </td>
        </tr>
        <tr>
            <th>Meta-Description</th>
            <td>
                <textarea name="meta_description" rows="10" cols="50" placeholder="Enter Description" required><?php echo $key -> meta_description;?></textarea>
            </td>
        </tr>
        <tr>
            <th>Status</th>
            <td>
                <?php if($key->status == true){?>
                    ON <input type="radio" name="status" value="1" checked/>
                    OFF <input type="radio" name="status" value="0"/>
                <?php }
                else{?>
                    ON <input type="radio" name="status"  value="1" />
                    OFF <input type="radio" name="status" value="0" checked/>

                <?php } ?>
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit" value="save" class="btn btn-lg btn-warning" style="height:35px; padding:5px;"/>


                <a href="javascript:history.back()" onclick="return cancelForm()"><button type="button" name="cancel" class="btn btn-lg btn-danger" style="height:35px; padding:5px;">CANCEL</button>
                    <?php }//end of foreach
                    form_close();
                    ?>
            </td>

        </tr>




    </table>
</div>





