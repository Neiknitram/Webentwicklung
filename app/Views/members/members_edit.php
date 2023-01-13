<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">
        <div class="col-6 mx-auto border rounded">
            <form>
                <!-- Username input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Benutzername:</label>
                    <input class="form-control mt-1" id="inputText" placeholder="<Benutzername>">
                </div>
                <!-- E-Mail input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputEmail">Email-Adresse:</label>
                    <input type="email" class="form-control mt-1" id="inputEmail"
                           placeholder="<Email-Adresse>">
                </div>
                <!-- Password input -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputPassword">Passwort:</label>
                    <input type="password" class="form-control mt-1" id="inputPassword"
                           placeholder="<Passwort>">
                </div>
                <!-- Assigned to project -->
                <div class="form-check mb-3 mt-3">
                    <label class="form-check-label" for="checkAssignedProject">Dem Projekt zugeordnet</label>
                    <input type="checkbox" class="form-check-input mt-1" id="checkAssignedProject">
                </div>
                <!-- Buttons -->
                <a href="#" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</a>
                <a href="members" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </form>
        </div>
    </div>

</div>
