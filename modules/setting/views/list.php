<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>KEY</th>
            <th>Value</th>

            <th>Action</th>
        </tr>
        </thead>
        <tbody>


        <?php foreach($setting as $key){ ?>
            <tr>
                <td><?php echo $key -> key; ?></td>
                <td><?php echo $key -> value; ?></td>
                <td>
                    <a href="<?php echo site_url()?>/setting/edit/<?php echo $key -> key?>">
                        <button type="button" class="btn btn-lg btn-warning" style="height:35px; padding:5px;">Edit</button></a>
                    <button onclick="settings.delete('<?php echo $key->key;?>')" type="button" class="btn btn-xs btn-danger" style="height:35px; padding:5px;" ><b>Delete</b></button>
                    </a>
                </td>
            </tr>
        <?php  }?>-


        </tbody>
    </table>
</div>