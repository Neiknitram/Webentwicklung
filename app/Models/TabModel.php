<?php namespace App\Models;
use CodeIgniter\Model;
class TabModel extends Model {
    public function getData(){
        $result = $this->db->query('SELECT * FROM reiter');
        return $result->getResultArray();
    }

    public function getTab($ID){
        $result = $this->db->query('Select ID, Name, Beschreibung
    From
    reiter
    WHERE ID ="'.$ID.'"');
        return $result->getResultArray()[0];
    }

    public function editTab($ID, $name, $description){
        $this->db->query('UPDATE reiter SET Name="'.$name.'", Beschreibung="'.$description.'" Where ID='.$ID);
    }
}