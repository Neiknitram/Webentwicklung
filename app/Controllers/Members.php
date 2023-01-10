<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglieder';
        $membersmodel = new MembersModel();
        $data['members'] = $membersmodel->getData();
        //$data['members'] = $this->MembersModel->getData(); //so hat er das in dem Video gemacht


        echo view('templates/header', $data);
        echo view('members/members', $data);
        echo view('templates/footer');
    }

}