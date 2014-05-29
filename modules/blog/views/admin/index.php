<div id="successMsg"></div>
<!---DIV to show list of blog in aajax--->
        <div id="blog-list-block"></div>









<script>

    var blog={
        delete:function(id)
        {
            if(confirm('Are you sure to delete?')){
                $.post('<?php echo site_url('blog/admin/blog/delete')?>/'+id,null,function(data){
                    if(data.success)
                    {
                        $('#successMsg').html("<div class='alert alert-success'><strong>Deletion!</strong> Successful !!!</div>");
                        blog.list();
                    }else{
                        $('#successMsg').html("<div class='alert alert-success'><strong>Deletion!</strong> UnSuccessful !!!</div>");
                        blog.list();
                    }
                },'JSON');

            }
            return false;
        },
        list:function()
        {
            $.get('<?php echo site_url('blog/admin/blog/lists/')?>',null,function(data){
                $('#blog-list-block').html(data);

            });
        }

    };





    $(document).on('ready',function()
    {
        blog.list();
    });

</script>