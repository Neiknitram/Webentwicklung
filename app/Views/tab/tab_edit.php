<!-- Main container -->
<div class="container-fluid">

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Datensatz bearbeiten:</h5>
            <form>
                <!-- Project name -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Bezeichnung des Reiters:</label>
                    <input class="form-control" id="inputText" placeholder="<Bezeichnung des Reiters>">
                </div>
                <!-- Project description -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputTextarea">Beschreibung des Reiters:</label>
                        <textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                  placeholder="<Beschreibung des Reiters>"></textarea>
                    </div>
                </div>
            </form>
            <div class="buttons text-end">
                <a href="#" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</a>
                <a href="tab" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </div>
        </div>
    </div>

</div>
