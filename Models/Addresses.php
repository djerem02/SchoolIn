<?php
    include_once('SchoolIn.php');

    class Addresses extends SchoolIn
    {
        private $id;
        private $street;
        private $codePost;
        private $city;

        public function getId()
        {
              return $this->id;
        }

        public function getStreet()
        {
              return $this->street;
        }

        public function getCodePost()
        {
              return $this->codePost;
        }

        public function getCity()
        {
              return $this->city;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_addresses');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getAddressById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_addresses
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }
    }

?>
