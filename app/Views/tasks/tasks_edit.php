<!-- Main container -->
<div class="container-fluid">

    <div class="col-6 card mx-auto mt-5">
        <div class="card-header">
            Aufgabenplaner: <?php echo $page_title ?>
        </div>
        <div class="card-body">
            <h5 class="card-title text-uppercase">Datensatz bearbeiten:</h5>

            <form  action="<?php echo site_url('/tasksEdit'); ?>" method="post">
                <!-- Project name -->
                <div class="form-group mb-3 mt-3">
                    <label for="inputText">Aufgabenbezeichnung:</label>
                    <?php
                    echo('<input type="hidden" id="ID" name="ID" value="'.$task['ID'].'">');
                    echo('<input class="form-control mt-1" id="inputText" placeholder="<Aufgabenbezeichnung>" name="Name"');
                    echo(' value="'.$task['Name1'].'"');
                    echo('>');
                    ?>
                </div>
                <!-- Project description -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputTextarea">Beschreibung der Aufgabe:</label>
                        <?php
                        echo('<textarea class="form-control mt-1" id="inputTextarea" rows="3"
                                  placeholder="<Aufgabenbeschreibung>" name="description">');
                        echo($task['Beschreibung']);
                        echo('</textarea>');
                        ?>
                    </div>
                </div>
                <!-- Datepicker creation -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputDateCreation">Erstellungsdatum:</label>
                        <?php
                        echo('<input type="date" class="form-control mt-1" id="inputDateCreation" name="date1"');
                        echo(' value="'.$task['Erstellungsdatum'].'"');
                        echo('>');
                        ?>
                    </div>
                </div>
                <!-- Datepicker due -->
                <div class="form-group mb-3 mt-3">
                    <div class="form-group mb-2 mt-2">
                        <label for="inputDateDue">Fällig bis:</label>
                        <?php
                        echo('<input type="date" class="form-control mt-1" id="inputDateDue" name="date2"');
                        echo(' value="'.$task['Faelligkeitsdatum'].'"');
                        echo('>');
                        ?>
                    </div>
                </div>
                <!-- Select tab -->
                <div class="form-group mb-3 mt-3">
                    <label for="selectTab">Zugehöriger Reiter:</label>
                    <select class="form-select mt-1" aria-label="Default select example" id="selectTab" name="reiter">
                        <?php

                        //foreach ($reiterTasks as $reiter){
                        for($i=1;$i<=3;$i++){ // Work in progress
                            if($i==1){
                                $r = 'ToDo';
                            }else if($i==2){
                                $r = 'Erledigt';
                            }else{
                                $r = 'Verschoben';
                            }
                            echo('<option ');
                            if($r==$task['Name']) {
                                echo('selected ');
                            }
                            echo('value="'.$i.'">'.$r.'</option>');
                        }
                        ?>
                    </select>
                </div>
                <!-- Select member -->
                <div class="form-group mb-3 mt-3">
                    <label for="selectMember">Zuständig:</label>
                    <?php
                    foreach ($members as $member){
                        if($member['ID']==$task['UserID']) {
                            echo('<input type="hidden" id="lastUserID" name="lastUserID" value="'.$task['UserID'].'">');
                        }
                    }
                    ?>
                    <select class="form-select mt-1" aria-label="Default select example" id="selectMember" name="member">
                        <?php
                        foreach ($members as $member){
                            if($member['ID']==$task['UserID']) {
                                echo('<option selected ');
                            }else{
                                echo('<option ');
                            }
                            echo('value="'.$member['ID'].'">'.$member['Username'].'</option>');
                        }
                        ?>
                    </select>
                </div>



            <div class="buttons text-end">
                <button type="submit" name="save" class="btn btn-success mb-2 mt-2"><i class="fa-regular fa-floppy-disk"></i> Speichern</button>
                <a href="tasks" class="btn btn-danger text-light mb-2 mt-2"><i class="fa-solid fa-xmark"></i> Abbrechen</a>
            </div>
            </form>

        </div>
    </div>
</div>
