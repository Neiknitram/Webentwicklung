<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MembersModel;

class Login extends BaseController {

    public function index() {
        $data['page_title'] = 'Login';

        echo view('templates/header', $data);
        echo view('login', $data);
        echo view('templates/footer');
    }

    public function login()
    {
        if (!empty($_POST)) {
            if (isset($_POST['inputEmail']) && isset($_POST['inputPassword'])) {
                $membersmodel = new MembersModel();
                $results = $membersmodel->login($_POST['inputEmail']);

                foreach ($results as $result) {
                    if (password_verify($_POST['inputPassword'], $result['Password'])) {
                        session_start();
                        $_SESSION['Username'] = $membersmodel->get_Username($_POST['inputEmail']);
                        $_SESSION['ID'] = $membersmodel->get_ID($_POST['inputEmail']);
                        return redirect()->to(base_url() . '/'.'projects');
                    }
                }
            }
        }
        return redirect()->to(base_url() . '/'.'login');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url().'/'.'login');
    }

}