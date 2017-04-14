<?php

include_once  '../model/DBconnection.php';
class request_ad  extends DBconnection{
    public function request(){
   
    $query = "SELECT * From advertisement";
    $result = mysqli_query($this->co,$query);
    
            
                 echo '<table>';
                            while ($row=  mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                echo "<td>" . $row[0] . "</td>";
                                echo "<td>" . $row[1] . "</td>";
                                echo "<td>" . $row[2] . "</td>";
                                 echo "<td>" . $row[3] . "</td>";
                                  echo "<td>" . $row[4] . "</td>";
                                   echo "<td>" . $row[5] . "</td>";
                               echo '<img src="data:image/png;base64,' . $row[6] . '" />';
                                echo "</tr>"; 
                                 //"</td></tr>"."<img height=100 width=300 src='getImage.php?id=1'" .$row['image']. "</td><td>" ;
                                
                            }
                            echo "</table>";
                        
    }
      
           
    }
