<?php
                          
//include '../control/invoicecontrol.php';
include_once 'Header.php';
include '../model/Dbconnection.php';
include '../model/Display.php';
?>

<html>
    <head>
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
                           <!-- <P class="error" style="text-align: center;">Select type of you payment to Continue</P> -->
                            <select name="payment">
                                <option value="0" >Select Payment</option>
                                <?php
                                        if(isset($_SESSION['price'])){
                                            echo 'eeeeeeeeeeeeeeeeeee';
                                        }
                                       $sql="SELECT *  from payment_method";
                                       $db=new  DBconnection();
                                       $d=new Display("payment_method");
                                       $all= $d->getAllData();

                           for ($i = 0; $i < count($all); $i++) {
                       
                              echo $all[$i][1];
                                    echo '<option value="'.$all[$i][0].'">'.$all[$i][1].'</option>';
                            }
     
                                ?>
                               </select>

                                 <input type="submit" name="submit" value="submit" />
                 
                        </form>
                        
                    
              
		
                <?php
                if(isset($_POST['submit2']))
                         {
                             $s=0;
                             echo 'here';
                             $F_ERROR='';
                             for($i=0;$i<$num;$i++)
                             {
                                 if(empty($arr2))
                                 {
                                     $s=1;
                                     $F_ERROR="Please fill all fileds";
                                 }
                             }
                             echo $F_ERROR;
                             if($s==0)
                             {
                                 echo'done';
                                 header('Location:http://localhost/WWW/index.php');
                             }
                             
                         }
                    if(isset($_POST['submit']))
                    {
                            $payment_id=$_POST['payment'];
                            $_SESSION['id']=$payment_id;
                            if($payment_id==0)
                            {
                             echo '<p class="error">Please Select One Option</b>';
                            }
                        else
                            {
                            $sql="SELECT * FROM pay_option_selcted join pay_option on pay_option_selcted.option_id=pay_option.id WHERE pay_option_selcted.pay_id='$payment_id'";
                            $result=$db->database_query($sql);
                            $num = mysqli_num_rows($result);
                            if($num>0)
                            {
                                 for($i=0; $i<$num; $i++)
                                 {
                                    $data[$i] = mysqli_fetch_array($result);
                                 }                    
                            }
                            for($i=0; $i<$num; $i++)
                            {
                                $value=$data[$i][1];
                                 $sql="SELECT * FROM pay_option where id='$value'";
                                 $result=$db->database_query($sql);
                                 $array=  mysqli_fetch_array($result);
                                 $arr[$i]=$array['name'];
                                 $arr2[$i]=$array['type'];
                            }
                            echo '<form method="post" method="?"><P class="error" style="text-align: center;">Please fil this form</P>';
                            for($i=0; $i<$num; $i++)
                            {
                                echo '<input type="'.$arr2[$i].'" name="'.$arr2[$i].'" placeholder="'.$arr[$i].'"/>';
                            }
               
                                 echo'<input type="submit" name="submit2" value="Submit" /> </form>';
                         }
                         
                         
                    }
                    
                    

?>


                <?php   include_once 'Fotter.html'; ?>  
                    </div>
                </div></div></body>
                    </html>