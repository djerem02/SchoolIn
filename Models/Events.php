<?php
    include_once('SchoolIn.php');

    class Events extends SchoolIn
    {
        private $id;
        private $name;
        private $descEvent;
        private $dateStart;
        private $dateEnd;
        private $path;
        private $idAddress;

        public function getId()
        {
              return $this->id;
        }

        public function getName()
        {
              return $this->name;
        }

        public function getDescEvent()
        {
              return $this->descEvent;
        }

        public function getDateStart()
        {
              return $this->dateStart;
        }

        public function getDateEnd()
        {
              return $this->dateEnd;
        }

        public function getPath()
        {
              return $this->path;
        }

        public function getIdAddress()
        {
              return $this->idAddress;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_events');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getEventById($id)
        {
            return $this->getConnexion()->query('SELECT * FROM si_events
                                                 WHERE id = "'.(int)$id.'"')->fetch();
        }
    }

?>
