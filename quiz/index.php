<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz StarTech</title>
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include("composants/navbar.php") ?>
    <main>
        <section id="logo">
            <img src="images/stch.png" alt="">
        </section>
        <section>
            <div class="container">
                <div id="titre">
                    <h1>Choisissez un thème pour votre quiz :</h1>
                </div>
                <div id="liste_quiz">
                    <a href="pages/dev.php" class="btn" id="dev">Développement web</a>
                    <a href="pages/web.php" class="btn" id="web">Internet / Web</a>
                    <a href="pages/cyber.php" class="btn" id="cyber">Cybersécurité</a>
                    <a href="pages/rs.php" class="btn" id="rs">Réseaux sociaux</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <!-- Règles -->
        <div id="regles">
            <div class="container">
                <h2>Les règles des quizz :</h2>
                <ul>
                    <li>1. Vous avez 20 secondes pour répondre à la question.</li>
                    <li>2. Lorsque vous choisissez une réponse, vous ne pouvez pas annuler.</li>
                    <li>3. Lorsque le temps est écoulé, vous ne pouvez plus répondre.</li>
                    <li>4. Quitter le quizz au milieu annule votre score.</li>
                    <li>5. Vous gagnez un point par bonne réponse.</li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="js/button.js"></script>
</body>
</html>