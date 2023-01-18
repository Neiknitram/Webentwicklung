<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Tab_delete extends BaseController {

    public function index() {

        $data['page_title'] = 'Reiter löschen';

        echo view('templates/header', $data);
        echo view('tab/tab_delete', $data);
        echo view('templates/footer');

    }
}