<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">
        <div class="col-6 mx-auto border rounded">
            <form>
                <!-- Project name -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Bezeichnung des Reiters:</label>
                    <input class="form-control" id="inputText" placeholder="<Bezeichnung des Reiters>">
                </div>
                <!-- Project description -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputTextarea">Projektbeschreibung:</label>
                        <textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                  placeholder="<Projektbeschreibung>"></textarea>
                    </div>
                </div>
                <!-- Buttons -->
                <a href="#" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</a>
                <a href="tab" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </form>
        </div>
    </div>

</div>