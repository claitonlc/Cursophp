<?php 

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"

);
Tpl::configure( $config );
// Add PathReplace plugin (necessary to load the CSS with path replace)
Tpl::registerPlugin( new Tpl\Plugin\PathReplace() );
// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Obi Wan Kenoby" );
$tpl->assign( "version", PHP_VERSION);
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template
$html = $tpl->draw( "index", true );


//Create a new PHPMailer instance
 $mail = new PHPMailer;
 
 $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
 );
 
 $mail->CharSet = 'UTF-8';
 
 //Tell PHPMailer to use SMTP
 $mail->IsSMTP();
 
 //Enable SMTP debugging
 // 0 = off (for production use)
 // 1 = client messages
 // 2 = client and server messages
 $mail->SMTPDebug = 2;
 
 //Ask for HTML-friendly debug output
 $mail->Debugoutput = 'html';
 
 //Set the hostname of the mail server
 $mail->Host = 'smtp.gmail.com';
 
 // use
 // $mail->Host = gethostbyname('smtp.gmail.com');
 // if your network does not support SMTP over IPv6
 //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
 $mail->Port = 587;
 
 //Set the encryption system to use - ssl (deprecated) or tls
 $mail->SMTPSecure = 'tls';
 
 //Whether to use SMTP authentication
 $mail->SMTPAuth = true;
 
 //Username to use for SMTP authentication - use full email address for gmail
 $mail->Username = 'ilhafloripatec@gmail.com';
 
 //Password to use for SMTP authentication
 $mail->Password = 'ilha2014';
 
 //Set who the message is to be sent from
 $mail->SetFrom('ilhafloripatec@gmail.com', 'Ilha');
 
 //Set an alternative reply-to address
 // $mail->addReplyTo('replyto@example.com', 'First Last');
 //Set who the message is to be sent to
 $mail->AddAddress('ilhafloripatec@gmail.com', 'Teste');
 
 //Set the subject line
 $mail->Subject = 'Teste de e-mail php';
 
 //Read an HTML message body from an external file, convert referenced images to embedded,
 //convert HTML into a basic plain-text alternative body
 $mail->MsgHTML($html);
 
 //Replace the plain text body with one created manually
 $mail->AltBody = 'This is a plain-text message body';
 
 //Attach an image file
 // $mail->addAttachment('images/phpmailer_mini.png');
 
 if (!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "<br>Mensagem enviada!";
 }


?>