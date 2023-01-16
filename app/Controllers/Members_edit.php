<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglied bearbeiten';

        echo view('templates/header', $data);
        echo view('members/members_edit', $data);
        echo view('templates/footer');

    }

    public function editMember() {
        session_start();
        if (isset($_POST['inputText']) && isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {
            $membersmodel = new MembersModel();
            if(isset($_POST['checkAssignedProject'])) {
                $membersmodel->editMember($_POST['inputText'], $_POST['inputEmail'], $_POST['inputPassword'],
                    $_POST['checkAssignedProject']);
            }else{
                $membersmodel->editMember($_POST['inputText'], $_POST['inputEmail'], $_POST['inputPassword'],
                    null);
            }
        }


        return redirect()->to(base_url() . '/'.'members');
    }

}