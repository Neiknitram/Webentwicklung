<?php

namespace App\Controllers;

use App\Models\TasksModel;

class Tasks extends BaseController {

    public function index() {

        $data['page_title'] = 'Aufgaben';
        /*
        $data['tasks'] = array(
            array(
                'name' => 'HTML Datei erstellen',
                'description' => 'HTML Datei erstellen',
                'tab' => 'ToDo',
                'responsible' => 'Max Mustermann'
            ),
            array(
                'name' => 'CSS Datei erstellen',
                'description' => 'CSS Datei erstellen',
                'tab' => 'ToDo',
                'responsible' => 'Max Mustermann'
            ),
            array(
                'name' => 'PC eingeschaltet',
                'description' => 'PC einschalten',
                'tab' => 'Erledigt',
                'responsible' => 'Max Mustermann'
            ),
            array(
                'name' => 'Kaffee trinken',
                'description' => 'Kaffee trinken',
                'tab' => 'Erledigt',
                'responsible' => 'Petra Müller'
            ),
            array(
                'name' => 'Für die Uni lernen',
                'description' => 'Für die Uni lernen',
                'tab' => 'Verschoben',
                'responsible' => 'Max Mustermann'
            )
        );
        */
        $tasksModel = new TasksModel();
        $data['tasks']=$tasksModel->getData();

        echo view('templates/header', $data);
        echo view('tasks/tasks', $data);
        echo view('templates/footer');
    }

    public function addTask(){
        session_start();
        if(isset($_POST['save'])) {
            if (isset($_POST['Name']) && isset($_POST['Beschreibung']) && isset($_POST['Erstellungsdatum'])
                && isset($_POST['Faelligkeitsdatum']) && isset($_SESSION['ID']) && isset($_POST['reiter'])) {
                $tasksModel = new TasksModel();
                $tasksModel->addTask($_POST['Name'],$_POST['Beschreibung'],$_POST['Erstellungsdatum'],
                    $_POST['Faelligkeitsdatum'],$_SESSION['ID'],$_POST['reiter']);
            }
        }


        return redirect()->to(base_url() . '/'.'tasks');
    }

}