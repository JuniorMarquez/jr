<?php
require 'PHPMailerAutoload.php';
// echo !extension_loaded('openssl')?"Not Available":"Available <br/>";
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = $_POST['managerAccountHost'];      //  ssl://smtp.gmail.com          // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'developer@thetixs.com';                      // SMTP username
$mail->Password = 'uoW9developer';                           // SMTP password
$mail->SMTPSecure = 'ssl';  //TLS                       // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;          //587                          // TCP port to connect to


//echo $email= $_POST['n2']."@".$_POST['n3'];
$mail->setFrom('developer@thetixs.com', 'juniormarquez.com.ve');
//$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
$mail->addAddress('junior.marquez.hsc@gmail.com');              // Name is optional
//$mail->addReplyTo('$email','roshan');
//$mail->addCC('passmethecode@gmail.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Contacto CV Junior Marquez';
$mail->Body    = 
   
    '<div align="center" style="background-color:#f6f8f8;">
        <div align="center" style="display:inline-block;
                                  height:auto;
                                  width:100%;">
          

          <div style="; padding:20px;" align="left">
            <br/>
            <b>Nombre: </b>
           <b>'.$_POST['name'].'</b>  
                    
          </div>

           <div style=" padding:20px;" align="left">
            <br/>
            <b>Email: </b>
           '.$_POST['email'].' , <b>Telefono: </b>  '.$_POST['phone'].'        
          </div>

          <div style=" padding:20px;" align="left">
            <br/>
            <b>Mensaje: </b>
           '.$_POST['message'].'                     
          </div>

          <div style="border-radius:10px; width: 320PX; box-shadow:5px 5px 17px 0px rgba(44, 50, 50, 0.14);">
            <table style=" color: #4a4646; margin:0px; padding:20px; max-width:300px;">
              
            </table>
          </div>

        </div>
      </div>
 ';
//file_get_contents('template-guest.php');
// $mail->AltBody = 'Hello';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
else {
    header('location: thankyou.php');
}
?>
