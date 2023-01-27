<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

        <div class="col-8">
            <div class="row mx-1 my-1">

                <!-- Table -->
                <table class="table border table-borderless mt-2">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Aufgabenbezeichnung</th>
                        <th scope="col">Beschreibung der Aufgabe</th>
                        <th scope="col">Reiter</th>
                        <th scope="col">Zuständig</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <!-- Load Tasklist -->
                    <tbody>
                    <?php
                        foreach ($tasks as $task) {
                        echo "<tr>";
                            echo('<td>' );
                            if (isset($task['Name1'])) echo($task['Name1']);
                            echo('</td>');

                            echo('<td>' );
                            if (isset($task['Beschreibung'])) echo($task['Beschreibung']);
                            echo('</td>');

                            echo('<td>' );
                            if (isset($task['Name'])) echo($task['Name']);
                            echo('</td>');

                            echo('<td>' );
                            if (isset($task['Username'])) echo($task['Username']);
                            echo('</td>');
                            echo(' <td class="text-end">
                                <a href="tasks_edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="tasks_delete"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>');
                        }
                        ?>
                    </tbody>

                </table>
            </div>

            <div class="row">
                <form method="post" action="<?php echo site_url('/tasksAdd'); ?>">
                    <h4 class="mt-4">Erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Aufgabenbezeichnung:</label>
                        <input class="form-control mt-1" id="inputText" name="Name" placeholder="Aufgabenbezeichnung eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Beschreibung der Aufgabe:</label>
                            <textarea class="form-control mt-1" id="inputTextarea" name="Beschreibung" rows="3"
                                      placeholder="Beschreibung der Aufgabe eingeben"></textarea>
                        </div>
                    </div>

                    <!-- Datepicker creation -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputDateCreation">Erstellungsdatum:</label>
                            <input type="date" name="Erstellungsdatum" class="form-control mt-1" id="inputDateCreation">
                        </div>
                    </div>

                    <!-- Datepicker due -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputDateDue">Fällig bis:</label>
                            <input type="date" name="Faelligkeitsdatum" class="form-control mt-1" id="inputDateDue">
                        </div>
                    </div>

                    <!-- Select tab -->
                    <div class="form-group mb-3 mt-3">
                        <label for="selectTab">Zugehöriger Reiter:</label>
                        <select name="reiter" class="form-select mt-1" aria-label="Default select example" id="selectTab">
                            <option selected disabled>- bitte auswählen -</option>
                            <option value="1">ToDo</option>
                            <option value="2">Erledigt</option>
                            <option value="3">Verschoben</option>
                        </select>
                    </div>

                    <!-- Select member -->
                    <div class="form-group mb-3 mt-3">
                        <label for="selectMember">Zuständig:</label>
                        <select class="form-select mt-1" aria-label="Default select example" id="selectMember" name="member">
                            <option selected disabled>- bitte auswählen -</option>
                            <?php
                            foreach ($members as $member){
                                echo('<option value="'.$member['ID'].'">'.$member['Username'].'</option>');
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" name="save" class="btn btn-primary mb-5 mt-2">Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-5 mt-2">Reset</button>

                </form>

            </div>

        </div>
    </div>
</div>


