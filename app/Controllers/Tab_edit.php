<?php

namespace App\Controllers;

use App\Models\TabModel;

class Tab_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Reiter bearbeiten';
        $tabModel = new TabModel();
        $data['tab']=$tabModel->getTab($_GET['tab']);

        echo view('templates/header', $data);
        echo view('tab/tab_edit', $data);
        echo view('templates/footer');

    }

    public function editTab(){
        $tabModel = new TabModel();
        $tabModel->editTab($_POST['ID'],$_POST['Name'],$_POST['Beschreibung']);
        return redirect()->to(base_url() . '/'.'tab');
    }

}