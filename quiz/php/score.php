<?php

try {
    $dbh = new PDO('mysql:host=mysql-startech.alwaysdata.net;dbname=startech_quizz', 'startech_quizz', 'thLEROY2023!');
    $score = $_POST['score'];

    $query = $dbh->query("SELECT * FROM score_quizz ORDER BY id DESC LIMIT 1");
    $user = $query->fetch();
    $user_id = $user['id'];
    $user_email = $user['email'];
    $user_theme = $user['theme'];
    $user_pourcentage = $score / 10 * 100 . "%";

    $dbh->exec("UPDATE `score_quizz` SET score = $score WHERE id = $user_id");

    // Plusieurs destinataires
    $to  = "$user_email"; // notez la virgule
    
    if($user['theme'] == "Développement Web")
    {
        $theme = "Développement Web";
    } else if ($user['theme'] == "Cybersécurité"){
        $theme = "Cybersécurité";
    } else if ($user['theme'] == "Internet"){
        $theme = "Internet";
    } else {
        $theme = "Réseaux Sociaux";
    }

    // Sujet
    $subject = 'Résultat de votre quizz';

    // message
    $message = "
    <!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Mail</title>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600&display=swap');

            li{
                list-style: none;
                margin: 0 35px;
            }
        </style>
    </head>
    <body style='padding: 0; margin: 0; font-family: 'poppins';'>
        <div style='max-width: 620px; margin: 0 auto;'>
            <h1 style='font-size: 40px; text-align: center;'>Félicitations !</h1>
            <h4 style='text-align: center;'>Vous venez de finir le quizz !</h4>
            <p style='margin-top: 40px;'>Thème du Quizz : $theme </p>
            <p>Votre score : $score / 10</p>
            <p>Pourcentage de réussite : $user_pourcentage </p>
        </div>
        <div style='max-width: 620px; margin: 0 auto; padding: 75px 0'> 
            <img src='https://startech.alwaysdata.net/images/stch.png' alt='' style='text-align:center;'> 
            <div>
                <ul style='display:flex; justify-content: center; margin-left: 50px'>
                    <li><a style='text-decoration: none; color: auto;' href='https://www.facebook.com/startechnormandy/'>Facebook</a></li>
                    <li><a style='text-decoration: none; color: auto;' href='https://www.instagram.com/startechnormandy/?hl=fr'>Instagram</a></li>
                    <li><a style='text-decoration: none; color: auto;' href='https://twitter.com/startechnormand'>Twitter</a></li>
                </ul>
            </div>
            <div style='width: 100%;'>
                <a href='https://www.startechnormandy.com/' style='text-align:center; text-decoration: none;'>https://www.startechnormandy.com/</a>
            </div>    
        </div>
    </body>
    </html>
    ";

    $headers = "From: noreply@startechnormandy.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=utf-8\r\n";

    // Envoi
    mail($to, $subject, $message, $headers);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>