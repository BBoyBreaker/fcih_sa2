<?php
include_once  'DBconnection.php';


class report{
    
    function __construct() {
        
        $db= new DBconnection();
        
    }


    //Admin 
    function admin(){
        $db= new DBconnection();
        $sql="select * from users where user_type=1";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  Admins";
    }
    
    //User
     function user(){
         $db= new DBconnection();
         $sql="select * from users where user_type=2";
         $result=$db->database_query($sql);
          $number=  mysqli_num_rows($result);
           echo "$number"."  Users";
    }
    
    
    //Land
    function place(){
        $db= new DBconnection();
         $sql="SELECT * FROM place ";
         $result=$db->database_query($sql);
          $number=  mysqli_num_rows($result);
          echo "$number"."  Lands";
           
    }
    
    //Appointment
    function appointment(){
        $db= new DBconnection();
        $sql="select * from appointment";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  Appointments";
    }
    //city
    function  city(){
        $db= new DBconnection();
        $sql="select * from citys";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  Citys";
    }
    //follower
    function follower(){
        $db= new DBconnection();
        $sql="select * from followers";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  Followers";
    }
    //Advertisement
    function advertisement(){
        $db= new DBconnection();
        $sql="select * from advertisement";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  Advertisements";
    }
    function invoice(){
        $db= new DBconnection();
        $sql="select * from invoice";
        $result=$db->database_query($sql);
        $number=  mysqli_num_rows($result);
        echo "$number"."  invoice";
    }
    
}
