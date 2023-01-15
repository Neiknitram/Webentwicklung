<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members_delete extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglied bearbeiten';

        echo view('templates/header', $data);
        echo view('members/members_delete', $data);
        echo view('templates/footer');

    }

    public function deleteMember(){
        session_start();
        if (isset($_SESSION['ID'])) {
            $membersmodel = new MembersModel();
            $membersmodel->deleteMember($_SESSION['ID']);
            session_unset();
            session_destroy();
            return redirect()->to(base_url() . '/'.'login');
        }
    }
}