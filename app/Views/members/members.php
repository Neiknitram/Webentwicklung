<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

        <div class="col-12 col-lg-8 ps-4 pe-4">
            <div class="row">
                <!-- Table -->
                <table class="table table-bordered table-striped table-borderless mt-2" data-toggle="table">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">In Projekt</th>
                        <th scope="col">Optionen</th>
                    </tr>
                    </thead>

                    <!-- Load Memberlist -->
                    <tbody>
                    <?php
                    foreach ($members as $member) {
                        echo "<tr>";
                        echo('<td>' . $member['Username'] . '</td>');
                        echo('<td>' . $member['EMail'] . '</td>');
                        echo('<td>
                                      <input class="form-check-input" type="checkbox" value="" id="item1check"');
                        foreach ($membersID as $ID) {
                            if (isset($_SESSION['ID']) && ($ID['mitglieder_id'] == $member['ID'])) echo('checked');
                        }
                        echo(' disabled>
                                      <label class="form-check-label" for="item1check"></label>
                                  </td>');
                        if (isset($_SESSION['ID'])) {
                            if ($member['ID'] == $_SESSION['ID']) {
                                echo('
                                  <td class="text-end">
                                      <a href="" title="Bearbeiten" data-bs-toggle="modal" data-bs-target="#membersEditModal'.$member['ID'].'"><i class="fa-regular fa-pen-to-square"></i></a>
                                      <a href="" title="Löschen" data-bs-toggle="modal" data-bs-target="#membersDelModal'.$member['ID'].'"><i class="fa-regular fa-trash-can"></i></a>
                                      </td>');
                            } else {
                                echo('<td></td>');
                            }
                        }
                        echo('</tr>');
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <!-- Members edit Modal -->
            <?php
            foreach ($members as $member) {
                echo('
            <div class="modal fade" id="membersEditModal' . $member['ID'] . '" tabindex="-1" aria-labelledby="membersEditModalLabel"
                 aria-hidden="true">
            
                <form method="post" action="'.site_url('/membersEdit').'">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="membersEditModalLabel">Datensatz bearbeiten:</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- Username input -->
                            <div class="form-group mb-3 mt-3">
                                <label for="inputText">Benutzername:</label>');

                                echo('<input class="form-control mt-1" id="inputText" name="inputText" placeholder="<Benutzername>" 
                        value="');
                                if (isset($_SESSION["Username"])) echo($_SESSION["Username"]);
                                echo('">
                                
                            </div>
                            <!-- E-Mail input -->
                            <div class="form-group mb-3 mt-3">
                                <label for="inputEmail">Email-Adresse:</label>');

                                echo('<input type="email" class="form-control mt-1" id="inputEmail" name="inputEmail" 
                        placeholder="<Email-Adresse>" value="');
                                if (isset($_SESSION["Email"])) echo($_SESSION["Email"]);
                                echo('">');
                                echo('
                            </div>
                            <!-- Password input -->
                            <div class="form-group mb-3 mt-3">
                                <label for="inputPassword">Passwort:</label>
                                <input type="password" class="form-control mt-1" id="inputPassword" name="inputPassword"
                                       placeholder="<Passwort>">
                            </div>
                            <!-- Assigned to project -->
                            <div class="form-check mb-3 mt-3">
                                <label class="form-check-label" for="checkAssignedProject">Dem Projekt
                                    zugeordnet</label>');

                                echo('<input type="checkbox" class="form-check-input mt-1" id="checkProject"
                           name="checkProject"');
                                foreach ($membersID as $ID) {
                                    if (isset($_SESSION['ID']) && ($ID['mitglieder_id'] == $_SESSION['ID'])) echo('checked');
                                }
                                echo('>
                                
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i
                                        class="fa-regular fa-floppy-disk"></i> Speichern
                            </button>
                            <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i> Abbrechen
                            </button>
                        </div>

                    </div>
                </div>
                </form>
            </div>');
}
?>
            <!-- Members delete Modal -->
<?php
foreach ($members as $member) {
    echo('
            <div class="modal fade" id="membersDelModal' . $member['ID'] . '" tabindex="-1" aria-labelledby="membersDelModalLabel"
                 aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-uppercase" id="membersDelModalLabel">Achtung!</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Sie sind dabei den gewählten Benutzer unwiderruflich aus der Datenbank zu löschen. Möchten
                            Sie den Vorgang durchführen?
                        </div>
                        <div class="modal-footer">
                            <form method="post" action="' . site_url('/membersDelete') . '">
                                <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i>
                                    Benutzer löschen
                                </button>
                                <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal">
                                    <i class="fa-solid fa-xmark"></i> Abbrechen
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>');
}
    ?>

            <div class="row">
                <form method="post" action="<?php echo site_url('/membersAdd')?>">
                    <h4 class="mt-3">Neues Mitglied erstellen:</h4>
                    <!-- Username input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Benutzername:</label>
                        <input class="form-control mt-1" name="inputText" id="inputText"
                               placeholder="Benutzername eingeben">
                    </div>
                    <!-- E-Mail input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputEmail">Email-Adresse:</label>
                        <input type="email" class="form-control mt-1" name="inputEmail" id="inputEmail"
                               placeholder="Email-Adresse eingeben">
                    </div>
                    <!-- Password input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputPassword">Passwort:</label>
                        <input type="password" class="form-control mt-1" name="inputPassword" id="inputPassword"
                               placeholder="Passwort eingeben">
                    </div>
                    <!-- Assigned to project -->
                    <div class="form-check mb-3 mt-3">
                        <label class="form-check-label" for="checkAssignedProject">Dem Projekt zugeordnet</label>
                        <input type="checkbox" class="form-check-input mt-1" id="checkAssignedProject"
                               name="checkAssignedProject">
                    </div>
                    <!-- Buttons -->
                    <button type="submit" name="save" class="btn btn-primary mb-2 mt-2"><i
                                class="fa-regular fa-floppy-disk"></i> Speichern
                    </button>
                    <button type="submit" name="reset" class="btn btn-info text-light mb-2 mt-2"><i
                                class="fa-solid fa-rotate-left"></i> Reset
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>

