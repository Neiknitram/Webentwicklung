<?php

namespace App\Controllers;

class Tab extends BaseController {

    public function index() {

        $data['page_title'] = 'Reiter';
        $data['tabs'] = array(
            array(
                'name' => 'ToDo',
                'description' => 'Dinge die erledigt werden müssen.',
            ),
            array(
                'name' => 'Erledigt',
                'description' => 'Dinge die erledigt sind.',
            ),
            array(
                'name' => 'Verschoben',
                'description' => 'Dinge die später erledigt werden.',
            )
        );

        echo view('templates/header', $data);
        echo view('tab/tab', $data);
        echo view('templates/footer');
    }

}