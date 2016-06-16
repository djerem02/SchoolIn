<?php
    include_once('SchoolIn.php');

    class Users extends SchoolIn
    {
        private $id;
        private $firstname;
        private $lastname;
        private $email;

        public function getId()
        {
              return $this->id;
        }

        public function getFirstname()
        {
              return $this->firstname;
        }

        public function getLastname()
        {
              return $this->lastname;
        }

        public function getEmail()
        {
              return $this->email;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_users');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getUserById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_users
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }
    }

?>
