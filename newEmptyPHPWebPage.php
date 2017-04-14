<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="" enctype="multipart/form-data" >
            <br>
            <input type="file" name="image">
            <br><br>
            <input type="submit" name="sumit" value="upload">
            </form>
            <?php 
            if(isset($_POST['sumit'])){
                if(getimagesize($_FILES['image']['tmp_name'])==FALSE){
                    echo 'please select an image';
                }
                else{
                    $image = addslashes($_FILES['image']['tmp_name']);
                    $name = addslashes($_FILES['image']['name']);
                    $image = file_get_contents($image);
                    $image = base64_encode($image);
                    saveimage($name, $image);
                }
            }
            display();
            function saveimage($name , $image){
                $con = mysqli_connect("localhost", "root", "", "phase");
                $query = "insert into image (name , image) values ('$name','$image')";
                $result = mysqli_query($con, $query);
                if($result){
                    echo '<br>photo uploaded successfully';
                }
                else{
                    echo 'not uploaded';
                }
            }
            function display (){
                $con = mysqli_connect("localhost", "root", "", "phase2");
                $query = "select * from image";
                $result = mysqli_query($con, $query);
                while($row = mysqli_fetch_array($result)){
                    echo '<img height="300" width="300" src="data:iamge;base64,'.$row[2].'">'; 
                }
                
            }
            ?>
        
    </body>
</html>

