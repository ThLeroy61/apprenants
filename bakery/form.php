<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="header">
        <div>
            <?php include("components/navbar.php") ?>
        </div>
        <div id="formulaire">
            <div id="allform">
                <div id="form_fond"></div>
                <div id="form_form">
                    <form action="data/user.php" method="POST">
                        <div class="form-item">
                            <label for="pseudo">Pseudo</label>
                            <input type="text" name="pseudo">
                        </div>
                        <div class="form-item">
                            <label for="password">Password</label>
                            <input type="text" name="password">
                        </div>
                        <div class="form-item" id="form-submit">
                            <input type="submit" value="Envoyer">
                        </div>
                    </form>
                </div> 
            </div>
            
        </div>
    </div>
    
</body>
</html>