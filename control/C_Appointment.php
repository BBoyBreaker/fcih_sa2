<h3>
    Appointments
</h3>

<h2><a href="?page=AppointmentTable&action=add">Add New Appointment</a></h2>

<?php

if ($_POST OR @$_GET['action']) {
    if (isset($_GET['action']) AND $_GET['action'] == "add") {
        include '/view/Appointment.php';
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {

        $newApp['start_time'] = $_POST['start_time'];
        $newApp['date'] = $_POST['date'];
        $newApp['user_id'] = $_POST['user_id'];
        $newApp['place_id'] = $_POST['place_id'];
        

        $tablename = "appointment";

        try {
            include 'model/Add.php';
            $addNewApp = new Add($newApp, $tablename);

            if ($addNewApp) {
                echo '<script type="text/javascript"> alert("The New Appointement was added !"); history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
} else {
    
    $tablename = "appointment";
    include '../model/Display.php';
    $displayApp = new Display($tablename);
    $appDataDisplay = $displayApp->getAllData();

    include '../view/AppointmentTable.php';
}