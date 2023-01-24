<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Tasks_delete extends BaseController {

    public function index() {

        $data['page_title'] = 'Aufgabe löschen';

        echo view('templates/header', $data);
        echo view('tasks/tasks_delete', $data);
        echo view('templates/footer');

    }
}