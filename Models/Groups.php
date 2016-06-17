<?php
    include_once('SchoolIn.php');

    class Groups extends SchoolIn
    {
        private $id;
        private $name;

        public function getId()
        {
              return $this->id;
        }

        public function getName()
        {
              return $this->name;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_groups');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getGroupById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_groups
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }

        public function addGroup($name){

          $sql = "INSERT INTO si_groups (name) VALUES (:name)";

          $stmt = $this->getConnexion()->prepare($sql);

          $stmt->bindParam(':name', $name);

          return $stmt->execute();
        }
    }

?>
