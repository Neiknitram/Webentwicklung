<?php

namespace App\Controllers;

use App\Models\TabModel;
use App\Models\TodoModel;

class Todo extends BaseController {

    public function index() {
        $tabModel = new TabModel();
        $todoModel = new TodoModel();
        $data['todo']= $todoModel->getData();
        $data['tabID']= $tabModel->getData();
        $data['page_title'] = 'Todos';
        echo view('templates/header', $data);
        echo view('todo/todo', $data);
        echo view('templates/footer');
    }

}