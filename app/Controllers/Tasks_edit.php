<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Tasks_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Aufgabe bearbeiten';

        echo view('templates/header', $data);
        echo view('tasks/tasks_edit', $data);
        echo view('templates/footer');

    }

}