<?php

namespace App\Controllers;


use App\Models\TabModel;

class Tab_delete extends BaseController {

    public function index() {
        $tabModel = new TabModel();
        $data['tab']=$tabModel->getTab($_GET['tab']);
        $data['page_title'] = 'Reiter löschen';

        echo view('templates/header', $data);
        echo view('tab/tab_delete', $data);
        echo view('templates/footer');

    }

    public function deleteTab(){
        session_start();
        $tabModel = new TabModel();
        $tabModel->deleteTab($_GET['tab']);

        return redirect()->to(base_url() . '/'.'tab');
    }
}