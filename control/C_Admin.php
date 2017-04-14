<h3>
    Admins
</h3>

<h2><a href="?page=showadmins&action=add">Add New Admin</a></h2>


<?php

include '../include/init.php';
include '../include/autoloader.php';

if ($_POST OR @$_GET['action']) {
    if (isset($_GET['action']) AND $_GET['action'] == "add") {
        include '../view/AdminAddstaff.php';
    }
    if (isset($_POST['submit']) && $_POST['submit'] == "Add") {

        $newAdminData['name'] = $_POST['name'];
        $newAdminData['email'] = $_POST['email'];
        $newAdminData['password'] = md5($_POST['password']);
        $newAdminData['city_id'] = 1;
        $newAdminData['inter_id'] = 2;
        $newAdminData['active'] = 1;
        $newAdminData['code'] = 3;
        $newAdminData['user_type'] = 2;

        $tablename = "users";

        try {
            include '../model/Add.php';
            $addNewAdmin = new Add($newAdminData, $tablename);

            if ($addNewAdmin) {
                echo '<script type="text/javascript"> alert("The New Admin was added !"); history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    // Delete:
    if (isset($_GET['action']) AND $_GET['action'] == "delete") {

        try {
            $tablename = "users";
            $id = $_GET['id'];
            include '../model/Delete.php';
            $delAdmin = new Delete($tablename);
            $delAdmin->deletRecordByID($id);
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
    
    
    // Edit:
     if (isset($_GET['action']) AND $_GET['action'] == "edit")
     {
         $id = $_GET['id'];
         $tablename = "users";
         include '../model/Display.php';
         $editAdminDis = new Display($tablename);
         $recAdmindata = $editAdminDis->getRecordByID($id);
         
         include '../view/AdminEditstaff.php';
     }
     if (isset($_POST['submit']) && $_POST['submit'] == "update")
     {
         $adminDataedit['name']     = $_POST['name'];
         $adminDataedit['email']    = $_POST['email'];
         $adminDataedit['password'] = $_POST['password'];
         
         try {                        
            $tablename = "users";
            include '../model/Update.php';
            $adminUpdate = new Update($adminDataedit, $tablename);
            $updtAdmin = $adminUpdate->editData($id);
            
            if($updtAdmin)
            {
                echo '<script type="text/javascript"> alert("The Admin was updated !"); history.back();</script>';
            }            
         } catch (Exception $exc) {
             echo $exc->getMessage();
         }
              
     }
    
} else {
    
    $tablename = "users";
    include '../model/Display.php';
    $displayAdmin = new Display($tablename);
    $adminDataDisplay = $displayAdmin->getAllData();

    include '../view/showadmins.php';
}
?>