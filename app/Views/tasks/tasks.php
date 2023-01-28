<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

        <div class="col-12 col-lg-8">
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

                            echo(' <td class="text-end">');
                            if(session_id() == '') {
                                session_start();
                            }
                            if(isset($_SESSION['ID'])) {
                                echo(' <a href="" data-bs-toggle="modal" data-bs-target="#taskEditModal"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#taskDelModal"><i class="fa-regular fa-trash-can"></i></a>');
                            }
                            echo('</td>
                            </tr>');
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <!-- Task edit Modal -->
            <div class="modal fade" id="taskEditModal" tabindex="-1" aria-labelledby="taskEditModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="taskEditModalLabel">Datensatz bearbeiten:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Project name -->
                            <div class="form-group mb-3 mt-3">
                                <label for="inputText">Aufgabenbezeichnung:</label>

                                <!-- FUNKTION FEHLT -->

                            </div>
                            <!-- Project description -->
                            <div class="form-group mb-3 mt-3">
                                <div class="form-group mb-2 mt-2">
                                    <label for="inputTextarea">Beschreibung der Aufgabe:</label>

                                    <!-- FUNKTION FEHLT -->

                                </div>
                            </div>
                            <!-- Datepicker creation -->
                            <div class="form-group mb-3 mt-3">
                                <div class="form-group mb-2 mt-2">
                                    <label for="inputDateCreation">Erstellungsdatum:</label>

                                    <!-- FUNKTION FEHLT -->

                                </div>
                            </div>
                            <!-- Datepicker due -->
                            <div class="form-group mb-3 mt-3">
                                <div class="form-group mb-2 mt-2">
                                    <label for="inputDateDue">Fällig bis:</label>

                                    <!-- FUNKTION FEHLT -->

                                </div>
                                <!-- Select tab -->
                                <div class="form-group mb-3 mt-3">
                                    <label for="selectTab">Zugehöriger Reiter:</label>
                                    <select class="form-select mt-1" aria-label="Default select example" id="selectTab" name="reiter">

                                        <!-- FUNKTION FEHLT -->

                                    </select>
                                </div>
                                <!-- Select member -->
                                <div class="form-group mb-3 mt-3">
                                    <label for="selectMember">Zuständig:</label>

                                    <!-- FUNKTION FEHLT -->

                                    <select class="form-select mt-1" aria-label="Default select example" id="selectMember" name="member">

                                        <!-- FUNKTION FEHLT -->

                                    </select>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                                <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Abbrechen</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Task delete Modal -->
            <div class="modal fade" id="taskDelModal" tabindex="-1" aria-labelledby="taskDelModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="taskDelModalLabel">Achtung!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sie sind dabei die gewählte Aufgabe unwiderruflich aus der Datenbank zu löschen. Möchten Sie den Vorgang durchführen?                        </div>
                        <div class="modal-footer">
                            <form method="post" action="<?php echo site_url('/tasksDelete'); ?>">
                                <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Aufgabe löschen</button>
                                <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Abbrechen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" action="<?php echo site_url('/tasksAdd'); ?>">
                    <h4 class="mt-4">Neue Aufgabe erstellen:</h4>

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
                            <?php
                            foreach ($tabs as $tab){
                                echo(' <option value="'.$tab['ID'].'">'.$tab['Name'].'</option>');
                            }
                            ?>
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
                    <button type="submit" name="save" class="btn btn-primary mb-5 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-5 mt-2"><i class="fa-solid fa-rotate-left"></i> Reset</button>

                </form>

            </div>

        </div>
    </div>
</div>


