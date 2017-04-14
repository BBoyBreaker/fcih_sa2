<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="resources/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">      
    </head>
    <body>
        <div class="content">
            here the header
            <div class="contain_admin">
            <?php include 'view/Header.php';
                  include 'view/leftbarside.php';?>
                <div class="admin_contents">
                    <?php
                    include 'control/C_Appointment.php';
                    ?>
                </div>
                </div>
                    here the footer
        <div class="footer-bottom">
            <p>&copy; LEGACY 2016.  by Legacy team</p>
            </div>
        </div>
    </body>
</html>
