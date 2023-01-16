<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline');
    session_start();
    ?>

    <div class="row">
        <div class="col-6 mx-auto border rounded">
            <form method="post" action="<?php echo site_url('/membersEdit'); ?>">
                <!-- Username input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Benutzername:</label>
                    <?php
                    echo('<input class="form-control mt-1" id="inputText" name="inputText" placeholder="<Benutzername>" 
                        value="');
                    echo($_SESSION["Username"]);
                    echo('">');
                    ?>
                </div>
                <!-- E-Mail input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputEmail">Email-Adresse:</label>
                    <?php
                    echo('<input type="email" class="form-control mt-1" id="inputEmail" name="inputEmail" 
                        placeholder="<Email-Adresse>" value="');
                    echo($_SESSION["Email"]);
                    echo('">');
                    ?>

                </div>
                <!-- Password input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputPassword">Passwort:</label>
                    <input type="password" class="form-control mt-1" id="inputPassword" name="inputPassword"
                           placeholder="<Passwort>">
                </div>
                <!-- Assigned to project -->
                <div class="form-check mb-3 mt-3">
                    <label class="form-check-label" for="checkAssignedProject">Dem Projekt zugeordnet</label>
                    <input type="checkbox" class="form-check-input mt-1" id="checkProject"
                           name="checkProject">
                </div>
                <!-- Buttons -->
                <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                <a href="members" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </form>
        </div>
    </div>

</div>
