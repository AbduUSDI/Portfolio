let score = 0;
let gameRunning = false;
let balls = [];
const scoreDisplay = document.getElementById("score");
const startButton = document.getElementById("startButton");
const resetButton = document.getElementById("resetButton");
const gameContainer = document.getElementById("gameContainer");
const gameOverScreen = document.getElementById("gameOverScreen");
const finalScoreDisplay = document.getElementById("finalScore");

function createBall(x = null, y = null, speed = null) {
    const ball = document.createElement("div");
    ball.classList.add("ball");

    // Position et direction aléatoires si non spécifiés
    const { posX, posY } = getRandomPosition(x, y);
    const directionX = Math.random() < 0.5 ? 1 : -1;
    const directionY = Math.random() < 0.5 ? 1 : -1;
    speed = speed || (2 + Math.random() * 2);

    ball.style.left = `${posX}px`;
    ball.style.top = `${posY}px`;

    // Ajouter le comportement au clic pour multiplier la balle
    ball.addEventListener("click", () => {
        if (!gameRunning) return;

        score += 10;
        scoreDisplay.innerText = score;

        // Explosion avec animation et suppression de la balle cliquée
        ball.classList.add("explode");
        setTimeout(() => {
            ball.remove();
            balls = balls.filter(b => b.element !== ball); // Retirer la balle du tableau

            // Créer 4 nouvelles balles autour de l'explosion
            for (let i = 0; i < 4; i++) createBall(posX, posY, speed);

            // Vérifier si le conteneur est rempli
            if (balls.length > 30) {
                endGame();
            }
        }, 300); // Durée de l'animation de l'explosion
    });

    gameContainer.appendChild(ball);
    balls.push({ element: ball, directionX, directionY, speed }); // Ajouter la balle avec ses propriétés dans le tableau
}

function getRandomPosition(x = null, y = null) {
    const containerRect = gameContainer.getBoundingClientRect();
    const maxX = containerRect.width - 50;
    const maxY = containerRect.height - 50;

    const posX = x !== null ? x : Math.floor(Math.random() * maxX);
    const posY = y !== null ? y : Math.floor(Math.random() * maxY);

    return { posX, posY };
}

function moveBalls() {
    if (!gameRunning) return;

    const containerRect = gameContainer.getBoundingClientRect();

    balls.forEach(ball => {
        const ballRect = ball.element.getBoundingClientRect();

        // Calculer la prochaine position de la balle
        let newX = ball.element.offsetLeft + ball.speed * ball.directionX;
        let newY = ball.element.offsetTop + ball.speed * ball.directionY;

        // Rebondir sur les bords du conteneur
        if (newX <= 0 || newX + ballRect.width >= containerRect.width) {
            ball.directionX *= -1;
            ball.element.style.transform = "scale(1, 0.8)"; // Écrasement horizontal
        }
        if (newY <= 0 || newY + ballRect.height >= containerRect.height) {
            ball.directionY *= -1;
            ball.element.style.transform = "scale(0.8, 1)"; // Écrasement vertical
        }

        // Remettre la balle à sa taille normale après l’écrasement
        setTimeout(() => {
            ball.element.style.transform = "scale(1, 1)";
        }, 100);

        // Appliquer la nouvelle position
        ball.element.style.left = `${newX}px`;
        ball.element.style.top = `${newY}px`;
    });

    requestAnimationFrame(moveBalls);
}

function startGame() {
    score = 0;
    scoreDisplay.innerText = score;
    gameRunning = true;
    gameOverScreen.style.display = "none";
    startButton.style.display = "none";

    // Commencer avec une seule balle et lancer le mouvement
    balls = [];
    createBall();
    moveBalls();
}

function resetGame() {
    // Réinitialiser le score et relancer le jeu
    localStorage.setItem("lastScore", score);
    score = 0;
    scoreDisplay.innerText = score;
    gameRunning = false;

    // Supprimer toutes les balles et réinitialiser l'écran de jeu
    while (gameContainer.firstChild) {
        gameContainer.removeChild(gameContainer.firstChild);
    }
    startButton.style.display = "block";
    balls = [];
}

function endGame() {
    gameRunning = false;
    finalScoreDisplay.innerText = score;
    gameOverScreen.style.display = "block";
    localStorage.setItem("lastScore", score); // Stocker le score dans le Web Storage

    // Supprimer toutes les balles
    while (gameContainer.firstChild) {
        gameContainer.removeChild(gameContainer.firstChild);
    }
    balls = [];
}

startButton.addEventListener("click", startGame);
resetButton.addEventListener("click", resetGame);
