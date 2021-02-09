<?php
        $header="MIME-Version: 1.0\r\n";
        $header.='From:"Reference Club"<pauline.desmarets@posteo.net>'."\n";
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
        mail("pauline.desmarets@posteo.net", "Nouveau contact", $message, $header);
        $msg="Votre message a bien été envoyé !";
?>