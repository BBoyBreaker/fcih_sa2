<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="../css/report_style.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../resources/css/style.css">     
    </head>
    <body>
         <div class="content">
            <?php include 'header_admin.php';?>
             <div class="contain_admin">
            <?php include 'leftbarside.php';?>
                 <div class="admin_contents">
        <?php
        include '../model/report.php';
        
        $report=new report();
        ?>
        <div class="contain_report">
            <h1><u>REPORT OF ALL SITE</u></h1>
            <div class="report">
                <div><?php $report->admin(); ?></div>
                <div><?php $report->user(); ?></div>
                <div><?php $report->place(); ?></div>
                <div><?php $report->appointment(); ?></div>
                <div><?php $report->city(); ?></div>
                <div><?php $report->follower(); ?></div>
                <div><?php $report->advertisement(); ?></div>
                <div><?php $report->invoice();?>
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
