<?php
    $members = array(
        array(
            'memberID' => 1,
            'name' => 'Max Mustermann',
            'email' => 'mustermann@muster.com',
            'projectID' => 1
        ),
        array(
            'memberID' => 2,
            'name' => 'Petra Müller',
            'email' => 'petra@mueller.com',
            'projectID' => 1
        )
    );

    foreach ($members as $member) {
        echo "<tr>";
            echo ('<td>' . $member['name'] . '</td>');
            echo ('<td>' . $member['email'] . '</td>');
        echo (' <td>
                    <input class="form-check-input" type="checkbox" value="" id="item1check">
                    <label class="form-check-label" for="item1check"></label>
                </td>
                <td class="text-end">
                    <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                </td>
                </tr>');
    }