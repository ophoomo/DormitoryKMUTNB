<?php

    require_once ("Database.php");

    class Building extends Database {

        private $table = "tb_buildings";

        public function Select_All($select) {
            $sql = "SELECT $select FROM $this->table";
            $select = $this->db->prepare($sql);
            $select->execute();

            return $select;
        }

        public function Find($select, $where, $keyword) {
            $sql = "SELECT $select FROM $this->table WHERE $where = ?";
            $find = $this->db->prepare($sql);
            $find->bindParam(1, $keyword, PDO::PARAM_STR);
            $find->execute();

            return $find;
        }

        public function Insert($buildings_name)
        {
            $sql = "INSERT INTO $this->table (buildings_name) VALUE (?)";

            $insert = $this->db->prepare($sql);
            $insert->bindParam(1, $buildings_name, PDO::PARAM_STR);
            $insert->execute();

            return $insert;
        }


        public function Update($buildings_id, $buildings_name){

            $sql = "UPDATE $this->table 
                SET buildings_name = ?,
                    update_at = NOW()
                    WHERE buildings_id = ?";

            $update = $this->db->prepare($sql);
            $update->bindParam(1, $buildings_name, PDO::PARAM_STR);
            $update->bindParam(2, $buildings_id, PDO::PARAM_STR);
            $update->execute();

            return $update;
        }

        public function Delete($buildings_id) {
            $sql = "DELETE FROM $this->table WHERE buildings_id = ?";
            $delete = $this->db->prepare($sql);
            $delete->bindParam(1, $buildings_id, PDO::PARAM_INT);
            $delete->execute();

            return $delete;
        }

    }

?>
 