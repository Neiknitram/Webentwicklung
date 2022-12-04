<?php
$tabs = array(
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

foreach ($tabs as $tab) {
    echo "<tr>";
    echo ('<td>' . $tab['name'] . '</td>');
    echo ('<td>' . $tab['description'] . '</td>');
    echo (' <td class="text-end">
                <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="#"><i class="fa-regular fa-trash-can"></i></a>
            </td>
            </tr>');
}
