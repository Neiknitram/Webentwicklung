<!-- Main container -->
<div class="container-fluid">

    <?php
    session_start();
    ?>

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Datensatz bearbeiten:</h5>
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
                    <?php
                    echo('<input type="checkbox" class="form-check-input mt-1" id="checkProject"
                           name="checkProject"');
                    foreach ($membersID as $ID){
                        if (isset($_SESSION['ID'])&& ($ID['mitglieder_id']==$_SESSION['ID'])) echo ('checked');
                    }
                    echo('>');
                    ?>
                </div>

                <!-- Buttons -->
                <div class="buttons text-end">
                    <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                    <a href="members" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
                </div>
            </form>
        </div>
    </div>

</div>
