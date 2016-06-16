<?php

    include_once('SchoolIn.php');

    class CompaniesCarriers extends SchoolIn
    {
        private $id;
        private $title;
        private $idCompany;

        public function getId()
        {
              return $this->id;
        }

        public function getTitle()
        {
              return $this->title;
        }

        public function getIdCompany()
        {
              return $this->idCompany;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_companies_carriers');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getCompanyCarrierById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_companies_carriers
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }

        public function getCompanyCarriersByIdCompany($idCompany)
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_companies_carriers
                                                 WHERE id_company = "'.(int)$idCompany.'"');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }
    }

?>
