<?php
    include_once('SchoolIn.php');

    class Companies extends SchoolIn
    {
        private $id;
        private $name;
        private $tel;
        private $email;
        private $webSite;
        private $idAddress;
        private $domainActivity;

        public function getId()
        {
              return $this->id;
        }

        public function getName()
        {
              return $this->name;
        }

        public function getTel()
        {
              return $this->tel;
        }

        public function getEmail()
        {
              return $this->email;
        }
        public function getWebSite()
        {
              return $this->webSite;
        }
        public function getAddressId()
        {
              return $this->idAddress;
        }
        public function getDomainActivity()
        {
              return $this->domainActivity;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_companies');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getCompanyById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_companies
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }
    }

?>
