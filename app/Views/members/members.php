<!-- Main container TEST-->
<div class="container-fluid">

    <?php echo view('templates/headline'); ?>

    <div class="row">

        <?php echo view('templates/sidebar'); ?>

        <div class="col-8">
            <div class="row mx-1 my-1">
                <!-- Table -->
                <table class="table border table-borderless mt-2">
                    <thead class="bg-light">
                    <!-- Table headline -->
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">E-Mail</th>
                        <th scope="col">In Projekt</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>

                    <!-- Load Memberlist -->
                    <tbody>
                    <?php

                    foreach ($members as $member) {
                        echo "<tr>";
                        echo('<td>' . $member['Username'] . '</td>');
                        echo('<td>' . $member['EMail'] . '</td>');
                        echo('<td>
                                      <input class="form-check-input" type="checkbox" value="" id="item1check">
                                      <label class="form-check-label" for="item1check"></label>
                                  </td>
                                  <td class="text-end">
                                      <a href="#"><i class="fa-regular fa-pen-to-square"></i></a>
                                      <a href="#"><i class="fa-regular fa-trash-can"></i></a>
                                  </td>
                                  </tr>');
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div class="row">
                <form>
                    <h4 class="mt-4">Bearbeiten/Erstellen:</h4>
                    <!-- Username input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputText">Benutzername:</label>
                        <input class="form-control mt-1" id="inputText" placeholder="Benutzername eingeben">
                    </div>
                    <!-- E-Mail input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputEmail">Email-Adresse:</label>
                        <input type="email" class="form-control mt-1" id="inputEmail"
                               placeholder="Email-Adresse eingeben">
                    </div>
                    <!-- Password input -->
                    <div class="form-group mb-3 mt-3">
                        <label for="inputPassword">Passwort:</label>
                        <input type="password" class="form-control mt-1" id="inputPassword"
                               placeholder="Passwort eingeben">
                    </div>
                    <!-- Assigned to project -->
                    <div class="form-check mb-3 mt-3">
                        <label class="form-check-label" for="checkAssignedProject">Dem Projekt zugeordnet</label>
                        <input type="checkbox" class="form-check-input mt-1" id="checkAssignedProject">
                    </div>
                    <!-- Buttons -->
                    <button type="button" class="btn btn-primary mb-2 mt-2">Speichern</button>
                    <button type="button" class="btn btn-info text-light mb-2 mt-2">Reset</button>
                </form>
            </div>

        </div>
    </div>
</div>

