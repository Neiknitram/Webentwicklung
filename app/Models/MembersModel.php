<?php namespace App\Models;
    use CodeIgniter\Model;
    class MembersModel extends Model {

        public function login($email){
            $result = $this->db->query('SELECT Password FROM mitglieder WHERE EMail = "'.$email.'"');
            return $result->getResultArray();
        }

        public function getData() {
            $result = $this->db->query('SELECT * FROM mitglieder');
            return $result->getResultArray();
        }

        public function get_Username($email){
            $result = $this->db->query('SELECT Username FROM mitglieder WHERE EMail = "'.$email.'"');
            return $result->getResultArray()[0]['Username'];
        }

        public function get_ID($email){
            $result = $this->db->query('SELECT ID FROM mitglieder WHERE EMail = "'.$email.'"');
            return $result->getResultArray()[0]['ID'];
        }

        public function editMember($Username, $Email, $Password){
            $hashedPassword = password_hash($Password,PASSWORD_DEFAULT);
            $this->db->query('UPDATE mitglieder SET Username = "'.$Username.'", EMail= "'.$Email.'", Password= "'.
                $hashedPassword.'" WHERE ID = '.$_SESSION['ID'].';');
        }

        public function addMember($Username, $Email, $Password){
            $hashedPassword = password_hash($Password,PASSWORD_DEFAULT);
            $this->db->query('INSERT INTO mitglieder (Username,EMail,Password)
                VALUES ("'.$Username.'","'.$Email.'","'. $hashedPassword.'");');
        }
    }
