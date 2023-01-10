<?php namespace App\Models;
    use CodeIgniter\Model;
    class MembersModel extends Model {
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
            $result = $this->db->query('');
            return $result->getResultArray();
        }
    }
