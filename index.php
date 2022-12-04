<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner | Todos</title>

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
    <header class="bg-light">
        <h1 class="text-center">Aufgabenplaner: Todos (Aktuelles Projekt)</h1>
    </header>

    <div class="row">

        <!-- Sidebar -->
        <?php
        include './modules/sidebar.html';
        ?>

        <!-- Main content -->
        <div class="col">
            <div class="row">

                <!-- Card 01 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            ToDo:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                            <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Erledigt:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                            <li class="list-group-item">Kaffee tringen (Petra Müller)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Verschoben:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

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