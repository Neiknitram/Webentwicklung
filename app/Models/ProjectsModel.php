<?php namespace App\Models;
use CodeIgniter\Model;
class ProjectsModel extends Model {
    public function getData() {
        $result = $this->db->query('SELECT ID,Name FROM projekte');
        return $result->getResultArray();
    }

    public function addProject($name, $text) {
        $this->db->query('INSERT INTO projekte (Name,Beschreibung,Ersteller)
                VALUES ("'.$name.'","'.$text.'","'.$_SESSION['ID'].'");');
    }

    public function deleteProject($ID) {
        $this->db->query('DELETE FROM projekte WHERE ID="'.$ID.'"');
    }
}
