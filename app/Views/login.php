<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">

        <!-- Login-Form -->
        <div class="col-6 mx-auto">
            <div class="row">
                <form>
                    <!-- E-Mail input -->
                    <div class="form-group mb-2 mt-4">
                        <label for="inputEmail">Email-Addresse:</label>
                        <input type="email" class="form-control mt-1" id="inputEmail"
                               placeholder="Email-Adresse eingeben" required>
                    </div>
                    <!-- Password input -->
                    <div class="form-group mb-2 mt-2">
                        <label for="inputPassword">Passwort:</label>
                        <input type="password" class="form-control mt-1" id="inputPassword"
                               placeholder="Passwort eingeben" required>
                    </div>
                    <!-- Data privacy checkbox -->
                    <div class="form-check mb-2 mt-2">
                        <label class="form-check-label" for="checkDataprivacy">AGBs und Datenschutzbedingungen
                            akzeptieren</label>
                        <input type="checkbox" class="form-check-input mt-1" id="checkDataprivacy" required>
                    </div>
                    <!-- Login button -->
                    <button type="submit" class="btn btn-primary mb-2 mt-2">Einloggen</button>
                    <br>
                    <!-- Help text -->
                    <small class="form-text text-muted">
                        Noch nicht registriert? <a href="#">Registrierung</a><br>
                        Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="todo">Überspringen</a>
                    </small>
                </form>
            </div>
        </div>
    </div>
</div>