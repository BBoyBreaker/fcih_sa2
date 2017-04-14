
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php
include 'Header.php';
if(!isset($_SESSION['email'])){
    header('Location:login.php');
    die();
}


include_once '../control/requestControl.php';
$new = new requestControl();
$new->ee();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>request</title>
        <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
        <link href="../css/style_home.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        
            <div id="background">
            <form method="POST" action="" enctype="multipart/form-data">
                <br><br><br>
                <label>Title</label>
                <input type="text" name="title"placeholder="write your title">
                <br><br>
                <label>Your name</label>
                <input type="name" name="name" placeholder="write your name">
                <br><br>
                 <label>Mobile</label>
                <input type="number" name="mobile" placeholder="write your mobile">
                <br><br>
                 <label>City</label>
                <input type="text" name="city" placeholder="write your city"> 
                <br><br>
              
                  <label>Type Of The Advertisement</label>
                <select name="option">
                    <option value="Sell">sell</option>
                    <option value="Rent">rent</option>
                </select>
                <br><br><br>
                <label>Description</label>
                <br>
                <textarea name="textarea" ></textarea>
                <br><br>
                <label>Price</label>
                <br><br>
                <input type="text" name="price" value="price">
                <label>Add Image</label>
              <input type="file"  name="image"> 
                <br><br>
                <input type="submit" value="share this AD" name="submit" id="sub">
            </form>
        </div>              
     
    </body>
</html>
