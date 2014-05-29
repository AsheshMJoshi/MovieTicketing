

<?php   echo validation_errors();
echo form_open('setting/update');
?>

<h2 class="sub-header">Editing Setting</h2><h3>Make Changes under given boxes</h3>
<div class="table-responsive">
    <table class="table table-striped">
        <tr>
            <?php foreach($setting as $key){?>
            <th>key</th>
            <td>
                <input type="hidden" name="key" value="<?php echo $key -> key;?>"/>
            <?php echo $key ->key;?>

            </td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
                <input type="text" name="value" value="<?php echo $key-> value;?>"  placeholder="Enter Value" required/>
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





