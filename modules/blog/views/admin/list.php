<h1>Blog</h1>

        <div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Topic</th>
            <th>Desp</th>
            <th>Added Date</th>
            <th>Modified Date</th>
            <th>status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($blog as $key){?>
            <tr>
                <td><?php ?></td>
                <td><a href="<?php echo site_url();?>/blog/admin/blog/show/<?php echo $key -> blog_id;?>"><?php echo $key -> title;?></a></td>
                <td><?php echo $key -> description;?></td>
                <td><?php echo $key -> added_date;?></td>
                <td><?php echo $key -> modified_date;?></td>
                <td><?php
                    if(($key->status) == false){
                        echo 'Deactive';
                    }
                    else{
                        echo 'Active';
                    }
                    ?></td>
                <td>
                    <a class="btn btn-sm btn-warning" href="#" role="button">EDIT</a>
                    <button onclick="blog.delete('<?php echo $key->blog_id;?>')" type="button" class="btn btn-xs btn-danger" style="height:35px; padding:5px;" ><b>Delete</b></button>
                </td>
            </tr>






        <?php } ?>
        </tbody>
    </table>

    <div style="text-align: center;"><?php echo $this->pagination->create_links();?></div>
        </div><!--/span-->