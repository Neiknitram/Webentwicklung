<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">

        <!-- Login-Form -->
        <div class="col-12 col-lg-6 mx-auto">
            <div class="row">


                <form method="post" action="<?php echo base_url('/login'); ?>">

                    <!-- E-Mail input -->
                    <div class="form-group mb-2 mt-4">
                        <label for="inputEmail">Email-Adresse:</label>
                        <input type="email" class="form-control mt-1 <?= (isset($error['inputEmail']))?'is-invalid':'' ?>" name="inputEmail"
                               placeholder="Email-Adresse eingeben" value="<?= (isset($login['inputEmail']))?$login['inputEmail']:'' ?>">
                        <div class="invalid-feedback">
                            <?= (isset($error['inputEmail']))?$error['inputEmail']:'' ?>
                        </div>
                    </div>

                    <!-- Password input -->
                    <div class="form-group mb-2 mt-2">
                        <label for="inputPassword">Passwort:</label>
                        <input type="password" class="form-control mt-1 <?= (isset($error['inputPassword']))?'is-invalid':'' ?>" name="inputPassword"
                               placeholder="Passwort eingeben" value="<?= (isset($login['inputPassword']))?$login['inputPassword']:'' ?>">
                        <div class="invalid-feedback">
                            <?= (isset($error['inputPassword']))?$error['inputPassword']:'' ?>
                        </div>
                    </div>

                    <!-- Data privacy checkbox -->
                    <div class="form-check mb-2 mt-2">
                        <label class="form-check-label" for="checkDataprivacy">AGBs und Datenschutzbedingungen
                            akzeptieren</label>
                        <input type="checkbox" class="form-check-input mt-1
                        <?= (isset($error['checkDataprivacy']))?'is-invalid':'' ?>" name="checkDataprivacy"
                               id="checkDataprivacy" <?= (isset($login['checkDataprivacy']))?'checked':''?>>
                        <div class="invalid-feedback">
                            <?= (isset($error['checkDataprivacy']))?$error['checkDataprivacy']:'' ?>
                        </div>
                    </div>

                    <!-- Login button -->
                    <button type="submit" class="btn btn-primary mb-2 mt-2" value="Login">Einloggen <i class="fa-solid fa-right-to-bracket"></i></button>
                    <br>

                    <!-- Help text -->
                    <small class="form-text text-muted">
                        Noch nicht registriert? <a href="register">Registrierung</a><br>
                        Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="projects">Überspringen</a>
                    </small>

                </form>
            </div>
        </div>
    </div>
</div>