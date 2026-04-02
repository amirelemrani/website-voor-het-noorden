<?php
$to = "booking@pvhetnoorden.nl";
$subject = "Nieuwe boeking";

$message = "Naam: " . $_POST['naam'] . "\n";
$message .= "Telefoon: " . $_POST['telefoon'] . "\n";
$message .= "Email: " . $_POST['email'] . "\n";
$message .= "Ophaaladres: " . $_POST['ophaaladres'] . "\n";
$message .= "Bestemming: " . $_POST['bestemming'] . "\n";
$message .= "Datum: " . $_POST['datum'] . "\n";
$message .= "Tijd: " . $_POST['tijd'] . "\n";
$message .= "Opmerkingen: " . $_POST['opmerkingen'] . "\n";

mail($to, $subject, $message);

echo "Boeking verzonden";
?>
