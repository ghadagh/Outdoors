<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$comments=$_POST['comments'];
$Headers = "From: " . $name . "<". $email . $phone .">\r\n";
$retour = mail('ghadaghribi84@gmail.com', 'Envoi depuis la page Contact',$comments,$Headers );
if ($retour)
    echo '<p>Votre message a bien été envoyé.</p>';
else
echo "<p>Votre message n'a pas été envoyé. </p>".print_r(error_get_last());
?>