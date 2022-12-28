<?php

namespace App\Controllers;

class Members extends BaseController {

    public function index() {

        $data['members'] = array(
            array(
                'name' => 'Max Mustermann',
                'email' => 'mustermann@muster.com',
                'project' => 1
            ),
            array(
                'name' => 'Petra Müller',
                'email' => 'petra@mueller.com',
                'project' => 1
            )
        );

        $data['page_title'] = 'Mitglieder';
        echo view('templates/header', $data);
        echo view('members', $data);
        echo view('templates/footer');
    }

}