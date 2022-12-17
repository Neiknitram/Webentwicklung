<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index() {
        echo view('templates/header.php');
        echo view('login');
        echo view('templates/footer.php');
    }
}
