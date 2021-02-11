<?php
$statusMsg = '';
$msgClass = '';
if(isset($_POST['submit'])){
    // Get the submitted form data
    $mail = $_POST['mail'];
    $name = $_POST['name'];
    $message = $_POST['message'];
    
    // Check whether submitted data is not empty
    if(!empty($email) && !empty($name) && !empty($message)){
        
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            $statusMsg = 'Veuillez vérifier votre adresse email.';
            $msgClass = 'errordiv';
        }else{
            // Recipient email
            $toEmail = 'pauline@reference-club.fr';
            $emailSubject = 'Message de '.$name;
            $htmlContent = '
                <h4>Nom</h4><p>'.$name.'</p>
                <h4>Email</h4><p>'.$email.'</p>
                <h4>Message</h4><p>'.$message.'</p>';
            
            // Set content-type header for sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            
            // Additional headers
            $headers .= 'From: pauline@reference-club.fr';
            
            // Send email
            if(mail($toEmail,$htmlContent,$headers)){
                $statusMsg = 'Merci pour votre message. Vous recevrez une réponse très vite !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Votre message a rencontré un problème. Merci de réessayer.';
                $msgClass = 'errordiv';
            }
        }
    }else{
        $statusMsg = 'Remplissez bien tous les champs du formulaire.';
        $msgClass = 'errordiv';
    }
}
?>