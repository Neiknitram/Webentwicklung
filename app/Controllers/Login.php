<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MembersModel;

class Login extends BaseController {

    public function index() {
        $data['page_title'] = 'Login';
        if (isset($_POST['inputEmail']) && $_POST['inputPassword']){
            if ($this->MembersModel->login() != NULL){
                $password = $this->MembersModel->login()['inputPassword'];

                if (password_verify($_POST['inputPassword'],$password)){
                    $this->session->set('loggedin',TRUE);
                    // Es fehlt id und Username in der Session
                    return redirect()->to(base_url().'/projects/projects');
                }
            }
        }
        echo view('templates/header', $data);
        echo view('login', $data);
        echo view('templates/footer');
    }

    public function logout(){
        session()->destroy();
        return redirect()->to(base_url().'/login');
    }

}