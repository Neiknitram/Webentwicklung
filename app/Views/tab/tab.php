<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

        <div class="col-12 col-lg-8 ps-4 pe-4">
            <div class="row mx-1 my-1">

                <!-- Table -->
                <table class="table table-bordered table-striped table-borderless mt-2" data-toggle="table">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Beschreibung</th>
                        <th scope="col">Optionen</th>
                    </tr>
                    </thead>

                    <!-- Load Tablist -->
                    <tbody>
                        <?php
                        foreach ($tabs as $tab) {
                        echo "<tr>";
                            echo('<td>' . $tab['Name'] . '</td>');
                            echo('<td>' . $tab['Beschreibung'] . '</td>');
                            if(isset($_SESSION['ID'])) {
                                echo(' <td class="text-end">
                                      <a href="" title="Bearbeiten" data-bs-toggle="modal" data-bs-target="#tabEditModal"><i class="fa-regular fa-pen-to-square"></i></a>
                                      <a href="" title="Löschen" data-bs-toggle="modal" data-bs-target="#tabDelModal"><i class="fa-regular fa-trash-can"></i></a>
                                </td>');
                            }
                            echo('</tr>');
                        }
                        ?>
                    </tbody>

                </table>
            </div>

            <!-- Tab edit Modal -->
            <div class="modal fade" id="tabEditModal" tabindex="-1" aria-labelledby="tabEditModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="tabEditModalLabel">Datensatz bearbeiten:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Project name -->
                            <div class="form-group mb-3 mt-3">
                                <label for="inputText">Bezeichnung des Reiters:</label>
                                <?php
                                echo('<input type="hidden" id="ID" name="ID" value="'.$tab['ID'].'">');
                                echo('<input class="form-control" id="inputText" name="Name" placeholder="<Bezeichnung des Reiters>"');
                                echo(' value="'.$tab['Name'].'"');
                                echo('>');
                                ?>
                            </div>
                            <!-- Project description -->
                            <div class="form-group mb-3 mt-3">
                                <div class="form-group mb-2 mt-2">
                                    <label for="inputTextarea">Beschreibung des Reiters:</label>
                                    <?php
                                    echo('<textarea class="form-control mt-1" id="inputTextarea" name="Beschreibung" rows="3"
                                  placeholder="<Beschreibung des Reiters>">');
                                    echo($tab['Beschreibung']);
                                    echo('</textarea>');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                            <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Abbrechen</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab delete Modal -->
            <div class="modal fade" id="tabDelModal" tabindex="-1" aria-labelledby="tabDelModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="tasbDelModalLabel">Achtung!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sie sind dabei die gewählte Aufgabe unwiderruflich aus der Datenbank zu löschen. Möchten Sie den Vorgang durchführen?                        </div>
                        <div class="modal-footer">
                            <form method="post" action="<?php echo site_url('/tabDelete'); ?>">
                                <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Aufgabe löschen</button>
                                <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i> Abbrechen</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <form action="<?php echo site_url('/tabAdd'); ?>" method="post">
                    <h4 class="mt-4">Neuen Reiter erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Bezeichnung des Reiters:</label>
                        <input class="form-control" id="inputText" name="Name" placeholder="Bezeichnung des Reiters eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Beschreibung des Reiters:</label>
                            <textarea class="form-control mt-1" id="inputTextarea" name="Beschreibung" rows="3"
                                      placeholder="Beschreibung des Reiters eingeben"></textarea>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" name="save" class="btn btn-primary mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                    <button type="submit" class="btn btn-info text-light mb-2 mt-2"><i class="fa-solid fa-rotate-left"></i> Reset</button>

                </form>

            </div>

        </div>
    </div>
</div>