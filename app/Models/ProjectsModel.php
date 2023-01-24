<?php namespace App\Models;
use CodeIgniter\Model;
class ProjectsModel extends Model {
    public function getData() {
        $result = $this->db->query('SELECT ID,Name FROM projekte');
        return $result->getResultArray();
    }
}
