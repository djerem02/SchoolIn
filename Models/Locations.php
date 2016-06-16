<?php
    include_once('SchoolIn.php');

    class Locations extends SchoolIn
    {
        private $id;
        private $title;
        private $price;
        private $descLocation;
        private $path;
        private $valid;
        private $dateAdd;
        private $dateEnd;
        private $idAddress;

        public function getId()
        {
              return $this->id;
        }

        public function getTitle()
        {
              return $this->title;
        }

        public function getPrice()
        {
              return $this->price;
        }

        public function getDescLocation()
        {
              return $this->descLocation;
        }

        public function getPath()
        {
              return $this->path;
        }

        public function getValid()
        {
              return $this->Valid;
        }

        public function getDateAdd()
        {
              return $this->dateAdd;
        }

        public function getDateEnd()
        {
              return $this->dateEnd;
        }

        public function getIdAddress()
        {
              return $this->idAddress;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_locations');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getLocationById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_locations
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }
    }

?>
