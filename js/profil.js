$(document ).ready(function()
{
    $("#tag").keyup(function(e){
        if(e.keyCode == 13) { // KeyCode de la touche entrée
            var value = $(this).val();
            $('.tag').prepend("<div class='chip'><a href='group.php'>"+value+"</a><i class='material-icons close'>close</i></div>");
            $(this).val("");
            $.ajax({
                type: "POST",
                url: 'Controller/AjaxController.php',
                data:{
                    ajax :1,
                    groupName:value,
                    action:'addGroup'
                },
                success:function(res)
                {
                    $('.tag').prepend("<div class='chip'><a href='group.php'>"+value+"</a><i class='material-icons close'>close</i></div>");
                    $(this).val("");
                }

            });
        }
    });
});
