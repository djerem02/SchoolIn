<?php

  include_once('Notes.php');

  $objNotes = new Notes();

  $notes = $objNotes->getAll();

  print_r($notes);exit;
 ?>
