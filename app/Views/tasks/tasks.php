<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">

        <?php echo view('templates/sidebar'); ?>

        <div class="col-8">
            <div class="row mx-1 my-1">

                <!-- Table -->
                <table class="table border table-borderless mt-2">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Aufgabenbezeichnung</th>
                        <th scope="col">Beschreibung der Aufgabe</th>
                        <th scope="col">Reiter</th>
                        <th scope="col">Zuständig</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <!-- Load Tasklist -->
                    <tbody>
                    <?php
                        foreach ($tasks as $task) {
                        echo "<tr>";
                            echo('<td>' . $task['name'] . '</td>');
                            echo('<td>' . $task['description'] . '</td>');
                            echo('<td>' . $task['tab'] . '</td>');
                            echo('<td>' . $task['responsible'] . '</td>');
                            echo(' <td class="text-end">
                                <a href="tasks_edit"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="tasks_delete"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>');
                        }
                        ?>
                    </tbody>

                </table>
            </div>

            <div class="row">
                <form>
                    <h4 class="mt-4">Bearbeiten/Erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Aufgabenbezeichnung:</label>
                        <input class="form-control mt-1" id="inputText" placeholder="Aufgabenbezeichnung eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Beschreibung der Aufgabe:</label>
                            <textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                      placeholder="Beschreibung der Aufgabe eingeben"></textarea>
                        </div>
                    </div>

                    <!-- Datepicker creation -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputDateCreation">Erstellungsdatum:</label>
                            <input type="date" class="form-control mt-1" id="inputDateCreation">
                        </div>
                    </div>

                    <!-- Datepicker due -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputDateDue">Fällig bis:</label>
                            <input type="date" class="form-control mt-1" id="inputDateDue">
                        </div>
                    </div>

                    <!-- Select tab -->
                    <div class="form-group mb-3 mt-3">
                        <label for="selectTab">Zugehöriger Reiter:</label>
                        <select class="form-select mt-1" aria-label="Default select example" id="selectTab">
                            <option selected disabled>- bitte auswählen -</option>
                            <option>ToDo</option>
                            <option>Erledigt</option>
                            <option>Verschoben</option>
                        </select>
                    </div>

                    <!-- Select member -->
                    <div class="form-group mb-3 mt-3">
                        <label for="selectMember">Zuständig:</label>
                        <select class="form-select mt-1" aria-label="Default select example" id="selectMember">
                            <option selected disabled>- bitte auswählen -</option>
                            <option>Max Mustermann</option>
                            <option>Petra Müller</option>
                        </select>
                    </div>

                    <!-- Buttons -->
                    <button type="button" class="btn btn-primary mb-5 mt-2">Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-5 mt-2">Reset</button>

                </form>

            </div>

        </div>
    </div>
</div>


