<?php
    $destinataire = 'pauline.desmarets@posteo.net';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['mail'];
     
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From: <'.$expediteur.'>'."\n"; // Expediteur
    
    $message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Message de '.$_POST['name'].' : <br>
                    '.$_POST['message'].'</div>';
     
    if(mail($destinataire, $message, $headers))
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    header('Location: https://pauladeville.github.io/reference-club/index.html#contact.php');
?>