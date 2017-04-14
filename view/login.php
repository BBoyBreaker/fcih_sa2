<!DOCTYPE HTML>
<?php
include '../control/LoginControl.php';
include_once 'Header.php';
?>
    <html lang="en">
        <head>
            
            <meta charset="utf-8" />
            <title>LEGACY</title>
            <!-- normalize library-->
            <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
            <!-- style Css -->
           <link href="../css/style_home.css" rel="stylesheet" type="text/css" />

        </head>
    <body>	
              <!-- Start Registration -->
              <div class="regist">
                <div class="container">
                    <div class="register">
                        <form method="post" action="?">
                            <input type="text" placeholder="Email" name="email" />
                            <input type="password" placeholder="password" name="pass"    />
                            <input type="submit" value="Sign In" name="login" />
                        </form>
                    </div>
                    <div class="sign">
                          <h5>If You not A member?!<a href="registeration.html"> 
                            Sign Up</a>
                          </h5>
                    </div>
                </div>
              </div>
              <?php include_once 'Fotter.html'; ?>
         
        </body>
</html>