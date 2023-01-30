let screen1 = document.getElementById('screen1');
let startBtn = document.getElementById('start-btn');
let quizWindow = document.getElementById('quiz-window');
let termsAccept = document.getElementById('termsAccept');
let pregressDiv = document.querySelector('.pregressDiv');
let nextBtn = document.getElementsByClassName('next-btn');
let companyScreen = document.getElementById('companyScreen');
// let downloadBtn = document.getElementById('download-btn');
let lastScreen = document.getElementById('lastScreen');
startBtn.onclick = function(){
    if(termsAccept.checked){
        screen1.classList.add('hide-form');
        pregressDiv.classList.remove('hide-form');
        quizWindow.classList.remove('hide-form');
    }
    else{
        alert('Please accept the terms and conditions first..')
    }
}
nextBtn.onclick = function(){
    quizWindow.classList.add('hide-form');
    companyScreen.classList.remove('hide-form')
}
// downloadBtn.onclick = function(){
//     companyScreen.classList.add('hide-form')
//     lastScreen.classList.remove('hide-form')
// }
