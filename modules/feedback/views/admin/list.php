


<div class="table-responsive">
    <table class="table table-striped">
        <thead>
        <tr>
            <th>#</th>
            <th>Email From</th>

            <th>Date</th>
            <th>Status</th>
            <th>Action</th>


        </tr>
        </thead>
        <tbody>
        <?php foreach($feedback as $key){?>
            <tr>
                <td><?php ?></td>
                <td><a href="<?php echo site_url();?>/feedback/admin/feedback/read/<?php echo $key -> id;?>"><?php echo $key -> email;?></a></td>

                <td><?php echo $key -> send_date;?></td>
                <td>
                    <?php if($key -> flag == true){
                        echo 'UnRead';
                    }
                    else{
                        echo 'Read';
                    }?>
                </td>
                 <td>
                    <a class="btn btn-sm btn-warning" href="#" role="button">REPLY</a>
                    <button onclick="feedback.delete('<?php echo $key->id;?>')" type="button" class="btn btn-xs btn-danger" style="height:35px; padding:5px;" ><b>Delete</b></button>
                </td>
            </tr>






        <?php } ?>
        </tbody>
    </table>

    <div style="text-align: center;"><?php echo $this->pagination->create_links();?></div>
</div><!--/span-->