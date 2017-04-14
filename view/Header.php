<?php
session_start();
?>
<html lang="en">
        <head>
            
            <meta charset="utf-8" />
            <link rel="stylesheet" type="text/css" href="../css/normalize.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">     

        </head>
		<body>
			<div class="header1">
                          <div class="container">
                            <div class="join" >
            
                            <!--
                            <a href="https://www.facebook.com/"><img src="images/facebook.png" alt=""></a>
                            <a href="https://twitter.com/?lang=en"><img src="images/Twitter-bird-small.jpg" alt=""></a>
                            <a href="https://www.linkedin.com/uas/login"><img src="images/linkedin.png" alt=""></a>
                            -->
                            
                            
                            <?php
                            
                            if(!isset($_SESSION['name']))
                            {
                                echo '<a href="/view/login.php">Sign in</a>';
                                echo '<a href="/view/Register.php"><button type="button">Join </button></a>';
                            }
                        
                             else if(isset($_SESSION['name'])){
                            echo '<a href="logout.php">Logout</a>';
                            echo $_SESSION['name'];
                                                            }
                            ?>
                            </div>
                       
        <div class="navbar">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <?php
                                               
                    if(isset($_SESSION['type'])){
                        if($_SESSION['type'] ==  1 ){
                       
                        echo '<a href="/view/admin_home.php">admin</a>';
                    }
                    }
                    else {
                        
                    }
                        
 
                    ?>
                    <li><a href="/view/request.php">Sell/Rent</a></li>
                    
                    <li><a href="/view/product.php">Gallery</a></li>
                    <li><a href="/view/about us.php">about us</a></li>
                    <li><a href="">contact us</a></li>
                </ul>
        </div>
        </div>
        </div>      
		</body>
    </html>

                 