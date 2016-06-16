<?php

    class SchoolIn
    {
        private $cnx;

        public function __construct()
        {
            $this->cnx = new PDO('mysql:host=localhost;dbname=SchoolIn', 'root', '');
        }

        public function getConnexion()
        {
            return $this->cnx;
        }
    }

?>
