<?php

    class SchoolIn
    {
        private $cnx;

        public function __construct()
        {
            $this->cnx = new PDO('mysql:host=localhost;dbname=schoolin', 'root', '');
        }

        public function getConnexion()
        {
            return $this->cnx;
        }
    }

?>
