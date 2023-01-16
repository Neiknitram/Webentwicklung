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

        public function get_Username($Email,$Password){
            $result = $this->db->query('SELECT Username FROM mitglieder WHERE EMail = "'.$Email.'" AND Password="'.$Password.'"');
            return $result->getResultArray()[0]['Username'];
        }

        public function get_ID($Username,$Email, $Password){
            $result = $this->db->query('SELECT ID FROM mitglieder WHERE EMail = "'.$Email.'" AND Password="'.$Password.'" AND Username="'.$Username.'"');
            var_dump($result->getResultArray());
            return $result->getResultArray()[0]['ID'];
        }

        public function editMember($Username, $Email, $Password, $Checked){
            if(isset($Username) && isset($Email) && isset($Password)) {
                $hashedPassword = password_hash($Password, PASSWORD_DEFAULT);
                $this->db->query('UPDATE mitglieder SET Username = "' . $Username . '", EMail= "' . $Email . '", Password= "' .
                    $hashedPassword . '" WHERE ID = ' . $_SESSION['ID'] . ';');
                if (isset($Checked)){
                    $this->db->query('INSERT INTO projekte_mitglieder (projekt_id,mitglieder_id)
                VALUES ('.$_SESSION['ProjectID'].','.$this->get_ID($Username, $Email, $hashedPassword).')');
                    //var_dump($this->get_ID($Username, $Email, $hashedPassword));
                }else{
                    $this->db->query('DELETE FROM projekte_mitglieder WHERE projekt_id='.$_SESSION['ProjectID'].
                        ' AND mitglieder_id='.$this->get_ID($Username, $Email, $hashedPassword));
                }
            }
        }

        public function addMember($Username, $Email, $Password, $Checked){
            $hashedPassword = password_hash($Password,PASSWORD_DEFAULT);
            $this->db->query('INSERT INTO mitglieder (Username,EMail,Password)
                VALUES ("'.$Username.'","'.$Email.'","'. $hashedPassword.'");');
            if (isset($Checked)){
                $this->db->query('INSERT INTO projekte_mitglieder (projekt_id,mitglieder_id)
                VALUES ('.$_SESSION['ProjectID'].','.$this->get_ID($Username, $Email, $hashedPassword).')');
            }
        }

        public function deleteMember($ID){
            $this->db->query('DELETE FROM mitglieder WHERE ID="'.$ID.'"');
        }

        public function getMembersID($ProjectID){
            $result=$this->db->query('SELECT mitglieder_id FROM projekte_mitglieder WHERE projekt_id ='.$ProjectID);
            return $result->getResultArray();
        }
    }
