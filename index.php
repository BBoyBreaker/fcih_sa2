
<!DOCTYPE html>
<html>
    <head>
        <title>Legacy</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">        
    </head>
    <body>
        <!-- start header and navbar -->
        <div class="header">
            <?php
                 
                 include_once 'view/Header.php';
    ?>

            
            <div class="slider">
                <div class="intro">
                    <h1>LEGACY</h1>
                    <h3>A Real Estate Company</h3>
                    <img src="images/images.png" alt="logo" height="150px" width="200px">
                    <br>
                    <a href="view/Request.php"><button type="button">add an AD </button></a>
                </div>
                <div class="search">
                 
                </div>
            </div>
            </div>
        <div class="why">
            <div id="p"><p>Why Legacy&reg;?</p></div>
            <div class="cont">
            <div class="million">
                <div class="cont2">
                <img src="images/buy_1.1.jpg" alt="millions">
                <p>Homes for sale? You bet. We also have for sale by owner (FSBO) and Coming Soon listings, foreclosures, rentals — plus listings you won't find anywhere else.</p>
                <a href="#">Search now</a>
                </div>
            </div>
            <div class="why_legacy">
                <div class="cont2">
                <img src="images/buy_2.1.jpg" alt="millions">
                <p>Register to save your search and favorite homes We'll notify you when new listings hit the market, and send timely reports with the latest home values and trends.</p>
                <a href="view/Register.php">Sin up today</a>
                </div>
            </div>
            <div class="all_homes">
                <div class="cont2">
                <img src="images/buy_3.1.jpg" alt="millions">
                <p>How much is your home worth? Use the Legacy as a starting point in determining your current and future home value. Update your home facts to influence your Zestimate instantly.</p>
                <a href="view/Register.php">Sin up today</a>
                </div>
            </div>
            </div>
            
        </div>
        <div class="fotter">
            <?php 
    include 'view/Fotter.html';
            ?>
        </div>
    </body>
</html>
