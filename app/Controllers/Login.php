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

    public function login() {
        if ($this->validation->run($_POST,'login_val')) {
            $membersmodel = new MembersModel();
            $results = $membersmodel->login($_POST['inputEmail']);
            foreach ($results as $result) {
                if (password_verify($_POST['inputPassword'], $result['Password'])) {
                    session_start();
                    $_SESSION['Email'] = $_POST['inputEmail'];
                    $_SESSION['Username'] = $membersmodel->get_Username($_POST['inputEmail'],$result['Password']);
                    $_SESSION['ID'] = $membersmodel->get_ID($_SESSION['Username'],$_POST['inputEmail'],$result['Password']);
                    return redirect()->to(base_url() . '/' . 'projects');
                }
            }
            return redirect()->to(base_url() . '/' . 'login');
        }else {
            $data['page_title'] = 'Login';
            $data['login']=$_POST;
            $data['error']=$this->validation->getErrors();
            echo view('templates/header', $data);
            echo view('login', $data);
            echo view('templates/footer');
        }

    }

    public function logout(){
        session_start();
        if(isset($_SESSION['ProjectID'])) unset($_SESSION['ProjectID']);
        if(isset($_SESSION)) {
            session_unset();
            session_destroy();
        }
        return redirect()->to(base_url().'/'.'login');
    }
}