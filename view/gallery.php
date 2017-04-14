
<?php


    for ($i = 0; $i < count($adminDataDisplay); $i++) {
        echo '<div class="gallery">';
        if($adminDataDisplay[$i]['active'] ==  0){
           echo '<div class="image"><img   src="data:iamge;base64,'.$adminDataDisplay[$i]['image'].'"></div>';
           echo "<h2>{$adminDataDisplay[$i]['title']}</h2>";
           echo " <p>{$adminDataDisplay[$i]['textarea']}</p>";
           echo '</div>';
           
           echo '<div class"ad">';
        echo "       
                 <div>Price --->{$adminDataDisplay[$i]['price']}</div>
                <div> For --->{$adminDataDisplay[$i]['option']}</div>
                                            
                    
           ";
        echo" <a href='Appointment.php'><img src='../resources/imgs/delete.png'></a>
<a href='/view/Invoice.php?'><img src='../resources/imgs/edit.png'></a>";
        echo '</div>';
        echo '</div>';
       
    }
    else{
        echo '';
    }
    }
    echo '</div>';
?>