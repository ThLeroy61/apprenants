<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

</head>
<body>
    <?php include("../composants/navbar.php") ?>
    <main>
        <div class="box_mail" id="box_mail">
            <div class="box_title">
                <h1>Avant de commencer</h1>
                <h3>Merci de nous communiquer votre email</h3>
                <h5>Pour recevoir vos résultats</h5>
            </div>
            <div class="box_form">
                <div class="email">
                    <input type="email" name="email" id="email" required>
                </div>
                <h6>Laissez vide si vous ne souhaitez pas communiquer votre email</h6>
                <div class="btn_submit">
                    <input type="button" id="commencer" value="Commencer">
                </div>    
            </div>
        </div>

        <!-- Quiz Box -->
        <div class="quiz_box">
            <header>
                <div class="title">Quiz Cybersécurité</div>
                <div class="timer">
                    <div class="time_left_txt">Tps restant</div>
                    <div class="timer_sec">25</div>
                </div>
                <div class="time_line"></div>
            </header>
            <section>
                <div class="que_text">
                    <!-- Here I've inserted question from JavaScript -->
                </div>
                <div class="option_list">
                    <div class="option" onclick="optionSelected(this)">
                        <span>Common Style Sheet</span>
                    </div>
                    <div class="option" onclick="optionSelected(this)">
                        <span>Common Style Sheet</span>
                    </div>
                    <div class="option" onclick="optionSelected(this)">
                        <span>Common Style Sheet</span>
                    </div>
                    <div class="option" onclick="optionSelected(this)">
                        <span>Common Style Sheet</span>
                    </div>
                </div>
            </section>

            <!-- footer of Quiz Box -->
            <footer>
                <div class="total_que">
                    <!-- Here I've inserted Question Count Number from JavaScript -->
                </div>
                <button class="next_btn">Suivant</button>
            </footer>
        </div>

        <!-- Result Box -->
        <div class="result_box">
            <div class="icon">
                <i class="fas fa-crown"></i>
            </div>
            <div class="complete_text">Vous avez complété le Quiz !</div>
            <div class="score_text">Vous recevrez votre score par email !</div>
            <div class="buttons">

                <a class="quit" href="/">Quitter</a>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="../js/questions.js"></script>

    <script src="../js/app.js"></script>
</body>
</html>