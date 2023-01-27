<!-- Main container -->
<div class="container-fluid">

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Achtung!</h5>
            <p class="card-text">Sie sind dabei den gewählten Reiter unwiderruflich aus der Datenbank zu löschen. Möchten Sie den Vorgang durchführen?</p>
            <div class="buttons text-end">
                <button type="submit" class="btn btn-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Reiter löschen</button>
                <a href="tab" class="btn btn-outline-danger mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </div>
        </div>
    </div>

</div>

