<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglieder';
        $membersmodel = new MembersModel();
        $data['members'] = $membersmodel->getData();
        //$data['members'] = $this->MembersModel->getData();

        echo view('templates/header', $data);
        echo view('members/members', $data);
        echo view('templates/footer');

    }

    public function addMember(){
        session_start();
        if (isset($_POST['inputText']) && isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {
            $membersmodel = new MembersModel();
            $membersmodel->addMember($_POST['inputText'],$_POST['inputEmail'],$_POST['inputPassword']);
        }


        return redirect()->to(base_url() . '/'.'members');
    }

}