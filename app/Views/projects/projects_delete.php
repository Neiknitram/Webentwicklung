<!-- Main container -->
<div class="container-fluid">

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Achtung!</h5>
            <p class="card-text">Sie sind dabei das gewählte Projekt unwiderruflich aus der Datenbank zu löschen. Möchten Sie den Vorgang durchführen?</p>
            <div class="buttons text-end">
                <form method="post" action="<?php echo site_url('/projectsDelete'); ?>">
                    <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Projekt löschen</button>
                    <a href="projects" class="btn btn-outline-danger mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
                </form>
            </div>
        </div>
    </div>

</div>

