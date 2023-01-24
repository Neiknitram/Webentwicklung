<?php

namespace App\Controllers;

use App\Models\ProjectsModel;

class Projects extends BaseController {

    public function index() {
        $projektsModel = new ProjectsModel();
        $data['projects']=$projektsModel->getData();
        $data['page_title'] = 'Projekte';
        echo view('templates/header', $data);
        echo view('projects/projects', $data);
        echo view('templates/footer');
    }

    public function select(){
        if(isset($_POST['submit'])) {
            if (!empty($_POST['selectProject'])) {
                session_start();
                $_SESSION['ProjectID']=$_POST['selectProject'];
                return redirect()->to(base_url() . '/' . 'todo');
            }
        }
        return redirect()->to(base_url() . '/' . 'projects');
    }

    public function add(){

    }

}