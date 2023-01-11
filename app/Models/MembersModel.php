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
            return $result->getResultArray();
        }

        public function get_ID($email){
            $result = $this->db->query('SELECT ID FROM mitglieder WHERE EMail = "'.$email.'"');
            return $result->getResultArray();
        }

    }
