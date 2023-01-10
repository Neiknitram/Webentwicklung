<?php namespace App\Models;
    use CodeIgniter\Model;
    class MembersModel extends Model {

        //muss getestet werden
        public function login(){
            $this->members = $this->db->table(''); //Ich weiß nicht wie der Tabellennamen von members ist
            $this->members->select('password');
            $this->members->where('members.username',$_POST['username']);
            $result = $this->members.get();

            return $result->getRowArray();
        }
        public function getData() {
            /*$data['members'] = array(
                array(
                    'name' => 'Max Mustermann',
                    'email' => 'mustermann@muster.com',
                    'project' => 1
                ),
                array(
                    'name' => 'Petra Müller',
                    'email' => 'petra@mueller.com',
                    'project' => 1
                )
            );*/
            $result = $this->db->query(''); // query muss noch hinzugefügt werden
            return $result->getResultArray();
        }
    }
