<?php

namespace App\Controllers;

use App\Models\MembersModel;
use App\Models\TasksModel;

class Tasks_delete extends BaseController {

    public function index() {

        $tasksModel = new TasksModel();
        $data['task']=$tasksModel->getTask($_GET['task']);
        $data['page_title'] = 'Aufgabe löschen';

        echo view('templates/header', $data);
        echo view('tasks/tasks_delete', $data);
        echo view('templates/footer');

    }

    public function deleteTask(){
        session_start();
        $tasksModel = new TasksModel();
        $tasksModel->deleteTask($_GET['task']);

        return redirect()->to(base_url() . '/'.'tasks');
    }
}