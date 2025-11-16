<?php


$name = $_POST['name'];
$contact = $_POST['modal_my_mobile2'];
$date_time = $_POST['date_time'];

$to = "properties.solutions@gmail.Com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>Name&#58; $name</tr>
<tr>Phone&#58; $contact</tr>
<tr>DateTime&#58; $date_time</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <no_reply@jhamtani.com>' . "\r\n";
$headers .= 'Cc: ' . "\r\n";



if(mail($to,$subject,$message,$headers)) //Send an Email. Return true on success or false on error


{
echo 

"<script>window.location.href='https://api.whatsapp.com/send?phone=+919226075937&text=Hi, I saw the project details and scheduled my visit to Ravet, kindly call me back, I am interested in buying a new property.';</script>";
}
else
{
echo "<script>
alert('Plz Try Agian');
window.location.href='index.html'

;
</script>";
}
?>