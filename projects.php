<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner | Projekte</title>

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
        <h1 class="text-center">Aufgabenplaner: Projekte</h1>
    </header>

    <div class="row">

        <!-- Sidebar -->
        <?php
        include './modules/sidebar.html';
        ?>

        <div class="col-8">
            <div class="row">
                <form>
                    <h4>Projekt auswählen:</h4>

                    <!-- Select project -->
                    <div class="form-group mb-3 mt-3">
                        <select class="form-select mt-1" aria-label="Default select example" id="selectProject">
                            <option selected disabled>- bitte auswählen -</option>
                        </select>
                    </div>

                    <!-- Buttons project -->
                    <button type="button" class="btn btn-primary mb-2 mt-2">Auswählen</button>
                    <button type="button" class="btn btn-primary mb-2 mt-2">Bearbeiten</button>
                    <button type="button" class="btn btn-danger mb-2 mt-2">Löschen</button>

                    <h4 class="mt-4">Projekt bearbeiten/erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Projektname:</label>
                        <input class="form-control mt-2" id="inputText" placeholder="Projekt">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Projektbeschreibung:</label>
                            <textarea class="form-control mt-2" id="inputTextarea" rows="3"
                                      placeholder="Beschreibung"></textarea>
                        </div>
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