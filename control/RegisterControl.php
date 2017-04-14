<?php
    $name_error='';
    $email_error='';
    $password_error='';
    $passwordagain_error='';
    $password_confirm='';
    
if(isset($_POST['submit']))
{
    
    include '../model/Dbconnection.php';
    include '../model/Email.php';
    $s=0; 

    $db = new DBconnection();
    $username=  $db->clean($_POST['username']);
    $email=$db->clean($_POST['mail']);
    $password= md5($db->clean($_POST['password'])) ;
    $passwordagain=md5($db->clean($_POST['passwordagain']));
    $city=$_POST['city'];
    $inter=$_POST['inter'];
    //to get id of city
    $ss=" Select * From `citys` where `name`= '$city' " ;
    $q=  mysqli_fetch_array($db->database_query($ss));
    $city_id= $q['id'];
    
    if(empty($username))
    {
        $name_error="* please enter your name";
        $s=1;
    }
    if(empty($email))
    {
        $email_error="* please enter your mail";
        $s=1;
    }
    if(empty($password))
    {
        $password_error="* please enter your password";
        $s=1;
    }
    if(empty($passwordagain))
    {
        $passwordagain_error="* please confirm your password";
        $s=1;
    }
    if(0!=  strcmp($password, $passwordagain))
    {
        $password_confirm= "* Password dont match";
        $s=1;
    }
    
    $query="SELECT * from users";
    $do=$db->database_query($query);
    while ($f =  mysqli_fetch_array($do))
    {
        if($email==$f['email'])
        {
            $email_error="* this email is already taken";
            $s=1;
        }
    }
    
    echo '<p class="error">'.$name_error.'</p>';
    echo '<p class="error">'.$email_error.'</p>';
    echo '<p class="error">'.$password_error.'</p>';
    echo '<p class="error">'.$passwordagain_error.'</p>';
    echo '<p class="error">'.$password_confirm.'</p>';
                          
    
    if($s==0)
    {
        if($inter == "Sold Estate")
        {
            $inter=1;
        }
        else
        {
            $inter=2;
        }
        
        
        $verificationCode = md5(uniqid("mine"));
        $sql="INSERT INTO `users` (`id`, `name`, `email`, `password` ,`city_id` , `inter_id` ,`active`,`code` , `user_type`) VALUES (NULL, '$username', '$email', '$password' , '$city_id' , '$inter' , '0' , '$verificationCode', '1')";
        $mysql=$db->database_query($sql);
        $sqll = 
        /*$idofuser= $db->database_query( "SELECT * FROM `users` where `email`='$email'" , $dblink);
        $lo= mysqli_fetch_array($idofuser);
        $idofuser=$lo['id'];*/
                
        $m=new Email();
        $verificationLink = "http://localhost/WWW/view/active.php" ;
        $subject = "Verification Link | Legacy";
        $body = $m->create_body($username,$verificationCode,$verificationLink);
        $m->sendmail($email, $subject,$body);
        $db->database_close(); 
}  }
