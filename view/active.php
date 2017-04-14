<?php
include_once 'Header.php';
include '../control/activecontrol.php';
?>
   <html lang="en">
        <head>
            
            <meta charset="utf-8" />
            <title>Active</title>
            <!-- normalize library-->
            <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
            <!-- style Css -->
            <link href="../css/style.css" rel="stylesheet" type="text/css" />
            <link href="../css/style_home.css" rel="stylesheet" type="text/css" />

        </head>
		<body>

              <div class="regist">
                <div class="container">
                    <div class="register">
                        <form action='?' method="post">

                            <input type="email" name="mail" placeholder="E-mail" />
                            <input type="password" name="password" placeholder="password" />
                            <input type="text"  name="code" placeholder="ActivationCode" value="" />
                               
                            <input type="submit" name="submit" value="submit" />
                        </form>
                    </div>
                </div>
                  <br><br><br><br><br>
              </div>
                    
              <?php   include_once 'Fotter.html'; ?>
		</body>
                
    </html>