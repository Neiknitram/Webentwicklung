<?php

namespace App\Controllers;

class Tasks extends BaseController {

    public function index() {

        $data['page_title'] = 'Aufgaben';
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

        echo view('templates/header', $data);
        echo view('tasks/tasks', $data);
        echo view('templates/footer');
    }

}