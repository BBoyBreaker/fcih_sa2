
<?php
        
      require  'PHPMailer-master/class.smtp.php';
      require  'PHPMailer-master/class.phpmailer.php' ; // Add the path as appropriate
  
class Email
{
    function create_body($user,$code,$link)
    {           
                $htmlStr = "";
                $htmlStr .= "Hi " . $user . ",<br /><br />";
                 
                $htmlStr .= "Your Code is : " .$code.  "<br /> <br /> Please click the button below to active your account.<br /><br /><br />";
                $htmlStr .= "<a href='{$link}' target='_blank' style='padding:1em; font-weight:bold; background-color:blue; color:#fff;'>VERIFY EMAIL</a><br /><br /><br />";
                 
                $htmlStr .= "Kind regards,<br />";
                $htmlStr .= "<a href='index.php' target='_blank'>Legacy</a><br />";
                return $htmlStr;

    }
          
    function sendmail ($mail,$sub,$b){
         $Mail = new PHPMailer();
     
  $Mail->IsSMTP(); // Use SMTP
  $Mail->Host        = 'smtp.live.com'; // Sets SMTP server
  $Mail->SMTPDebug   = 0; // 2 to enable SMTP debug information
  $Mail->SMTPAuth    = TRUE; // enable SMTP authentication
  $Mail->SMTPSecure  = "tls"; //Secure conection
  $Mail->Port        = 587; // set the SMTP port
  $Mail->Username    = 'wheremyacc@hotmail.com'; // SMTP account username
  $Mail->Password    = 'ma7modcandoit'; // SMTP account password
  $Mail->Priority    = 1; // Highest priority - Email priority (1 = High, 3 = Normal, 5 = low)
  $Mail->CharSet     = 'UTF-8';
  $Mail->Encoding    = '8bit';
  $Mail->Subject     = $sub;
  $Mail->ContentType = 'text/html; charset=utf-8\r\n';
  $Mail->From        = 'wheremyacc@hotmail.com';
  $Mail->FromName    = 'Legacy';
  $Mail->WordWrap    = 50;  // RFC 2822 Compliant for Max 998 characters per lin
  $Mail->AddAddress($mail);
  $Mail->isHTML( TRUE );
  $Mail->Body = $b;
  $Mail->Send();
  $Mail->SmtpClose();

  if ( $Mail->IsError() ) { 
    echo '<p style="color:red;">ERROR : you Must Connect with Network and try again !</b> <br /><br />';
  }
  else
  {
      echo '<p style="color:red;">Please check you mail inbox to activate your acc</p>';
  }
      }
     
      
}