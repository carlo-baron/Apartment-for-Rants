const modal = document.getElementById("modal");
const createAccountButton = document.getElementById("create-account");
const exitAccountCreationButton = document.getElementById("exit-account-creation");

let isDay = true;

window.onload = function(){
    var date = new Date();
    var hour = date.getHours();

    if(hour >= 6 && hour < 18){
        isDay = true;
    }else if(hour >= 18 || hour < 6){
        isDay = false;
    }

    isDay ? fadeInEffect() : fadeOutEffect();
}

createAccountButton.onclick = function(){
    modal.style.display = "flex";
}

exitAccountCreationButton.onclick = function(){
    modal.style.display = "none";
}

function fadeOutEffect() {
    var fadeTarget = document.getElementById("day");
    fadeTarget.style.opacity = 1;

    var fadeEffect = setInterval(function () {
        if (fadeTarget.style.opacity > 0) {
            var currentOpacity = parseFloat(fadeTarget.style.opacity);
            fadeTarget.style.opacity = currentOpacity - 0.1;
        } else {
            clearInterval(fadeEffect);
        }
    }, 100);

    isDay = !isDay;
}

function fadeInEffect(){
    var fadeTarget = document.getElementById("day");
    fadeTarget.style.opacity = 0;

    var fadeEffect = setInterval(function () {
        if (fadeTarget.style.opacity < 1) {
            var currentOpacity = parseFloat(fadeTarget.style.opacity);
            fadeTarget.style.opacity = currentOpacity + 0.1;
        } else{
            clearInterval(fadeEffect);
        }
    }, 100);

    isDay = !isDay;
}