//selecting all required elements
const start_btn = document.querySelector(".start_btn button");
const exit_btn = document.querySelector(".buttons .quit");
const continue_btn = document.querySelector(".buttons .restart");
const commencer = document.getElementById('commencer');
const quiz_box = document.querySelector(".quiz_box");
const result_box = document.querySelector(".result_box");
const option_list = document.querySelector(".option_list");
const time_line = document.querySelector("header .time_line");
const timeText = document.querySelector(".timer .time_left_txt");
const timeCount = document.querySelector(".timer .timer_sec");
const box_mail = document.getElementById('box_mail');

let questions = "";
let sujet = ""

if (localStorage.getItem('idQuiz') == 1) {
    questions = questions_dev;
    sujet = "Développement Web";
} else if (localStorage.getItem('idQuiz') == 2) {
    questions = questions_web;
    sujet = "Internet";
} else if (localStorage.getItem('idQuiz') == 3) {
    questions = questions_cyber;
    sujet = "Cybersécurité";
} else {
    questions = questions_rs;
    sujet = "Réseaux sociaux";
}

console.log(questions);

let timeValue = 25;
let que_count = 0;
let que_numb = 1;
let userScore = 0;
let counter;
let counterLine;
let widthValue = 0;

// creating the new div tags which for icons
let tickIconTag = '<div class="icon tick"><i class="fas fa-check"></i></div>';
let crossIconTag = '<div class="icon cross"><i class="fas fa-times"></i></div>';

//const restart_quiz = result_box.querySelector(".buttons .restart");
const quit_quiz = result_box.querySelector(".buttons .quit");

const next_btn = document.querySelector("footer .next_btn");
const bottom_ques_counter = document.querySelector("footer .total_que");

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}

// if startQuiz button clicked
commencer.onclick = () => {
    let data_mail = document.getElementById('email').value;
    console.log(data_mail);

    if (data_mail) {
        validateEmail(data_mail);
    }

    /*
    * AJAX -> Connexion en base de données puis insertion de l'email, un ID, le thème, la date de création
    * Si, et seulement si c'est validé, on continue le questionnaire
    */
    $.ajax({
        type: "POST",
        url: '../php/sendmail.php',
        data: { email: data_mail, theme: sujet },
        success: function (data) {
            quiz_box.classList.add("activeQuiz"); //On montre la fenêtre de quizz
            box_mail.classList.add("removed"); //On cache la fenêtre demandant l'email
            showQuetions(0); //On appelle showQuestions qui... Montre les questions
            queCounter(1); //On initialise le compteur de questions à 1
            startTimer(25); //On démarre le chronomètre
            startTimerLine(0); //On lance la petite barre
        },
        error: function (xhr, status, error) {
            console.error(xhr);
        }
    });
}

// if exitQuiz button clicked
/*exit_btn.onclick = ()=>{
    //info_box.classList.remove("activeInfo"); //hide info box
}*/

// if continueQuiz button clicked
/*continue_btn.onclick = ()=>{
    quiz_box.classList.add("activeQuiz"); 
    showQuetions(0);
    queCounter(1);
    startTimer(25);
    startTimerLine(0); 
}*/

// if restartQuiz button clicked
/*restart_quiz.onclick = ()=>{
    quiz_box.classList.add("activeQuiz");
    result_box.classList.remove("activeResult"); //On planque la fenêtre de résultats étant donné qu"on y retourne
    timeValue = 25; 
    que_count = 0;
    que_numb = 1;
    userScore = 0;
    widthValue = 0;
    showQuetions(que_count); //calling showQestions function
    queCounter(que_numb); //passing que_numb value to queCounter
    clearInterval(counter); //clear counter
    clearInterval(counterLine); //clear counterLine
    startTimer(timeValue); //calling startTimer function
    startTimerLine(widthValue); //calling startTimerLine function
    timeText.textContent = "Time Left"; //change the text of timeText to Time Left
    next_btn.classList.remove("show"); //hide the next button
}*/

// if quitQuiz button clicked
/*quit_quiz.onclick = ()=>{
    window.location.reload(); //reload the current window
}*/

// if Next Que button clicked
next_btn.onclick = () => {
    if (que_count < questions.length - 1) { //On vérifie le nombre total de question, et on vérifie qu'on dépasse pas ce total
        que_count++;
        que_numb++;
        showQuetions(que_count); //On affiche la question suivante
        queCounter(que_numb); //On incrémente le compteur de questions
        clearInterval(counter); //On remet le chrono, la ligne etc à 0
        clearInterval(counterLine);
        startTimer(timeValue); //On relance le timer et la ligne
        startTimerLine(widthValue);
        timeText.textContent = "Time Left";
        next_btn.classList.remove("show");
    } else {
        clearInterval(counter);
        clearInterval(counterLine);
        showResult();
    }
}

//Récupération des questions et des réponses
function showQuetions(index) {
    const que_text = document.querySelector(".que_text");

    //On crée des éléments HTML dépendants de si c'est une question ou des réponses et on affiche le tout
    let que_tag = '<span>' + questions[index].numb + ". " + questions[index].question + '</span>';
    let option_tag = '<div class="option"><span>' + questions[index].options[0] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[1] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[2] + '</span></div>'
        + '<div class="option"><span>' + questions[index].options[3] + '</span></div>';
    que_text.innerHTML = que_tag;
    option_list.innerHTML = option_tag;

    const option = option_list.querySelectorAll(".option");

    //On met un OnClick sur toutes les réponses
    for (i = 0; i < option.length; i++) {
        option[i].setAttribute("onclick", "optionSelected(this)");
    }
}


//Si un utilisateur clique sur une réponse
function optionSelected(answer) {
    clearInterval(counter);
    clearInterval(counterLine);
    let userAns = answer.textContent; //On récupère la réponse cliquée
    let correcAns = questions[que_count].answer; //On récupère la bonne réponse
    const allOptions = option_list.children.length;

    /*
    *
    * Si la réponse est bonne, on rajoute un point à l'utilisateur et on affiche la réponse en vert + icone
    * Si la réponse est fausse, on met la réponse en rouge + icone + On récupère la vraie bonne réponse pour l'afficher
    * 
    */
    if (userAns == correcAns) {
        userScore += 1;
        answer.classList.add("correct");
        answer.insertAdjacentHTML("beforeend", tickIconTag);
        console.log("Correct Answer");
        console.log("Your correct answers = " + userScore);
    } else {
        answer.classList.add("incorrect");
        answer.insertAdjacentHTML("beforeend", crossIconTag);
        console.log("Wrong Answer");

        for (i = 0; i < allOptions; i++) {
            if (option_list.children[i].textContent == correcAns) {
                option_list.children[i].setAttribute("class", "option correct");
                option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                console.log("Auto selected correct answer.");
            }
        }
    }
    for (i = 0; i < allOptions; i++) {
        option_list.children[i].classList.add("disabled");
    }
    next_btn.classList.add("show");
}

function showResult() {
    quiz_box.classList.remove("activeQuiz");
    result_box.classList.add("activeResult");

    /* AJAX mettre le score en BDD */
    $.ajax({
        type: "POST",
        url: '../php/score.php',
        data: { score: userScore },
        success: function (data) {
            console.log(data);
        },
        error: function (xhr, status, error) {
            console.error(xhr);
        }
    });

    const scoreText = result_box.querySelector(".score_text");
    //creating a new span tag and passing the user score number and total question number
    let scoreTag = '<span>Votre score est de <p>'+ userScore +' points </p> sur <p>'+ questions.length +' questions.</p></span>';
    scoreText.innerHTML = scoreTag;  //adding new span tag inside score_Text
}

/*
* Toute la gestion du timer
* Le chrono descend, et si il arrive à 0 on met en valeur la bonne réponse sans donner de points
*
*/
function startTimer(time) {
    counter = setInterval(timer, 1000);
    function timer() {
        timeCount.textContent = time;
        time--;
        if (time < 9) {
            let addZero = timeCount.textContent;
            timeCount.textContent = "0" + addZero;
        }
        if (time < 0) {
            clearInterval(counter);
            timeText.textContent = "Time Off";
            const allOptions = option_list.children.length;
            let correcAns = questions[que_count].answer;
            for (i = 0; i < allOptions; i++) {
                if (option_list.children[i].textContent == correcAns) {
                    option_list.children[i].setAttribute("class", "option correct");
                    option_list.children[i].insertAdjacentHTML("beforeend", tickIconTag);
                    console.log("Time Off: Auto selected correct answer.");
                }
            }
            for (i = 0; i < allOptions; i++) {
                option_list.children[i].classList.add("disabled");
            }
            next_btn.classList.add("show");
        }
    }
}

//Gestion de la ligne de temps
function startTimerLine(time) {
    counterLine = setInterval(timer, 48.5);
    function timer() {
        time += 1;
        time_line.style.width = time + "px";
        if (time > 549) {
            clearInterval(counterLine);
        }
    }
}

//Gestion du compteur de questions
function queCounter(index) {
    let totalQueCounTag = '<span><p>' + index + '</p>/<p>' + questions.length + '</p></span>';
    bottom_ques_counter.innerHTML = totalQueCounTag;
}