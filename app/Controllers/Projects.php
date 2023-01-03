<?php

namespace App\Controllers;

class Projects extends BaseController {

    public function index() {
        $data['page_title'] = 'Projekte';
        echo view('templates/header', $data);
        echo view('projects/projects', $data);
        echo view('templates/footer');
    }

}