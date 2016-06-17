


$(document ).ready(function()
{

    $.ajax({
          type: "POST",
          url: 'Controller/AjaxController.php',
          cache: false,
          data : {
                  ajax: "1",
                  method: "getNotes"
              },
          success: function (res)
          {
              response=JSON.parse(res);
              $.each(response, function( index, value ) {

                 $("#note_"+value.id).click(function()
                  {
                      $('.view-note').html('<input type="hidden" id="id_note" value="'+value.id+'" /><textarea name="note_edit_'+value.id+'" id="text_note" rows="40" cols="50" style="height:400px;">'+ value.text_note +'</textarea><a  class="saveNote waves-effect waves-light btn">Enregistrer</a>');
                  });
              });
          }
      });

      $(".view-note").on("click", "a.saveNote", function(){
            var id_note = $('#id_note').val();

            $.ajax({
                type: "POST",
                url: 'Controller/AjaxController.php',
                data:{
                    ajax :1,
                    id_note : id_note,
                    text_note : $("#text_note").val(),
                    method: 'save-note'
                },
                success:function(res)
                {
                    if(res)
                    {
                        $('.view-note').html('<div class="alert alert-success"><strong>Bravo !</strong> Modification enregistrer.</div>')
                    }

                }

            });
        });

});
