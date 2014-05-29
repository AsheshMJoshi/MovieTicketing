<div id="successMsg"></div>
<h1>Settings</h1>
<a class="btn btn-lg btn-primary" href="<?php echo site_url('setting/add'); ?>" role="button">+ADD Setting</a>
<div id="setting-list-block"></div>



<script>

    var settings={
        delete:function(id)
        {
            if(confirm('Are you sure to delete?')){
                $.post('<?php echo site_url('setting/delete/')?>/'+id,null,function(data){
                    if(data.success)
                    {
                        $('#successMsg').html("<div class='alert alert-success'><strong>Deletion!</strong> Successful !!!</div>");
                        page.list();
                    }else{
                        $('#successMsg').html("<div class='alert alert-success'><strong>Deletion!</strong> UnSuccessful !!!</div>");
                        page.list();
                    }
                },'JSON');

            }
            return false;
        },
        list:function()
        {
            $.get('<?php echo site_url('setting/lists')?>',null,function(data){
                $('#setting-list-block').html(data);

            });
        }

    };





    $(document).on('ready',function()
    {
        settings.list();
    });

</script>