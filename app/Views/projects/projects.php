<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar');?> -->

        <div class="col-12 col-lg-8 ps-4 pe-4">
            <div class="row">
                <form action="<?php echo site_url('/select_projects'); ?>" method="post">
                    <h4>Projekt auswählen:</h4>

                    <!-- Select project -->
                    <div class="form-group mb-3 mt-3">


                        <select class="form-select mt-1" aria-label="Default select example" id="selectProject"
                                name="selectProject">
                            <?php

                            if (session_id() == '') {
                                session_start();
                            }
                            //if (isset($_SESSION["ProjectID"])) setID();
                            echo('<option value ="" ');
                            if (!isset($_SESSION['ProjectID'])) {
                                echo('selected ');
                            }
                            echo('disabled>- bitte auswählen -</option>');
                            foreach ($projects as $project) {
                                echo('<option value="'.$project["ID"].'" ');
                                if(isset($_GET["projectID"])){
                                    if($_GET["projectID"] == $project['ID']) echo('selected ');
                                }else if (isset($_SESSION['ProjectID']) && ($_SESSION['ProjectID'] == $project['ID'])) {
                                    echo('selected ');
                                }
                                echo('value="' . $project['ID'] . '">' . $project['Name'] . '</option>');
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Buttons project -->
                    <button type="submit" name="select" class="btn btn-primary mb-2 mt-2"><i
                                class="fa-regular fa-hand-pointer"></i> Auswählen
                    </button>
                    <?php
                    if (isset($_GET["projectID"])){
                    echo('
                    
                    <a id="edit" data-bs-toggle="modal" data-bs-target="#projectEditModal'.$_GET["projectID"].'" 
                       class="btn btn-primary mb-2 mt-2"><i class="fa-regular fa-pen-to-square"></i> Bearbeiten</a>
                    <a data-bs-toggle="modal" data-bs-target="#projectDelModal'.$_GET["projectID"].'" 
                       class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Löschen</a>');
                    }else{

                    }
                    
                echo('</form>');
                ?>

                <form action="<?php echo site_url('/add_projects'); ?>" method="post">
                    <h4 class="mt-4">Neues Projekt erstellen:</h4>

                    <!-- Project name -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Projektname:</label>
                        <input class="form-control mt-2" id="inputText" . name="name"
                               placeholder="Projektname eingeben">
                    </div>

                    <!-- Project description -->
                    <div class="form-group mb-3 mt-3">
                        <div class="form-group mb-2 mt-2">
                            <label for="inputTextarea">Projektbeschreibung:</label>
                            <textarea class="form-control mt-2" id="inputTextarea" name="text" rows="3"
                                      placeholder="Projektbeschreibung eingeben"></textarea>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" name="save" class="btn btn-primary mb-2 mt-2"><i
                                class="fa-regular fa-floppy-disk"></i> Speichern
                    </button>
                    <button type="submit" name="reset" class="btn btn-info text-light mb-2 mt-2"><i
                                class="fa-solid fa-rotate-left"></i> Reset
                    </button>

                </form>

            </div>

        </div>

        <!-- Project edit Modal -->
        <?php
        foreach ($projects as $project) {

        echo('
        <div class="modal fade" id="projectEditModal'.$project["ID"].'" tabindex="-1" aria-labelledby="projectEditModalLabel"
             aria-hidden="true">
             <form action="'.site_url('/projectsEdit').'" method="post">
             <input type="hidden" id="ID" name="ID" value="'.$project['ID'].'">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="projectEditModalLabel">Datensatz bearbeiten:</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Project name -->
                        <div class="form-group mb-3 mt-3">
                            <label for="inputText">Projektname:</label>');
                            echo('<input class="form-control mt-2" id="inputText" name="name" placeholder="<Projektname>"');

                            echo(' value="' . $project["Name"] . '"');

                            echo('>
                        </div>

                        <!-- Project description -->
                        <div class="form-group mb-3 mt-3">
                            <div class="form-group mb-2 mt-2">
                                <label for="inputTextarea">Projektbeschreibung:</label>
                                <textarea class="form-control mt-2" id="inputTextarea" name="text" rows="3"
                                          placeholder="<Projektbeschreibung>">');
                            echo($project["Beschreibung"].'
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success mb-2 mt-2" value="Save"><i
                                    class="fa-regular fa-floppy-disk"></i> Speichern
                        </button>
                        <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i
                                    class="fa-solid fa-xmark"></i> Abbrechen
                        </button>
                    </div>
                </div>
            </div>
            </form>
        </div>');}
        ?>

        <!-- Project delete Modal -->
<?php
foreach ($projects as $project) {

    echo('
        <div class="modal fade" id="projectDelModal'.$project["ID"].'" tabindex="-1" aria-labelledby="projectDelModalLabel"
             aria-hidden="true">
             <form action="'.site_url('/projectsDelete').'" method="post">
             <input type="hidden" id="ID" name="ID" value="'.$project['ID'].'">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-uppercase" id="projectDelModalLabel">Achtung!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Sie sind dabei das gewählte Projekt unwiderruflich aus der Datenbank zu löschen. Möchten Sie den
                        Vorgang durchführen?
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="'.site_url('/projectsDelete').'">
                            <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i>
                                Projekt löschen
                            </button>
                            <button type="button" class="btn btn-outline-danger mb-2 mt-2" data-bs-dismiss="modal"><i
                                        class="fa-solid fa-xmark"></i> Abbrechen
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            </form>
        </div>');
    }
?>

    </div>
</div>
<script>
    document.getElementById("selectProject").onchange = function() {
        window.location = "projects?projectID=" + this.value;
    };
<?php
if(!isset($_GET["projectID"])){

    echo('

            function setID(id) {
                window.location = "projects?projectID=" + id ;
            };');
    if (isset($_SESSION["ProjectID"])) echo('setID('.$_SESSION["ProjectID"].');
            

           

');
}
?>
</script>


