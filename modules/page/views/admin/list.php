<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Page Name</th>
            <th>Added Date</th>
            <th>Contain</th>

            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>


        <?php foreach($page as $key){ ?>
            <tr>
                <td><?php echo $key->page_name; ?></td>
                <td><?php echo $key->added_date; ?></td>
                <td><?php echo $key->page_contain; ?></td>

                <td>
                    <?php
                    if(($key->status) == false){
                        echo 'Deactive';
                    }
                    else{
                        echo 'Active';
                    }
                    ?>

                </td>
                <td>
                    <a href="<?php echo site_url()?>/page/admin/page/edit/<?php echo $key->page_id?>">
                        <button type="button" class="btn btn-lg btn-warning" style="height:35px; padding:5px;">Edit</button></a>
                    <button onclick="page.delete('<?php echo $key->page_id;?>')" type="button" class="btn btn-xs btn-danger" style="height:35px; padding:5px;" ><b>Delete</b></button>
                    </a>
                </td>
            </tr>
        <?php  }?>-


        </tbody>
    </table>
</div>