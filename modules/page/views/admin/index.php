<div id="successMsg"></div>
<h1>Page</h1>
<a class="btn btn-lg btn-primary" href="<?php echo site_url('page/admin/page/add'); ?>" role="button">+ADD Page</a>

<div id="page-list-block"></div>



<script>

    var page={
        delete:function(id)
        {
            if(confirm('Are you sure to delete?')){
                $.post('<?php echo site_url('page/admin/page/delete')?>/'+id,null,function(data){
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
            $.get('<?php echo site_url('page/admin/page/lists/')?>',null,function(data){
                $('#page-list-block').html(data);

            });
        }

    };





    $(document).on('ready',function()
    {
        page.list();
    });

</script>



























