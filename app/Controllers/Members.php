<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members extends BaseController {

    public function index() {
        session_start();
        $data['page_title'] = 'Mitglieder';
        $membersmodel = new MembersModel();
        $data['membersID'] =$membersmodel->getMembersID($_SESSION['ProjectID']);
        $data['members'] = $membersmodel->getData();

        echo view('templates/header', $data);
        echo view('members/members', $data);
        echo view('templates/footer');

    }

    public function addMember(){
        session_start();
        if(isset($_POST['save'])) {
            if (isset($_SESSION['ID']) && isset($_POST['inputText']) && isset($_POST['inputEmail']) &&
                isset($_POST['inputPassword'])) {
                if(($_POST['inputText']!="") && ($_POST['inputEmail']!="") && ($_POST['inputPassword']!="")) {
                    $membersmodel = new MembersModel();
                    if (isset($_POST['checkAssignedProject'])) {
                        $membersmodel->addMember($_POST['inputText'], $_POST['inputEmail'], $_POST['inputPassword'],
                            $_POST['checkAssignedProject']);
                    }else{
                        $membersmodel->addMember($_POST['inputText'], $_POST['inputEmail'], $_POST['inputPassword'],
                            null);
                    }
                }
            }
        }
        return redirect()->to(base_url() . '/'.'members');
    }

}