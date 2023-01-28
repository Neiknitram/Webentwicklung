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
                <?php
                foreach ($tabID as $tab) {
                    echo('<div class="col-12 col-lg mt-2 mb-2 mt-lg-0 mb-lg-0 ps-3 pe-3">
                    <div class="card">
                        <div class="card-header">');
                    echo($tab['Name']);
                    echo('</div>
                        <ul class="list-group list-group-flush">');
                    foreach ($todo as $card) {
                        if ($card['ID'] == $tab['ID']) {
                            echo('<li class="list-group-item">');
                            echo($card['Name1'] . ' (' . $card['Username'] . ')');
                            echo('</li>');
                        }
                    }
                    echo('</ul>
                    </div>
                </div>');

                }
                ?>
            </div>
        </div>
    </div>
</div>