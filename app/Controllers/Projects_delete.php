<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Projects_delete extends BaseController {

    public function index() {

        $data['page_title'] = 'Projekt löschen';

        echo view('templates/header', $data);
        echo view('projects/projects_delete', $data);
        echo view('templates/footer');

    }
}