<?php namespace App\Models;
use CodeIgniter\Model;
class TasksModel extends Model {
    public function getData(){
        $result = $this->db->query('Select
    mitglieder.Username,
    reiter.Name,
    aufgaben.Name As Name1,
    aufgaben.Beschreibung
    From
    aufgaben_mitglieder Inner Join
    aufgaben On aufgaben.ID = aufgaben_mitglieder.aufgaben_id Inner Join
    reiter On reiter.ID = aufgaben.reiter Inner Join
    mitglieder On mitglieder.ID = aufgaben_mitglieder.mitglieder_id');
        return $result->getResultArray();
    }

    public function addTask($name, $description, $date1, $date2, $username, $reiter){
        $this->db->query('INSERT INTO aufgaben (Name,Beschreibung,Erstellungsdatum,Faelligkeitsdatum,Ersteller,reiter)
                VALUES ("'.$name.'","'.$description.'","'. $date1.'","'.$date2.'","'.$username.'","'.$reiter.'");');
    }

    public function addMember($aufgaben_id,$mitglieder_id){
        $this->db->query('INSERT INTO aufgaben_mitglieder (aufgaben_id,mitglieder_id)
                VALUES ("'.$aufgaben_id.'","'.$mitglieder_id.'");');
    }

    public function get_ID($name, $description, $date1, $date2, $username, $reiter){
        $result = $this->db->query('SELECT ID FROM aufgaben WHERE Name = "'.$name.'" AND Beschreibung="'.$description.
            '" AND Erstellungsdatum="'.$date1.'" AND Faelligkeitsdatum="'.$date2.'" AND Ersteller="'
            .$username.'" AND reiter="'.$reiter.'"');
        return $result->getResultArray()[0]['ID'];
    }

}