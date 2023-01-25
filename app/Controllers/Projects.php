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
        if(isset($_POST['select'])) {
            if (!empty($_POST['selectProject'])) {
                session_start();
                $_SESSION['ProjectID']=$_POST['selectProject'];
                $projektsModel = new ProjectsModel();
                $_SESSION['ProjectName']=$projektsModel->getProjectName($_SESSION['ProjectID']);
                return redirect()->to(base_url() . '/' . 'todo');
            }
        }
        else if(isset($_POST['delete'])){
            if (!empty($_POST['selectProject'])) {
                session_start();
                $_SESSION['projectEditID'] = $_POST['selectProject'];
                return redirect()->to(base_url() . '/' . 'projects_delete');
            }
        }else if(isset($_POST['edit'])){
            if (!empty($_POST['selectProject'])) {
                session_start();
                $_SESSION['projectEditID'] = $_POST['selectProject'];
                return redirect()->to(base_url() . '/' . 'projects_edit');
            }
        }
        return redirect()->to(base_url() . '/' . 'projects');
    }

    public function add(){
        session_start();
        if(isset($_POST['save'])) {
            if (isset($_POST['name']) && isset($_POST['text'])) {
                $projectsModel = new ProjectsModel();
                $projectsModel->addProject($_POST['name'],$_POST['text']);
            }
        }


        return redirect()->to(base_url() . '/'.'projects');
    }

}