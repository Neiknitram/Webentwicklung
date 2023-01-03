<?php

namespace App\Controllers;

class Register extends BaseController {

    public function index() {
        $data['page_title'] = 'Registrierung';
        echo view('templates/header', $data);
        echo view('register/register', $data);
        echo view('templates/footer');
    }

}