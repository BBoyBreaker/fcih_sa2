<?php
 $tablename = "place";
    include '../model/Display.php';
    $displayAdmin = new Display($tablename);
    $adminDataDisplay = $displayAdmin->getAllData();

    include '../view/gallery.php';
    ?>