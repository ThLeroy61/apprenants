const btn_dev = document.getElementById('dev');
const btn_web = document.getElementById('web');
const btn_cyber = document.getElementById('cyber');
const btn_rs = document.getElementById('rs');


window.onload = function(){ 
    
    btn_dev.onclick = () => {
        console.log(btn_dev)
        localStorage.setItem('idQuiz', '1');
    }

    btn_web.onclick = () => {
        localStorage.setItem('idQuiz', '2');
    }

    btn_cyber.onclick = () => {
        localStorage.setItem('idQuiz', '3');
    }

    btn_rs.onclick = () => {
        localStorage.setItem('idQuiz', '4');
    }
}