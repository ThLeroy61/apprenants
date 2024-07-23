<?php

try {
    $dbh = new PDO('mysql:host=mysql-startech.alwaysdata.net;dbname=startech_quizz', 'startech_quizz', 'thLEROY2023!');
    $email = $_POST['email'];
    $theme = $_POST['theme'];
    $date = date('Y-m-d');
    
    try {
        $dbh->exec("INSERT INTO score_quizz (email, theme, date_creation) VALUES ('$email','$theme','$date')");
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }  
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>