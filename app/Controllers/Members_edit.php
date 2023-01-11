<?php

namespace App\Controllers;

use App\Models\MembersModel;

class Members_edit extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglieder bearbeiten';

        echo view('templates/header', $data);
        echo view('members/members_edit', $data);
        echo view('templates/footer');

    }

}