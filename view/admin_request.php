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
            <?php include 'sidebar.php';?>
 
                <div class="admin_contents">
                    <?php 
                    include 'request_ad.php';
                    $admin = new request_ad();
                    $admin->request();
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
