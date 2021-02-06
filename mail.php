<?php 

$msg = "Nom:\t$name\n";
$msg .= "E-Mail:\t$mail\n";
$msg .= "Message:\t$message\n\n";

$recipient = "pauline.desmarets@posteo.net";
$subject = "Nouveau message sur REFERENCE CLUB";

$mailheaders = "From: Test<> \n";
$mailheaders .= "Reply-To: $email\n\n";

mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Votre message a été envoyé !</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Je vous recontacte très vite. Bonne journée !</P>";
echo "</BODY></HTML>";

?>