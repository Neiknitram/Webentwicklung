<?php

namespace App\Controllers;

class Todo extends BaseController {

    public function index() {
        $data['page_title'] = 'Todos';
        echo view('templates/header', $data);
        echo view('todo', $data);
        echo view('templates/footer');
    }

}