<?php

namespace App\Controllers;

use App\Models\TabModel;

class Tab extends BaseController {

    public function index() {

        $data['page_title'] = 'Reiter';

        $tabModel = new TabModel();
        $data['tabs']=$tabModel->getData();

        echo view('templates/header', $data);
        echo view('tab/tab', $data);
        echo view('templates/footer');
    }

    public function addTab(){
        session_start();
        if(isset($_POST['save'])) {
            if (isset($_POST['Name']) && isset($_POST['Beschreibung']) && $_POST['Name']!="" && $_POST['Beschreibung']!=""){
                $tabModel = new TabModel();
                $tabModel->addTab($_POST['Name'],$_POST['Beschreibung']);
            }
        }
        return redirect()->to(base_url() . '/'.'tab');

    }

    public function editTab(){
        $tabModel = new TabModel();
        $tabModel->editTab($_POST['ID'],$_POST['Name'],$_POST['Beschreibung']);
        return redirect()->to(base_url() . '/'.'tab');
    }

    public function deleteTab(){
        session_start();
        $tabModel = new TabModel();
        $tabModel->deleteTab($_POST['ID']);

        return redirect()->to(base_url() . '/'.'tab');
    }

}