<?php

include '../model/User.php';
if(isset($_POST['login']))
{   
    $db = new DBconnection();
    $s=0;
    $error="";
    $name_error="";
    $password_error="";
    $email=$_POST['email'];
    $password=$_POST['pass'];
    if(empty($email))
    {
        $name_error="* Fill your name";
        $s=1;
    }
    if (empty($password))
    {
        $s=1;
        $password_error="* Fill your Password";
    }
    echo '<p class="error">'.$name_error.'</p>';
    echo '<p class="error">'.$password_error.'</p>';
    
    if($s==0)
    {   
        $sql="SELECT * FROM users WHERE email='$email'";
        $result=$db->database_query($sql);
        $r=mysqli_fetch_array($result);
        $id=$r['user_type'];
       $user=new User($id);     
       $login_operation=$user->login($email,$password);
       if($login_operation == TRUE)
       {
          session_start(); 
          $_SESSION['name']=$user->get_username();
          $_SESSION['type']=$id;
          $_SESSION['email'] = $email;
          header('Location:../index.php');
       }
       else
       {
            $error="* invalid name or password or account not active";
       }
        
    }
    echo '<p class="error">'.$error.'</p>';
    
    
    
}




