const player = document.getElementById("player");
let enemies = Array.from(document.querySelectorAll(".enemy"));
const gameContainer = document.getElementById("gameContainer");
const tileMap = document.getElementById("tileMap");
const speed = 5;

// Position initiale du joueur
let posX = gameContainer.offsetWidth / 2 - player.offsetWidth / 2;
let posY = gameContainer.offsetHeight / 2 - player.offsetHeight / 2;

// Objet pour enregistrer les touches pressées
const keysPressed = {};

// Détecter les touches pressées et relâchées
document.addEventListener("keydown", (event) => {
    keysPressed[event.key] = true;
});

document.addEventListener("keyup", (event) => {
    keysPressed[event.key] = false;
});

// Fonction de mouvement continu pour le joueur en fonction des touches appuyées
function movePlayer() {
    let newX = posX;
    let newY = posY;
    let moved = false;

    if (keysPressed["ArrowUp"]) {
        if (!isObstacle(posX, newY - speed)) {
            newY -= speed;
            moved = true;
        }
    }
    if (keysPressed["ArrowDown"]) {
        if (!isObstacle(posX, newY + speed)) {
            newY += speed;
            moved = true;
        }
    }
    if (keysPressed["ArrowLeft"]) {
        if (!isObstacle(newX - speed, posY)) {
            newX -= speed;
            moved = true;
        }
    }
    if (keysPressed["ArrowRight"]) {
        if (!isObstacle(newX + speed, posY)) {
            newX += speed;
            moved = true;
        }
    }

    if (moved) {
        posX = newX;
        posY = newY;
        updatePlayerPosition();
    }

    checkCollisions();
    requestAnimationFrame(movePlayer); // Continuer à déplacer le joueur tant que les touches sont enfoncées
}

// Mettre à jour la position du joueur sur la carte
function updatePlayerPosition() {
    player.style.top = `${posY}px`;
    player.style.left = `${posX}px`;
}

// Vérifier si une position contient un obstacle
function isObstacle(x, y) {
    const tileSize = 50;
    const tileX = Math.floor(x / tileSize);
    const tileY = Math.floor(y / tileSize);
    const targetTile = tileMap.children[tileY * 30 + tileX]; // Assurez-vous d'utiliser le bon nombre de colonnes ici

    return targetTile && targetTile.classList.contains("obstacle");
}

// Fonction pour vérifier la collision avec les ennemis
function checkCollisions() {
    enemies.forEach((enemy) => {
        const enemyRect = enemy.getBoundingClientRect();
        const playerRect = player.getBoundingClientRect();

        if (
            playerRect.x < enemyRect.x + enemyRect.width &&
            playerRect.x + playerRect.width > enemyRect.x &&
            playerRect.y < enemyRect.y + enemyRect.height &&
            playerRect.y + playerRect.height > enemyRect.y
        ) {
            console.log("Collision avec un ennemi!");
            handleEnemyCollision(enemy);
        }
    });
}

// Gestion de la collision avec un ennemi (supprimer ou déclencher combat)
function handleEnemyCollision(enemy) {
    enemy.remove();
    enemies = enemies.filter(e => e !== enemy);
}

// Fonction d'attaque pour chaque ennemi
function enemyAttack(enemy) {
    const attackInterval = 2000;
    const intervalId = setInterval(() => {
        if (!enemies.includes(enemy)) {
            clearInterval(intervalId);
            return;
        }
        launchProjectile(enemy);
    }, attackInterval);
}

// Fonction pour lancer un projectile
function launchProjectile(enemy) {
    const projectile = document.createElement("div");
    projectile.classList.add("projectile");

    const enemyRect = enemy.getBoundingClientRect();
    projectile.style.left = `${enemyRect.left + enemyRect.width / 2}px`;
    projectile.style.top = `${enemyRect.top + enemyRect.height / 2}px`;
    gameContainer.appendChild(projectile);

    const playerRect = player.getBoundingClientRect();
    const angle = Math.atan2(playerRect.top - enemyRect.top, playerRect.left - enemyRect.left);
    const projectileSpeed = 3;

    function moveProjectile() {
        const currentX = parseFloat(projectile.style.left);
        const currentY = parseFloat(projectile.style.top);
        projectile.style.left = `${currentX + Math.cos(angle) * projectileSpeed}px`;
        projectile.style.top = `${currentY + Math.sin(angle) * projectileSpeed}px`;

        if (detectCollision(projectile, player)) {
            console.log("Le joueur est touché!");
            projectile.remove();
            handlePlayerHit();
        } else if (outOfBounds(projectile)) {
            projectile.remove();
        } else {
            requestAnimationFrame(moveProjectile);
        }
    }

    moveProjectile();
}

// Fonction pour détecter la collision entre le projectile et le joueur
function detectCollision(projectile, player) {
    const projectileRect = projectile.getBoundingClientRect();
    const playerRect = player.getBoundingClientRect();
    return !(
        projectileRect.right < playerRect.left ||
        projectileRect.left > playerRect.right ||
        projectileRect.bottom < playerRect.top ||
        projectileRect.top > playerRect.bottom
    );
}

// Vérifier si le projectile est en dehors des limites du conteneur
function outOfBounds(projectile) {
    const projectileRect = projectile.getBoundingClientRect();
    const gameRect = gameContainer.getBoundingClientRect();
    return (
        projectileRect.top < gameRect.top ||
        projectileRect.bottom > gameRect.bottom ||
        projectileRect.left < gameRect.left ||
        projectileRect.right > gameRect.right
    );
}

// Réduire les points de vie du joueur ou déclencher un effet
function handlePlayerHit() {
    console.log("Points de vie réduits !");
}

// Lancer le mouvement continu du joueur
movePlayer();

// Fonction de mouvement fluide et aléatoire pour les ennemis
enemies.forEach((enemy) => {
    let enemyPosX = parseInt(enemy.style.left) || Math.random() * (gameContainer.offsetWidth - enemy.offsetWidth);
    let enemyPosY = parseInt(enemy.style.top) || Math.random() * (gameContainer.offsetHeight - enemy.offsetHeight);
    let directionX = Math.random() < 0.5 ? 1 : -1;
    let directionY = Math.random() < 0.5 ? 1 : -1;
    const enemySpeed = 1.5;

    function moveEnemy() {
        let newEnemyPosX = enemyPosX + directionX * enemySpeed;
        let newEnemyPosY = enemyPosY + directionY * enemySpeed;

        if (isObstacle(newEnemyPosX, newEnemyPosY)) {
            directionX *= -1;
            directionY *= -1;
        } else {
            enemyPosX = newEnemyPosX;
            enemyPosY = newEnemyPosY;
        }

        enemy.style.left = `${enemyPosX}px`;
        enemy.style.top = `${enemyPosY}px`;

        requestAnimationFrame(moveEnemy);
    }

    moveEnemy();
    enemyAttack(enemy);
});
