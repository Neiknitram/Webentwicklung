<nav class="navbar navbar-expand-lg bg-light border-start border-bottom border-end mb-3">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="projects">Projekte</a>
                </li>

                <?php
                if(session_id() == '') {
                    session_start();
                }
                if(isset($_SESSION['ProjectID'])) {
                    echo('<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">');
                    echo($_SESSION['ProjectName']);
                    echo('</a>');
                    echo('<ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="todo">Projektübersicht</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="tab">Reiter</a></li>
                            <li><a class="dropdown-item" href="tasks">Aufgaben</a></li>
                            <li><a class="dropdown-item" href="members">Mitglieder</a></li>
                          </ul>
                          </li>');
                }
                ?>
            </ul>

            <form class="d-flex">
                <button class="btn btn-primary"><i class="fa-solid fa-arrow-right-from-bracket"></i> Ausloggen</button>
            </form>

        </div>
    </div>
</nav>

