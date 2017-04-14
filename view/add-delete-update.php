<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/style.css">      
    </head>
    <body>
        <div class="content">
            <?php include 'header_admin.php';?>
            <div class="contain_admin">
            <?php include 'leftbarside.php';?>
                 <?php include 'index.php';?>
                <div class="admin_contents">
                    <?php
                    include '../control/C_Admin.php';
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
