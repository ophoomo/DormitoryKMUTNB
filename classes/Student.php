<?php 

    require_once ("Database.php");

    class Student extends Database {

        private $table = "tb_students";


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


        public function Insert(
                                $std_status, $std_username, $std_password, $std_salt,
                                $std_sex, $std_firstname, $std_lastname, $std_idcard,
                                $std_nickname, $std_blood, $std_religion, $std_birthday,
                                $std_id_student, $branch_id,

                                $std_tel, $std_email, $std_address,

                                $std_edu_academy, $std_edu_degree, $std_edu_comple,

                                $std_sponsor, $std_howmuch
                                ) 
        {
            $sql = "INSERT INTO $this->table (
                std_status, std_username, std_password, std_salt,
                std_sex, std_firstname, std_lastname, std_idcard,
                std_nickname, std_blood, std_religion, std_birthday,
                std_id_student, branch_id,

                std_tel, std_email, std_address,

                std_edu_academy, std_edu_degree, std_edu_comple,

                std_sponsor, std_howmuch
            ) VALUES (
                :std_status, :std_username, :std_password, :std_salt,
                :std_sex, :std_firstname, :std_lastname, :std_idcard,
                :std_nickname, :std_blood, :std_religion, :std_birthday,
                :std_id_student, :branch_id,

                :std_tel, :std_email, :std_address,

                :std_edu_academy, :std_edu_degree, :std_edu_comple,

                :std_sponsor, :std_howmuch
            )";

            $insert = $this->db->prepare($sql);
            $insert->bindParam(':branch_id', $branch_id, PDO::PARAM_INT);
            $insert->bindParam(':std_status', $std_status, PDO::PARAM_INT);
            $insert->bindParam(':std_username', $std_username, PDO::PARAM_STR);
            $insert->bindParam(':std_password', $std_password, PDO::PARAM_STR);
            $insert->bindParam(':std_salt', $std_salt, PDO::PARAM_STR);
            $insert->bindParam(':std_sex', $std_sex, PDO::PARAM_STR);
            $insert->bindParam(':std_firstname', $std_firstname, PDO::PARAM_STR);
            $insert->bindParam(':std_lastname', $std_lastname, PDO::PARAM_STR);
            $insert->bindParam(':std_idcard', $std_idcard, PDO::PARAM_STR);
            $insert->bindParam(':std_nickname', $std_nickname, PDO::PARAM_STR);
            $insert->bindParam(':std_blood', $std_blood, PDO::PARAM_STR);
            $insert->bindParam(':std_religion', $std_religion, PDO::PARAM_STR);
            $insert->bindParam(':std_birthday', $std_birthday, PDO::PARAM_STR);
            $insert->bindParam(':std_id_student', $std_id_student, PDO::PARAM_STR);
            $insert->bindParam(':std_tel', $std_tel, PDO::PARAM_STR);
            $insert->bindParam(':std_email', $std_email, PDO::PARAM_STR);
            $insert->bindParam(':std_address', $std_address, PDO::PARAM_STR);
            $insert->bindParam(':std_edu_academy', $std_edu_academy, PDO::PARAM_STR);
            $insert->bindParam(':std_edu_degree', $std_edu_degree, PDO::PARAM_STR);
            $insert->bindParam(':std_edu_comple', $std_edu_comple, PDO::PARAM_STR);
            $insert->bindParam(':std_sponsor', $std_sponsor, PDO::PARAM_STR);
            $insert->bindParam(':std_howmuch', $std_howmuch, PDO::PARAM_STR);
            $insert->execute();
            
            return $insert;
        }

        public function Update_Select($sets, $dataNews, $where, $keyword) {
            $txtSet = "";
            for ($i = 0; $i < count($sets); $i++) {
                if ($i < count($sets) - 1) {
                    $txtSet = $txtSet.$sets[$i]." = '".$dataNews[$i]."', ";
                } else {
                    $txtSet = $txtSet.$sets[$i]." = '".$dataNews[$i]."'";
                }
            }
            
            $sql = "UPDATE $this->table SET $txtSet WHERE $where = $keyword";
            $update = $this->db->prepare($sql);
            $update->execute();

            return $update;
        }


        public function Update($std_id, $std_status, $username, $password, 
                                $sex, $firstname, $lastname, $idCard, 
                                $nickname, $blood, $religion, $birthday,
                                $idStd, $faculty, $branch,
                                
                                $tel, $email, $address,
                                
                                $EduAcademy, $EduDegree, $EduComple,

                                $sponsor, $howmuch)
        {

            $sql = "UPDATE $this->table 
                    SET std_status_std = :statusStd,
                        std_username = :user,
                        std_password = :pass,
                        std_sex = :sex,
                        std_firstname = :fname,
                        std_lastname = :lname,
                        std_idCard = :idCard,
                        std_nickname = :nickname,
                        std_blood = :blood,
                        std_religion = :religion,
                        std_birthday = :birthday,
                        std_idStd = :idStd,
                        std_faculty = :faculty,
                        std_branch = :branch,
                        std_tel = :tel,
                        std_email = :email,
                        std_address = :addresss,
                        std_edu_academy = :eduAcademy,
                        std_edu_degree = :eduDegree,
                        std_edu_comple = :eduComple;
                        std_sponsor = :sponsor,
                        std_howmuch = :howmuch,
                        std_update_at = NOW()
                    WHERE std_id = :id ";

            $update = $this->db->prepare($sql);
            $update->bindParam(':id', $std_id, PDO::PARAM_STR);
            $update->bindParam(':statusStd', $std_status, PDO::PARAM_INT);
            $update->bindParam(':user', $username, PDO::PARAM_STR);
            $update->bindParam(':pass', $password, PDO::PARAM_STR);
            $update->bindParam(':sex', $sex, PDO::PARAM_STR);
            $update->bindParam(':fname', $firstname, PDO::PARAM_STR);
            $update->bindParam(':lname', $lastname, PDO::PARAM_STR);
            $update->bindParam(':idCard', $idCard, PDO::PARAM_STR);
            $update->bindParam(':nickname', $nickname, PDO::PARAM_STR);
            $update->bindParam(':blood', $blood, PDO::PARAM_STR);
            $update->bindParam(':religion', $religion, PDO::PARAM_STR);
            $update->bindParam(':birthday', $birthday, PDO::PARAM_STR);
            $update->bindParam(':idstd', $idStd, PDO::PARAM_STR);
            $update->bindParam(':faculty', $faculty, PDO::PARAM_STR);
            $update->bindParam(':branch', $branch, PDO::PARAM_STR);
            $update->bindParam(':tel', $tel, PDO::PARAM_STR);
            $update->bindParam(':email', $email, PDO::PARAM_STR);
            $update->bindParam(':addresss', $address, PDO::PARAM_STR);
            $update->bindParam(':eduAcademy', $EduAcademy, PDO::PARAM_STR);
            $update->bindParam(':eduDegree', $EduDegree, PDO::PARAM_STR);
            $update->bindParam(':eduComple', $EduComple, PDO::PARAM_STR);
            $update->bindParam(':sponsor', $sponsor, PDO::PARAM_STR);
            $update->bindParam(':howmuch', $howmuch, PDO::PARAM_STR);
            $update->execute();

            return $update;
        }


        public function Delete($id) {
            $sql = "DELETE FROM $this->table WHERE std_id = ?";
            $delete = $this->db->prepare($sql);
            $delete->bindParam(1, $id, PDO::PARAM_INT);
            $delete->execute();

            return $delete;
        }

        // public function countUnitPersonRoomBook($idRoom) {
        //     $sql = "SELECT COUNT(`room_id`) FROM `tb_students` WHERE `room_id` = $idRoom";
        //     $value = $this->db->prepare($sql);
        //     $value->execute();
            
        //     return $value;
        // }

        //                     room_id, 'keyword', 'room_id', $value['room_id]
        public function Count($dataCount, $keyword, $where, $value) {
            $sql = "SELECT COUNT(?) as ? FROM $this->table WHERE ? = ?";
            $count = $this->db->prepare($sql);
            $count->bindParam(1, $dataCount, PDO::PARAM_STR);
            $count->bindParam(2, $keyword, PDO::PARAM_STR);
            $count->bindParam(3, $where, PDO::PARAM_STR);
            $count->bindParam(4, $value, PDO::PARAM_STR);
            $count->execute();

            return $count;
        }

        
        public function blood_type_is($value) {
            switch($value) {
                case 0:
                    return "A";
                    break;
                case 1:
                    return "B";
                    break;
                case 2:
                    return "O";
                    break;
                case 3:
                    return "AB";
                    break;
                default:
                    return "-";
            }
        }

    

        public function religion_is($value) {
            switch($value) {
                case 0:
                    return "พุทธ";
                    break;
                case 1:
                    return "คริสต์";
                    break;
                case 2:
                    return "อิสราม";
                    break;
                case 3:
                    return "ฮินดู";
                    break;
                case 4:
                    return "ซิกข์";
                    break;
                case 5:
                    return "ไม่นับถือศาสนา";
                    break;
                default:
                    return "-";
            }
        }


        public function degree_is($value) {
            switch($value) {
                case 0:
                    return "มัธยมศึกษาตอนต้น";
                    break;
                case 1:
                    return "มัธยมศึกษาตอนปลาย";
                    break;
                case 2:
                    return "ปวช.";
                    break;
                case 3:
                    return "ปวส.";
                    break;
                case 4:
                    return "อื่น ๆ";
                    break;
                default:
                    return "-";
            }
        }

        public function person_is($value) {
            switch($value) {
                case 0:
                    return "บิดา";
                    break;
                case 1:
                    return "มารดา";
                    break;
                case 2:
                    return "ปู่";
                    break;
                case 3:
                    return "ย่า";
                    break;
                case 4:
                    return "ตา";
                    break;
                case 5:
                    return "ยาย";
                    break;
                case 6:
                    return "ลุง";
                    break;
                case 7:
                    return "ป้า";
                    break;
                case 8:
                    return "พี่";
                    break;
                case 9:
                    return "อื่น ๆ";
                    break;
                case 10:
                    return "บิดา/มารดา";
                    break;
                case 11:
                    return "ปู่/ย่า";
                    break;
                case 12:
                    return "ตา/ยาย";
                    break;
                case 13:
                    return "ลุง/ป้า";
                    break;
                default:
                    return "-";
            }
        }

    }

?>
