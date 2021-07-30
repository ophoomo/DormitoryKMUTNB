<?php

    require_once ("Database.php");

    class Room extends Database {

        private $table = "tb_rooms";

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

        public function Insert($floor_id, $room_name, $room_member)
        {
            $sql = "INSERT INTO $this->table (floor_id, room_name, room_member) VALUES (?, ?, ?)";

            $insert = $this->db->prepare($sql);
            $insert->bindParam(1, $floor_id, PDO::PARAM_STR);
            $insert->bindParam(2, $room_name, PDO::PARAM_STR);
            $insert->bindParam(3, $room_member, PDO::PARAM_STR);
            $insert->execute();

            return $insert;
        }


        public function Update($room_id, $floor_id, $room_name, $room_member, $room_status){

            $sql = "UPDATE $this->table 
                SET floor_id = ?,
                    room_name = ?,
                    room_member = ?,
                    room_status = ?,
                    update_at = NOW()
                    WHERE room_id = ?";

            $update = $this->db->prepare($sql);
            $update->bindParam(1, $floor_id, PDO::PARAM_STR);
            $update->bindParam(2, $room_name, PDO::PARAM_STR);
            $update->bindParam(3, $room_member, PDO::PARAM_STR);
            $update->bindParam(4, $room_status, PDO::PARAM_STR);
            $update->bindParam(5, $room_id, PDO::PARAM_STR);
            $update->execute();

            return $update;
        }

        public function Delete($room_id) {
            $sql = "DELETE FROM $this->table WHERE room_id = ?";
            $delete = $this->db->prepare($sql);
            $delete->bindParam(1, $room_id, PDO::PARAM_INT);
            $delete->execute();

            return $delete;
        }

    }

?>
 