<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulaire de contact</title>
</head>

<body>
    <?php

        $message = '
            Nom : ' . $_POST['name'] . '
            Email : ' . $_POST['mail'] . '
            Message : ' . $_POST['message'] . '
        ';

        $retour = mail('pauline@reference-club.fr', 'Nouveau contact', $message, 'From : pauline@reference-club.fr');
        if ($retour) {
            header('Location: merci.html');
        }
    ?>
</body>
</html>