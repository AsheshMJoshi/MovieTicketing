<h1>FeedBack From Users</h1>
<div id="successMsg"></div>
<!---DIV to show list of blog in aajax--->
<div id="feedback-list-block"></div>


<script>

    var feedback={
        delete:function(id)
        {
            if(confirm('Are you sure to delete?')){
                $.post('<?php echo site_url('feedback/admin/feedback/delete/')?>/'+id,null,function(data){
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
            $.get('<?php echo site_url('feedback/admin/feedback/lists/')?>',null,function(data){
                $('#feedback-list-block').html(data);

            });
        }

    };





    $(document).on('ready',function()
    {
        feedback.list();
    });

</script>