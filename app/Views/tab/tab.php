<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

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

                    <!-- Load Tablist -->
                    <tbody>
                        <?php
                        foreach ($tabs as $tab) {
                        echo "<tr>";
                            echo('<td>' . $tab['Name'] . '</td>');
                            echo('<td>' . $tab['Beschreibung'] . '</td>');
                            echo(' <td class="text-end">
                                <a href="tab_edit?tab='.$tab['ID'].'"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="tab_delete?tab='.$tab['ID'].'"><i class="fa-regular fa-trash-can"></i></a>
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
                        <label for="inputText">Bezeichnung des Reiters:</label>
                        <input class="form-control" id="inputText" placeholder="Bezeichnung des Reiters eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Beschreibung des Reiters:</label>
                            <textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                      placeholder="Beschreibung des Reiters eingeben"></textarea>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="button" class="btn btn-primary mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-2 mt-2"><i class="fa-solid fa-rotate-left"></i> Reset</button>

                </form>

            </div>

        </div>
    </div>
</div>