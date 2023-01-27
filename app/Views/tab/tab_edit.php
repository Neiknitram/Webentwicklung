<!-- Main container -->
<div class="container-fluid">

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Datensatz bearbeiten:</h5>
            <form action="<?php echo site_url('/tabEdit'); ?>" method="post">
                <!-- Project name -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Bezeichnung des Reiters:</label>
                    <?php
                    echo('<input type="hidden" id="ID" name="ID" value="'.$tab['ID'].'">');
                    echo('<input class="form-control" id="inputText" name="Name" placeholder="<Bezeichnung des Reiters>"');
                    echo(' value="'.$tab['Name'].'"');
                    echo('>');
                    ?>
                </div>
                <!-- Project description -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputTextarea">Beschreibung des Reiters:</label>
                        <?php
                        echo('<textarea class="form-control mt-1" id="inputTextarea" name="Beschreibung" rows="3"
                                  placeholder="<Beschreibung des Reiters>">');
                        echo($tab['Beschreibung']);
                        echo('</textarea>');
                        ?>
                    </div>
                </div>
            <div class="buttons text-end">
                <button type="submit" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                <a href="tab" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </div>

            </form>
        </div>
    </div>

</div>
