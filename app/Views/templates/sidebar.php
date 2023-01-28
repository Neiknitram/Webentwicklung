<!-- Load Sidemenu -->
<div class="col-2">
    <div class="row">

        <!-- Side menu -->
        <div class="col sidemenu">
            <ul class="list-group">
                <li class="list-group-item"><a href="../login">Login</a></li>
                <li class="list-group-item"><a href="../projects">Projekte</a></li>
                <?php
                if (session_id() == '') {
                    session_start();
                }
                if (isset($_SESSION['ProjectID'])) {
                    echo('<li class="list-group-item"><a href="../todo">');
                    echo($_SESSION['ProjectName']);
                    echo('</a></li>');
                    echo('<li class="list-group-item menu-indented"><a href="../tab">Reiter</a></li>
                            <li class="list-group-item menu-indented"><a href="../tasks">Aufgaben</a></li>
                            <li class="list-group-item menu-indented"><a href="../members">Mitglieder</a></li>');
                }
                ?>
            </ul>
        </div>
    </div>
</div>
