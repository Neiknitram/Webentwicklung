<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">

        <?php echo view('templates/sidebar');?>

        <div class="col-8">
            <div class="row">
                <form action="<?php echo site_url('/select_projects'); ?>" method="post">
                    <h4>Projekt auswählen:</h4>

                    <!-- Select project -->
                    <div class="form-group mb-3 mt-3">
                        <select class="form-select mt-1" aria-label="Default select example" id="selectProject" name="selectProject">
                            <option value ="" selected disabled>- bitte auswählen -</option>
                            <?php
                            foreach ($projects as $project){
                                echo('<option value="'.$project['ID'].'">'.$project['Name'].'</option>');
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Buttons project -->
                    <button type="submit" name="submit" class="btn btn-primary mb-2 mt-2">Auswählen</button>
                    <a href="projects_edit" class="btn btn-primary mb-2 mt-2">Bearbeiten</a>
                    <button type="button" class="btn btn-danger mb-2 mt-2">Löschen</button>
                </form>
                <form action="<?php echo site_url('/add_projects'); ?>" method="post">
                    <h4 class="mt-4">Projekt erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Projektname:</label>
                        <input class="form-control mt-2" id="inputText" placeholder="Projektname eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Projektbeschreibung:</label>
                            <textarea class="form-control mt-2" id="inputTextarea" rows="3"
                                      placeholder="Projektbeschreibung eingeben"></textarea>
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

