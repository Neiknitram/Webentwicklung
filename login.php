<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner | Login</title>

    <!-- Stylesheet + Bootstrap CSS + Font-Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- Main container -->
<div class="container-fluid">

    <!-- Header -->
    <header class="bg-light">
        <h1 class="text-center">Aufgabenplaner: Login</h1>
    </header>

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
                        Da der Login Vorgang technisch noch nicht realisiert wurde: <a href="index.php">Überspringen</a>
                    </small>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include './modules/footer.html' ?>

<!-- JQuery + JavaScript Bundle with Popper -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>