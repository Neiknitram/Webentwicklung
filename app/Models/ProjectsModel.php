<?php namespace App\Models;
use CodeIgniter\Model;
class ProjectsModel extends Model {
    public function getData() {
        $result = $this->db->query('SELECT ID,Name FROM projekte');
        return $result->getResultArray();
    }

    public function addProject($name, $text) {
        if(isset($_SESSION['ID'])) {
            $this->db->query('INSERT INTO projekte (Name,Beschreibung,Ersteller)
                VALUES ("' . $name . '","' . $text . '","' . $_SESSION['ID'] . '");');
        }
    }

    public function deleteProject($ID) {
        $this->db->query('DELETE FROM projekte WHERE ID="'.$ID.'"');
    }

    public function getProjectName($ID){
        $result = $this->db->query('SELECT Name FROM projekte WHERE ID = "'.$ID.'"');
        return $result->getResultArray()[0]['Name'];
    }

    public function getProjectDescription($ID){
        $result = $this->db->query('SELECT Beschreibung FROM projekte WHERE ID = "'.$ID.'"');
        return $result->getResultArray()[0]['Beschreibung'];
    }

    public function editProject($ID,$name,$text){
        $this->db->query('UPDATE projekte SET Name = "'.$name.'", Beschreibung= "'.$text.'" WHERE ID = "'.$ID.'"');
    }
}
