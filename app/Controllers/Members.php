<?php

namespace App\Controllers;

class Members extends BaseController {

    public function index() {

        $data['page_title'] = 'Mitglieder';
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

        echo view('templates/header', $data);
        echo view('members', $data);
        echo view('templates/footer');
    }

}