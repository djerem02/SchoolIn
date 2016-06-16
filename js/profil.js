$(document).ready(function(){
    $("#tag").keyup(function(e){
        if(e.keyCode == 13) { // KeyCode de la touche entrée
            value=$(this).val();
            $('.tag').prepend("<div class='chip'><a href='group.php'>"+value+"</a><i class='material-icons close'>close</i></div>");
            $(this).val("");
            $.ajax({
                type: "POST",
                url: 'Controller/AjaxController.php',
                cache: false,
                data : {
                    ajax: "1",
                    method: "addGroup",
                    groupName:value

                },
                success: function (res)
                {

                }
            });
        }


    });

});