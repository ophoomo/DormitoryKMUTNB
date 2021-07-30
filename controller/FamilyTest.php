<?php 

    require_once ("./databaseTest.php");

    class Family extends Database {

        private $table = "tb_familys";

        public function Select_All($select) {
            $sql = "SELECT $select FROM $this->table";
            $select = $this->db->prepare($sql);

            return $select->execute();
        }

        public function Find($select, $where, $keyword) {
            $sql = "SELECT $select FROM $this->table WHERE $where = ?";
            $find = $this->db->prepare($sql);
            $find->bindParam(1, $keyword, PDO::PARAM_STR);

            return $find->execute();
        }

    
        public function Insert($std_id, $fam_sex, 
                                $fam_firstname, $fam_lastname, $fam_tel,
                                $fam_career, $fam_work_at,  $fam_status, 
                                $person_status, $person_is)
        {
            $sql = "INSERT INTO $this->table (
                        std_id, fam_sex, 
                        fam_firstname, fam_lastname, fam_tel,
                        fam_career, fam_work_at,  fam_status, 
                        person_status, person_is
                    ) 
                    VALUES
                    (
                        :std_id, :fam_sex, 
                        :fam_firstname, :fam_lastname, :fam_tel,
                        :fam_career, :fam_work_at, :fam_status, 
                        :person_status, :person_is
                    )";

            $insert = $this->db->prepare($sql);
            $insert->bindParam(':std_id', $std_id, PDO::PARAM_INT);
            $insert->bindParam(':fam_sex', $fam_sex, PDO::PARAM_INT);
            $insert->bindParam(':fam_firstname', $fam_firstname, PDO::PARAM_STR);
            $insert->bindParam(':fam_lastname', $fam_lastname, PDO::PARAM_STR);
            $insert->bindParam(':fam_tel', $fam_tel, PDO::PARAM_STR);
            $insert->bindParam(':fam_career', $fam_career, PDO::PARAM_STR);
            $insert->bindParam(':fam_work_at', $fam_work_at, PDO::PARAM_STR);
            $insert->bindParam(':fam_status', $fam_status, PDO::PARAM_INT);
            $insert->bindParam(':person_status', $person_status, PDO::PARAM_INT);
            $insert->bindParam(':person_is', $person_is, PDO::PARAM_STR);

            return $insert->execute();
        }


        public function Update($fam_id, $std_id, $fam_sex, $fam_firstname, $fam_lastname, $fam_status, $fam_tel, $fam_person_is){

            $sql = "UPDATE $this->table 
                    SET std_id = :std_id,
                        fam_sex = :sex,
                        fam_firstname = :fname,
                        fam_lastname = :lname,
                        fam_tel = :tel,
                        fam_status = :f_status,
                        fam_person_is = :person_is,
                        fam_update_at = NOW()
                    WHERE fam_id = :id ";

            $update = $this->db->prepare($sql);
            $update->bindParam(':fam_id', $fam_id, PDO::PARAM_STR);
            $update->bindParam(':std_id', $std_id, PDO::PARAM_STR);
            $update->bindParam(':sex', $fam_sex, PDO::PARAM_STR);
            $update->bindParam(':fname', $fam_firstname, PDO::PARAM_STR);
            $update->bindParam(':lname', $fam_lastname, PDO::PARAM_STR);
            $update->bindParam(':f_status', $fam_status, PDO::PARAM_STR);
            $update->bindParam(':tel', $fam_tel, PDO::PARAM_STR);
            $update->bindParam(':person_is', $fam_person_is, PDO::PARAM_STR);
            $update->bindParam(':update_at', $update_at, PDO::PARAM_STR);

            return $update->execute();
        }

        public function Delete($fam_id) {
            $sql = "DELETE FROM $this->table WHERE fam_id = ?";
            $delete = $this->db->prepare($sql);
            $delete->bindParam(1, $fam_id, PDO::PARAM_INT);

            return $delete->execute();
        }

    }

?>
