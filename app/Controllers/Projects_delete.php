<?php

namespace App\Controllers;

use App\Models\MembersModel;
use App\Models\ProjectsModel;

class Projects_delete extends BaseController {

    public function index() {

        $data['page_title'] = 'Projekt löschen';

        echo view('templates/header', $data);
        echo view('projects/projects_delete', $data);
        echo view('templates/footer');

    }

    public function deleteProject(){
        session_start();
        $projektsModel = new ProjectsModel();
        $projektsModel->deleteProject($_SESSION['projectEditID']);
        if (isset($_SESSION['ProjectID'])) {
            if ($_SESSION['projectEditID'] == $_SESSION['ProjectID']){
                unset($_SESSION['ProjectID']);
                unset($_SESSION['ProjectName']);
            }
        }

        return redirect()->to(base_url() . '/'.'projects');
    }
}