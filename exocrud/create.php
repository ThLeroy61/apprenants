<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Create</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Nom article, contenu, auteur, thème... -->
    <div id="layout">
        <div id="creation_article">
            <form action="#" method="post">
                <div class="form-control">
                    <label for="titre">Titre de l'article</label>
                    <input type="text" name="titre" id="titre">
                </div>
                <div class="form-control">
                    <label for="theme">Thème de l'article</label>
                    <input type="text" name="theme" id="theme">
                </div>
                <div class="form-control">
                    <label for="auteur">Auteur</label>
                    <input type="text" name="auteur" id="auteur">
                </div>
                <div class="form-control">
                    <label for="contenu">Contenu</label>
                    <textarea name="contenu" id="contenu" rows="3"></textarea>
                </div>
                <div id="validate">
                    <input type="submit" value="Valider">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>