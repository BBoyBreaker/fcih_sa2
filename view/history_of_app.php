<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="history_style.css">
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        
<?php

class history_of_app {
    public $conn;
            function __construct() {
        include '../model/DBconnection.php';

        $this->history();
                }
            function history(){
                $db=new DBconnection();
                $sql="select id , start_time , date , user_id , place_id from history_of_appointment";
                $result=$db->database_query($sql);
                
                if(mysqli_num_rows($result)>0)
                        {
                    ?>
                           <table class="table table-hover table-bordered mytable" style="width: 900px">
                        <tr class="danger">
                    <th>Id</th>
                    <th>Name</th>
                     <th>E-mail</th>
                    <th>password</th>
                        <th>type</th>
                    <th>Actions</th>
                    <?php
                    while ($row=  mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $start_time=$row['start_time'];
                                $date=$row['date'];
                                $place_id=$row['place_id'];
                                $user_id=$row['user_id'];
                               echo '<table class="report_table">';
                                echo "<tr> <td> $id</td> <td>$start_time</td> <td>$date</td><td>$place_id</td> <td>$user_id</td></tr>";
                                echo '</table>';
                            }
                           
                        }else{echo"there is no data ";}
                    }
    
                    }

new history_of_app();
?>
 </body>
</html>