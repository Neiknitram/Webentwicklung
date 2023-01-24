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
                    <label for="inputText">Aufgabenbezeichnung:</label>
                    <input class="form-control mt-1" id="inputText" placeholder="<Aufgabenbezeichnung>">
                </div>
                <!-- Project description -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputTextarea">Beschreibung der Aufgabe:</label>
                        <textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                  placeholder="<Aufgabenbeschreibung>"></textarea>
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

            </form>

            <div class="buttons text-end">
                <a href="#" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</a>
                <a href="tasks" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </div>

        </div>
    </div>
</div>
