<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Projects_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Projekt bearbeiten';

        echo view('templates/header', $data);
        echo view('projects/projects_edit', $data);
        echo view('templates/footer');

    }

}