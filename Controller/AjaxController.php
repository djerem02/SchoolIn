<?php

include_once('../Models/Notes.php');
$objNote = new Notes();

if($_POST['method'] && $_POST['method'] == 'getNotes'):

    $notes = $objNote->getAll();

    $i =0;
    $json_return = array();
    foreach($notes as $note):
        $json_return[$i]['id'] = $note['id'];
        $json_return[$i]['text_note'] = $note['text_note'];
        $i++;
    endforeach;

    echo json_encode($json_return);

elseif($_POST['method'] && $_POST['method'] == 'save-note'):

    if(isset($_POST['id_note'])):
          if($objNote->updateNote($_POST['id_note'], 'new title', $_POST['text_note'], date('Y-m-d'))):
              echo json_encode(true);
          else:
              echo json_encode(false);
          endif;
    else:


    endif;

endif;

?>
