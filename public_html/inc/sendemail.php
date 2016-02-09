<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="5; url=../index.php" />
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
$subject = 'Poruka sa site-a';
$mailFrom = $_REQUEST['email'];
$replayEmail = $_REQUEST['email'];
$tel = $_REQUEST['phone'];
$ime = $_REQUEST['ime'];
$mailTo1 = "plakari@xxxx.com";

$mailTo = $mailTo1;

$message = "KONTAKT FORMULAR \n PLAKARI\nIme: " . $ime . "\nE-mail: " .$mailFrom. "\nTelefon: " . $tel . "\nPoruka:\n" . $_REQUEST['pitanje'];
$headers = 'From: plakariXXXX.rs' . "\r\n" .
    'Reply-To: ' . $mailFrom . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if (mail($mailTo, $subject, $message, $headers))
{
     echo("<h4 class='decor'>VAŠA PORUKA JE POSLATA<br />Zahvaljujemo se na interesovanju za našu ponudu.<br />Kontaktiraćemo Vas u najkraćem mogućem roku.<br />PLAKARI</h4>");
//echo ($mailTo . $subject . $message . $headers);
}
else
{
     echo("<b>Poruka nije poslata.</b><br />Molimo Vas kontaktirajte nas putem telefona, e-mail-a ili dođite lično.<br />Hvala. PLAKARI");
}

?>

</body>
</html>