<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Aufgabenplaner | Reiter</title>

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
        <h1 class="text-center">Aufgabenplaner: Reiter</h1>
    </header>

    <div class="row">

        <!-- Sidebar -->
        <?php
        include './modules/sidebar.html';
        ?>

        <div class="col-8">
            <div class="row mx-1 my-1">

                <!-- Table -->
                <table class="table border table-borderless mt-2">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Beschreibung</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item-01 -->
                    <tr>
                        <td>ToDo</td>
                        <td>Dinge die erledigt werden müssen</td>
                        <!-- Buttons -->
                        <td class="text-end">
                            <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <!-- Item-02 -->
                    <tr>
                        <td>Erledigt</td>
                        <td>Dinge die erledigt sind.</td>
                        <!-- Buttons -->
                        <td class="text-end">
                            <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    <!-- Item-03 -->
                    <tr>
                        <td>Verschoben</td>
                        <td>Dinge die später erledigt werden.</td>
                        <!-- Buttons -->
                        <td class="text-end">
                            <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                            <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <form>
                    <h4 class="mt-4">Bearbeiten/Erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Projektname:</label>
                        <input class="form-control" id="inputText" placeholder="Projekt">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Projektbeschreibung:</label>
                            <textarea class="form-control mt-1" id="inputTextarea" rows="3"
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