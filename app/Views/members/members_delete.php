<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">
        <div class="col-6 mx-auto border rounded">
            <form method="post" action="<?php echo base_url('/membersDelete'); ?>">
                <!-- Text -->
                <h5 class="pt-2 pb-4">Sie sind dabei den Benutzer endgültig zu löschen.<br>Möchten Sie wirklich fortfahren?</h5>
                <!-- Buttons -->
                <button type="submit" class="btn btn-outline-danger mb-2 mt-2"><i class="fa-solid fa-trash"></i> Benutzer löschen</button>
                <a href="members" class="btn btn-secondary text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </form>
        </div>
    </div>

</div>

