<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Tab_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Reiter bearbeiten';

        echo view('templates/header', $data);
        echo view('tab/tab_edit', $data);
        echo view('templates/footer');

    }

}