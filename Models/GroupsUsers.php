<?php
    include_once('SchoolIn.php');

    class GroupsUsers extends SchoolIn
    {
        private $idGroup;
        private $idUser;
        private $active;

        public function getIdGroup()
        {
              return $this->idGroup;
        }

        public function getIdUser()
        {
              return $this->idUser;
        }

        public function getActive()
        {
              return $this->active;
        }

        public function getAll()
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_groups_user');

            foreach($datas as $row):
                $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getGroupByIdGroup($idGroup)
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_groups_user
                                                 WHERE id_group = "'.(int)$idGroup.'"');

            foreach($datas as $row):
               $to_return[] = $row;
            endforeach;

            return $to_return;
        }

        public function getGroupByIdUser($idUser)
        {
            $to_return = array();
            $datas = $this->getConnexion()->query('SELECT * FROM si_groups_user
                                                 WHERE id_user = "'.(int)$idUser.'"');
             foreach($datas as $row):
                $to_return[] = $row;
             endforeach;

             return $to_return;
        }

        public function countUserGroups($idUser)
        {
            $groups = $this->getGroupByIdUser($idUser);

            return count($groups);
        }

        public function getNbUsersByGroup($idGroup)
        {
            $datas = $this->getGroupByIdGroup($idGroup);

            return count($datas);
        }
    }

?>
