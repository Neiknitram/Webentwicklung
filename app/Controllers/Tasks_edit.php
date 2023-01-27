<?php

namespace App\Controllers;

use App\Models\MembersModel;
use App\Models\TabModel;
use App\Models\TasksModel;

class Tasks_edit extends BaseController {

    public function index() {
        $memberModel = new MembersModel();
        $data['members'] = $memberModel->getData();
        $tasksModel = new TasksModel();
        $data['task']=$tasksModel->getTask($_GET['task']);
        $data['page_title'] = 'Aufgabe bearbeiten';
        $tabModel = new TabModel();
        $data['tabsTasks'] = $tabModel->getData();

        echo view('templates/header', $data);
        echo view('tasks/tasks_edit', $data);
        echo view('templates/footer');

    }

    public function editTask(){
        $tasksModel = new TasksModel();
        $tasksModel->editTask($_POST['ID'],$_POST['Name'],$_POST['description'],$_POST['date1'],$_POST['date2'],$_POST['reiter'],$_POST['member'],$_POST['lastUserID']);
        return redirect()->to(base_url() . '/'.'tasks');
    }

}