<?php
    $header="MIME-Version: 1.0\r\n";
    $header.='From:"REFERENCE CLUB"<pauline@reference-club.fr>'."\n";
    $header.='Content-Type:text/html; charset="uft-8"'."\n";
    $header.='Content-Transfer-Encoding: 8bit';
    $message='
    <html>
        <body>
            <p>Nom :</p> '.$_POST['name'].'<br />
            <p>Email :</p> '.$_POST['mail'].'<br />
            <br />
            '.nl2br($_POST['message']).'
        </body>
    </html>
    ';
    mail("pauline@reference-club.fr", "Nouveau contact", $message, $header);
?>