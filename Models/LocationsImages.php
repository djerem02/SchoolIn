<?php
    include_once('SchoolIn.php');

    class LocationsImages extends SchoolIn
    {
        private $id;
        private $idLocation;
        private $imageName;

        public function getId()
        {
              return $this->id;
        }

        public function getIdLocation()
        {
              return $this->idLocation;
        }

        public function getImageName()
        {
              return $this->imageName;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_location_image');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getLocationImageById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_location_image
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }

        public function getLocationImageByIdLocation($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_location_image
                                                 WHERE id_location = "'.(int)$id.'"')->fetch();
        }
    }

?>
