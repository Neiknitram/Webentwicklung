<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner | Mitglieder</title>

    <!-- Stylesheet + Bootstrap CSS + Font-Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>

<!-- Main container -->
<div class="container-fluid">

    <!-- Header -->
    <?php
        $title = "Mitglieder";
        include "./modules/header.html";
    ?>

    <div class="row">


        <?php  include './modules/sidebar.html'; ?>

        <div class="col-8">
            <div class="row mx-1 my-1">
                <!-- Table -->
                <table class="table border table-borderless mt-2">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">In Projekt</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <?php include './data/memberlist.php'; ?>

                </table>
            </div>

            <div class="row">
                <form>
                    <h4 class="mt-4">Bearbeiten/Erstellen:</h4>
                    <!-- Username input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Username:</label>
                        <input class="form-control mt-1" id="inputText" placeholder="Username">
                    </div>
                    <!-- E-Mail input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputEmail">Email-Addresse:</label>
                        <input type="email" class="form-control mt-1" id="inputEmail"
                               placeholder="Email-Adresse eingeben">
                    </div>
                    <!-- Password input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputPassword">Passwort:</label>
                        <input type="password" class="form-control mt-1" id="inputPassword"
                               placeholder="Passwort eingeben">
                    </div>
                    <!-- Assigned to project -->
                    <div class="form-check mb-3 mt-3">
                        <label class="form-check-label" for="checkAssignedProject">Dem Projekt zugeordnet</label>
                        <input type="checkbox" class="form-check-input mt-1" id="checkAssignedProject">
                    </div>
                    <!-- Buttons -->
                    <button type="button" class="btn btn-primary mb-2 mt-2">Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-2 mt-2">Reset</button>
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