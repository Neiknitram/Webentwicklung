<?php namespace App\Models;
use CodeIgniter\Model;
class TodoModel extends Model {
    public function getData(){
        $result=$this->db->query('Select
    reiter.ID,
    reiter.Name,
    aufgaben.Name As Name1,
    mitglieder.Username
    From
    reiter Inner Join
    aufgaben On aufgaben.reiter = reiter.ID Inner Join
    aufgaben_mitglieder On aufgaben_mitglieder.aufgaben_id = aufgaben.ID
    Inner Join
    mitglieder On aufgaben_mitglieder.mitglieder_id = mitglieder.ID');
        return $result->getResultArray();
    }
}