<!DOCTYPE HTML>
<?php
include '../control/RegisterControl.php';
include_once 'Header.php';
?>

    <html lang="en">
            <meta charset="utf-8" />
            <title>LEGACY</title>
            <link href="../css/normalize.css" rel="stylesheet" type="text/css" />
           <link href="../css/style_home.css" rel="stylesheet" type="text/css" />

        </head>
		<body>
			
             
              <!-- Start Registration -->
              <div class="regist">
                <div class="container">
                    <div class="register">
                        
                        <form action='?' method="post">
                            
                            <input type="text"  name="username" placeholder="Fullname" value="" />
                            
                            <input type="email" name="mail" placeholder="E-mail" />
                            
                            <input type="password" name="password" placeholder="password" />
                            
                            <input type="password" name="passwordagain" placeholder="password(confirm)" />
                            
                            <p class="error">Select what you are interested in and we will hep you</p>
                            <select name="city">
                                    <option value="Cairo">Cairo</option>
                                    <option value="Alex">Alex</option>
                                    <option value="Mansoura">Mansoura</option>
                                    <option value="Sharm El-Shaikh">Sharm El-Shaikh</option>
                            </select>
                            
                            <select name="inter">
                                    <option value="Sold Estate">Sold Estate</option>
                                    <option value="Rented Estate">Rented Estate</option>
                            </select>
                            
                            <input type="submit" name="submit" value="submit" />
                        </form>
                    </div>
                </div>
              </div>
             
                    
              <?php   include_once 'Fotter.html'; ?>
		</body>
                
    </html>