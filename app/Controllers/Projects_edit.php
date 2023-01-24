<?php

namespace App\Controllers;

use App\Models\MembersModel;
use App\Models\ProjectsModel;

class Projects_edit extends BaseController {

    public function index() {
        if(session_id() == '') {
            session_start();
        }
        $data['page_title'] = 'Projekt bearbeiten';
        if (isset($_SESSION['projectEditID'])){
            $projectsModel = new ProjectsModel();
            $data['name']= $projectsModel->getProjectName($_SESSION['projectEditID']);
            $data['description'] = $projectsModel->getProjectDescription($_SESSION['projectEditID']);
        }

        echo view('templates/header', $data);
        echo view('projects/projects_edit', $data);
        echo view('templates/footer');

    }

}