var timer;

var timeRemaining = 720; // 12 minutes in seconds


function startTimer() {

    timer = setInterval(updateTimer, 1000);

}


function pauseTimer() {

    clearInterval(timer);

}


function resetTimer() {

    clearInterval(timer);

    timeRemaining = 720; // Reset to 12 minutes

    updateDisplay();

}


function adjustTimer() {

    var inputTime = document.getElementById('inputTime').value;

    var inputParts = inputTime.split(':');

    var minutes = parseInt(inputParts[0]);

    var seconds = parseInt(inputParts[1]);

    timeRemaining = minutes * 60 + seconds;

    updateDisplay();

}


function updateTimer() {

    if (timeRemaining > 0) {

        timeRemaining--;

        updateDisplay();

    } else {

        clearInterval(timer);

        alert("Time's up!");

    }

}


function updateDisplay() {

    var minutes = Math.floor(timeRemaining / 60).toString().padStart(2, '0');

    var seconds = (timeRemaining % 60).toString().padStart(2, '0');

    document.getElementById('clock').textContent = minutes + ':' + seconds;

}


updateDisplay(); // Initial display