<?php
$tasks = array(
    array(
        'name' => 'HTML Datei erstellen',
        'description' => 'HTML Datei erstellen',
        'tab' => 'ToDo',
        'responsible' => 'Max Mustermann'
    ),
    array(
        'name' => 'CSS Datei erstellen',
        'description' => 'CSS Datei erstellen',
        'tab' => 'ToDo',
        'responsible' => 'Max Mustermann'
    ),
    array(
        'name' => 'PC eingeschaltet',
        'description' => 'PC einschalten',
        'tab' => 'Erledigt',
        'responsible' => 'Max Mustermann'
    ),
    array(
        'name' => 'Kaffee trinken',
        'description' => 'Kaffee trinken',
        'tab' => 'Erledigt',
        'responsible' => 'Petra Müller'
    ),
    array(
        'name' => 'Für die Uni lernen',
        'description' => 'Für die Uni lernen',
        'tab' => 'Verschoben',
        'responsible' => 'Max Mustermann'
    )
);

foreach ($tasks as $task) {
    echo "<tr>";
    echo ('<td>' . $task['name'] . '</td>');
    echo ('<td>' . $task['description'] . '</td>');
    echo ('<td>' . $task['tab'] . '</td>');
    echo ('<td>' . $task['responsible'] . '</td>');
    echo (' <td class="text-end">
                <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
            </tr>');
}
