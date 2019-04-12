<?php
//var_dump($_POST);
//die();
$name=$_POST['name'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$message=$_POST['message'];

$htmlMessage = "<html>
<head><meta charset='utf-8' /></head>
<body>
<h3>Name: $name</h3>
<h3>Email: $email</h3>
<h3>Telephone: $tel</h3>
<h3>Message: $message</h3>
</body>
</html>";

$from = "mohamed@spdeisel.com";
$to = "mohamed@spdeisel.com";
$subject = "Contact Us Form";
$headers = "From:" . $from;
if(mail($to,$subject,$htmlMessage, $headers)){
    echo "The email message was sent successfully.";
}
else{
    echo "The email message was not sent successfully.";
}
//echo $message;


