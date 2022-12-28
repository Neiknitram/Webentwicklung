<?php

namespace App\Controllers;

class Login extends BaseController {

    public function index() {
        $data['page_title'] = 'Login';
        echo view('templates/header', $data);
        echo view('login', $data);
        echo view('templates/footer');
    }

}