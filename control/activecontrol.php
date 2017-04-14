<?php
$email_error='';
$code_error='';
require_once  '../model/User.php';
if(isset($_POST['submit']))
{
    
    $user= new User();
    $email=$_POST['mail'];
    $password=($_POST['password']);
    $code=$_POST['code'];
    $result=$user->active($email, $password, $code);
    if($result==TRUE)
    {
        echo '<p class="error">Successfully activated .. You can now SignUp</p>';
    }
    else
    {
        $email_error="[invalid email or password or code *] or maybe you already activited";
    }
    echo '<p class="error">'.$email_error.'</p>';
    echo '<p class="error">'.$code_error.'</p>';
    
        
}        