<?php
    include_once('SchoolIn.php');

    class Notes extends SchoolIn
    {
        private $id;
        private $title;
        private $textNote;
        private $dateUpd;
        private $idUser;

        public function getId()
        {
              return $this->id;
        }

        public function getTitle()
        {
              return $this->title;
        }

        public function getTextNote()
        {
              return $this->textNote;
        }

        public function getDateUpd()
        {
              return $this->dateUpd;
        }

        public function getIdUser()
        {
              return $this->idUser;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_notes');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getNoteById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_notes
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }

        public function getNotesByUserId($id)
        {
            $to_return = array();
            return $this->getConnexion()->query('SELECT * FROM si_notes
                                                 WHERE id_user = "'.(int)$id.'"');

            foreach($datas as $row):
                 $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function updateNote($idNote, $title, $textNote, $date)
        {
/*
             $this->getConnexion()->query('UPDATE si_notes SET title = "'.$title.'", text_note = "'.$textNote.'"
                                                date_upd = "'.$date.'" WHERE id = "'.(int)$idNote.'"');
*/
             $sql = "UPDATE si_notes SET title = :title,
                          text_note = :text_note,
                          date_upd = :date_upd
                          WHERE id = :id";

              $stmt = $this->getConnexion()->prepare($sql);
              $stmt->bindParam(':title', $title);
              $stmt->bindParam(':text_note', $textNote);
              $stmt->bindParam(':date_upd', $date);
              $stmt->bindParam(':id', $idNote);
              return $stmt->execute();
        }
    }

?>
