<!-- Main container -->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <?php echo view('templates/navbar'); ?>

    <div class="row mt-3 justify-content-center">

        <!-- < ?php echo view('templates/sidebar'); ?> -->

        <!-- Main content -->
        <div class="col">
            <div class="row">

                <!-- Card 01 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            ToDo:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">HTML Datei erstellen (Max Mustermann)</li>
                            <li class="list-group-item">CSS Datei erstellen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 02 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Erledigt:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">PC eingeschaltet (Petra Müller)</li>
                            <li class="list-group-item">Kaffee trinken (Petra Müller)</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 03 -->
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            Verschoben:
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Für die Uni lernen (Max Mustermann)</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>