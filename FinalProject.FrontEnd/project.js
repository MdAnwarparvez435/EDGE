let score = 0;
let highScore = localStorage.getItem('highScore') || 0;
let timeLeft = 30;
let gameRunning = false;
let gameInterval, timerInterval;
let spawnSpeed = 1000;

document.getElementById('highScore').textContent = highScore;

function getRandomColor() {
    const colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A1', '#A133FF', '#33FFF4'];
    return colors[Math.floor(Math.random() * colors.length)];
}

function createNumber() {
    if (!gameRunning) return;

    let num = Math.floor(Math.random() * 10) + 1;
    let circle = document.createElement('div');
    circle.classList.add('circle');
    circle.textContent = num;
    circle.style.backgroundColor = getRandomColor();

    let gameContainer = document.getElementById('gameContainer');
    let maxX = gameContainer.clientWidth - 50; 
    let maxY = gameContainer.clientHeight - 50;

    circle.style.left = Math.floor(Math.random() * maxX) + "px";
    circle.style.top = Math.floor(Math.random() * maxY) + "px";

    gameContainer.appendChild(circle);

    circle.addEventListener('click', function () {
        if (timeLeft > 0) {
            score += num;
            document.getElementById('score').textContent = score;
        }
        circle.remove();
    });

    setTimeout(() => { if (circle.parentNode) circle.remove(); }, 3000);
}

function startGame() {
    score = 0;
    timeLeft = 30;
    gameRunning = true;
    spawnSpeed = 1000; 
    document.getElementById('score').textContent = score;
    document.getElementById('timer').textContent = timeLeft;
    document.getElementById('gameContainer').innerHTML = ''; 

    gameInterval = setInterval(createNumber, spawnSpeed);
    timerInterval = setInterval(() => {
        timeLeft--;
        document.getElementById('timer').textContent = timeLeft;
        
        if (timeLeft % 10 === 0 && spawnSpeed > 300) {  
            spawnSpeed -= 200; 
            clearInterval(gameInterval);
            gameInterval = setInterval(createNumber, spawnSpeed);
        }

        if (timeLeft <= 0) {
            stopGame();
        }
    }, 1000);
}

function stopGame() {
    clearInterval(gameInterval);
    clearInterval(timerInterval);
    gameRunning = false;

    if (score > highScore) {
        highScore = score;
        localStorage.setItem('highScore', highScore);
        document.getElementById('highScore').textContent = highScore;
    }

    alert('Game Over! Your Score: ' + score);
    document.getElementById('gameContainer').innerHTML = ''; 
}