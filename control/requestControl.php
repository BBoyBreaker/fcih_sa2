<?php
class requestControl{
    


/*
if(!isset($_SESSION['name']))
{
    echo '<p class="error">Please<a href="http://localhost/WWW/view/login.php">LOGIN</a> First </p>';
    exit();
}
else
{*/
public function ee(){
    include '../include/init.php';
    include '../include/autoloader.php';
    if(isset($_POST['submit'])  ){
        $newAdminData['title'] = $_POST['title'];
        $newAdminData['name'] = $_POST['name'];
        $newAdminData['mobile'] = $_POST['mobile'];
        $newAdminData['city'] = $_POST['city'];
          $newAdminData['option']= $_POST['option'];
        $newAdminData['textarea'] = $_POST['textarea'];
        
        
        //$newAdminData['type_id'] = 1;
        
        $newAdminData['email'] = "programmermasrawy@gmail.com";//$_SESSION['name'];
        //$newAdminData['city_id'] = 1;

        $newAdminData['price'] = $_POST['price'];
        
        $upload = addslashes($_FILES['image']['tmp_name']);
        $upload = file_get_contents($upload);
        $upload = base64_encode($upload);
        $newAdminData['image'] = $upload;
        
       
        
       
        $tablename = "place";
         try {
            include '../model/Add.php';
            $addNewAdmin = new Add($newAdminData, $tablename);

            if ($addNewAdmin) {
                echo '<script type="text/javascript"> alert("The New AD was added !"); history.back();</script>';
            }
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }
 else {
      
    }
        

   // }
//}
}

}
?>
