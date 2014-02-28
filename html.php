<!--  Email HTML File -->
 <?php

$to  = 'romacknatividad@gmail.com';

// subject
$subject = 'Rochelle Tongol';

// message
$message = "
<html>
<head>
  <title>Email with Image</title>
</head>
<body>
<p style='color:purple'>Hello World !</p>
	<img src ='http://static3.wikia.nocookie.net/__cb20130222011606/dbgt/images/3/34/Houki_Shinonono.jpg'>
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To: Sir Romack <romacknatividad@gmail.com>\r\n";
$headers .= 'From: Rochelle <rochelletongol@gmail.com>' . "\r\n";

// send 
$retval = mail($to, $subject, $message, $headers);
if($retval === true){
  echo "Message sent.";
}else{
  echo "Unable to send.";
}
?>
