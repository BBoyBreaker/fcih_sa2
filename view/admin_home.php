<?php
include '../control/notification.php';
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <link rel="stylesheet" type="text/css" href="../css/normalize.css">      
    </head>
    <body>
        <div class="content">
            <?php include 'header_admin.php';?>
            <div class="contain_admin">
            <?php include 'leftbarside.php';?>
 
                <div class="admin_contents">
                    <div class="left">
                    <div class="add_user">
                    
                    <div class="update_user">
                    <h1>ADD,UPDATE,AND DELETE A USER</h1>
                    <p>To Add A New User Or Delete Or Update A Current User Info, Just Click Here</p>
                    <a href="../view/add-delete-update.php"><button>Go</button></a>
                    </div>
                    <div class="monthly_report">
                     <h1>REPORT FOR ALL SYSTEM</h1>
                    <p>To Show The Monthly Report And Display Info About The Site Just Click Here</p>
                    <a href="../view/Report.php"><button>Go</button></a>   
                    </div>
                    <div class="appointment_secudle">
                    <h1>appointment reschedule</h1>
                    <p>To Show The Table Of Appointments Of The Users Just Click Here</p>
                    <a href="appointment.php"><button>Go</button></a>    
                    </div>
                </div>
                </div>
                </div>
                    here the footer
        <div class="footer-bottom">
            <p>&copy; LEGACY 2016.  by Legacy team</p>
            </div>
        </div>
    </body>
</html>
