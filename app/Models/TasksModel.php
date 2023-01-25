<?php namespace App\Models;
use CodeIgniter\Model;
class TasksModel extends Model {
    public function getData(){
        $result = $this->db->query('SELECT * FROM aufgaben');
        return $result->getResultArray();
    }

    public function addTask($name, $description, $date1, $date2, $username, $reiter){
        $this->db->query('INSERT INTO aufgaben (Name,Beschreibung,Erstellungsdatum,Faelligkeitsdatum,Ersteller,reiter)
                VALUES ("'.$name.'","'.$description.'","'. $date1.'","'.$date2.'","'.$username.'","'.$reiter.'");');
    }

}