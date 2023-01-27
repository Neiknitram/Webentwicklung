<?php

namespace App\Controllers;

use App\Models\MembersModel;
use App\Models\TabModel;
use App\Models\TasksModel;

class Tasks extends BaseController {

    public function index() {

        $data['page_title'] = 'Aufgaben';

        $tasksModel = new TasksModel();
        $data['tasks']=$tasksModel->getData();

        $membersModel = new MembersModel();
        $data['members'] = $membersModel->getData();

        $tabModel = new TabModel();
        $data['tabs'] = $tabModel->getData();

        echo view('templates/header', $data);
        echo view('tasks/tasks', $data);
        echo view('templates/footer');
    }

    public function addTask(){
        session_start();
        if(isset($_POST['save'])) {
            if (isset($_POST['Name']) && isset($_POST['Beschreibung']) && isset($_POST['Erstellungsdatum'])
                && isset($_POST['Faelligkeitsdatum']) && isset($_SESSION['ID']) && isset($_POST['reiter']) && isset($_POST['member'])) {
                $tasksModel = new TasksModel();
                $tasksModel->addTask($_POST['Name'],$_POST['Beschreibung'],$_POST['Erstellungsdatum'],
                    $_POST['Faelligkeitsdatum'],$_SESSION['ID'],$_POST['reiter']);
                $tasksModel->addMember($tasksModel->get_ID($_POST['Name'],$_POST['Beschreibung'],$_POST['Erstellungsdatum'],
                    $_POST['Faelligkeitsdatum'],$_SESSION['ID'],$_POST['reiter']),$_POST['member']);
            }
        }


        return redirect()->to(base_url() . '/'.'tasks');
    }

}