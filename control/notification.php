<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         include '../model/DBconnection.php';
         include '../model/Email.php';
         $database= new Dbconnection;
         
        $date=date('Y-m-d');
        /*date_format($date, 'Y-m-d ');*/
        $sql="select email , start_time from users , appointment where users.id= appointment.user_id and appointment.date = '$date'";
        $result=  $database->database_query($sql);
        $arr= array();
        $arr1=array();
        while ($row =  mysqli_fetch_array($result)){
            $arr[]=$row['email'];
            $arr1[]=$row['start_time'];
        }
        
        
        $email=new Email();
        $sub="Hi ser Legecy Notify You ";
        
       for($i=0;$i<count($arr);$i++){
           $mail=$arr[$i];
           $body="Hi "."$arr[$i] "."<br>"."you have an appointment today ser at "."$arr1[$i]";
           $email->sendmail($mail, $sub, $body);
       }
        ?>
    </body>
</html>
