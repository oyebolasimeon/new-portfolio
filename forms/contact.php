<?php


 $name = $_POST['name']
 $email = $_POST['email']
 $mes = $_POST['message']
 $subject = $_POST['subject']

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$message = "<html>
<head>
<title> Contact Form Response </title>
</head>

<body>
<h1> New Response from your Portfolio Site </h1>
<i>".$subject."
<p>Name -> ".$name." </p>
<p>Sender Mail -> ".$email."</p>
<p>".$mes."</p>
</body>
</html>";

if(mail('simeonoyekunleoyebola@gmail.com', $subject, $message, $headers)){
  echo "<script>location.href='../index.html'</script>"
} else{
  echo "Failed to send email. Please try again"
}

?>
