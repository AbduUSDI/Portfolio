<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Service Workers & PWA</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Exercice sur les Service Workers et PWA en JavaScript</h1>
    <div id="game-area" class="row mt-4">
        <!-- Zone de questions -->
        <div class="col-md-6">
            <div id="question-container" class="mb-4">
                <h3>Question :</h3>
                <p id="question-text">La question s'affichera ici.</p>
            </div>
            <div id="answer-container">
                <!-- Boutons pour les réponses -->
                <div id="choices" class="d-flex flex-column gap-2"></div>
            </div>
        </div>
        <!-- Zone de dessin -->
        <div class="col-md-6 text-center">
            <div id="drawing-area">
                <svg width="200" height="400">
                    <!-- Poutre -->
                    <line x1="20" y1="380" x2="180" y2="380" stroke="black" stroke-width="3" />
                    <line x1="100" y1="380" x2="100" y2="50" stroke="black" stroke-width="3" />
                    <line x1="100" y1="50" x2="160" y2="50" stroke="black" stroke-width="3" />
                    <line x1="160" y1="50" x2="160" y2="80" stroke="black" stroke-width="3" />
                    <!-- Corde -->
                    <line id="rope" x1="160" y1="80" x2="160" y2="120" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <!-- Bonhomme -->
                    <circle id="head" cx="160" cy="140" r="20" stroke="black" stroke-width="2" fill="none" style="visibility: hidden;" />
                    <line id="body" x1="160" y1="160" x2="160" y2="220" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-arm" x1="160" y1="180" x2="140" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-arm" x1="160" y1="180" x2="180" y2="200" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="left-leg" x1="160" y1="220" x2="140" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                    <line id="right-leg" x1="160" y1="220" x2="180" y2="260" stroke="black" stroke-width="2" style="visibility: hidden;" />
                </svg>
            </div>
        </div>
    </div>
    <!-- Zone de message -->
    <div id="message-container" class="text-center mt-4">
        <p id="game-message" class="text-muted">Bonne chance !</p>
    </div>
    <!-- Boutons -->
    <div class="text-center mt-4">
        <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
        <?php include '../templates/retour.php' ?>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    const questions = [
        {
            question: "Qu'est-ce qu'un Service Worker ?",
            options: [
                "Un script qui intercepte les requêtes réseau et gère le cache",
                "Un framework pour créer des PWA",
                "Un outil pour optimiser les images",
                "Une API pour manipuler les cookies"
            ],
            answer: "Un script qui intercepte les requêtes réseau et gère le cache"
        },
        {
            question: "Quelle est la méthode utilisée pour enregistrer un Service Worker ?",
            options: [
                "navigator.serviceWorker.register()",
                "navigator.registerWorker()",
                "serviceWorker.install()",
                "registerWorker(navigator)"
            ],
            answer: "navigator.serviceWorker.register()"
        },
        {
            question: "Que fait l'événement 'install' dans un Service Worker ?",
            options: [
                "Prépare le cache des ressources",
                "Charge les fichiers CSS",
                "Envoie une requête réseau",
                "Supprime les anciens caches"
            ],
            answer: "Prépare le cache des ressources"
        },
        {
            question: "Que se passe-t-il si un Service Worker échoue à s'enregistrer ?",
            options: [
                "Une erreur est levée",
                "Le navigateur redémarre automatiquement",
                "Les ressources réseau ne sont plus accessibles",
                "La PWA cesse de fonctionner"
            ],
            answer: "Une erreur est levée"
        },
        {
            question: "Quelle API est couramment utilisée avec les Service Workers pour gérer le cache ?",
            options: [
                "Cache API",
                "Storage API",
                "Web Storage",
                "LocalStorage"
            ],
            answer: "Cache API"
        },
        {
            question: "Comment vérifier si un Service Worker est pris en charge par le navigateur ?",
            options: [
                "if ('serviceWorker' in navigator)",
                "if ('Cache' in window)",
                "if (navigator.workerAvailable)",
                "if (window.serviceWorkerSupported)"
            ],
            answer: "if ('serviceWorker' in navigator)"
        },
        {
            question: "Quel fichier est nécessaire pour transformer un site en PWA ?",
            options: [
                "manifest.json",
                "service-worker.js",
                "index.html",
                "app-config.json"
            ],
            answer: "manifest.json"
        },
        {
            question: "Quelle fonctionnalité permet à une PWA de fonctionner hors ligne ?",
            options: [
                "Les Service Workers",
                "localStorage",
                "sessionStorage",
                "IndexedDB"
            ],
            answer: "Les Service Workers"
        },
        {
            question: "Comment une PWA peut-elle être ajoutée à l'écran d'accueil d'un appareil ?",
            options: [
                "Avec un manifeste correctement configuré",
                "Avec une API Fetch",
                "En téléchargeant un fichier APK",
                "En configurant un fichier JSON"
            ],
            answer: "Avec un manifeste correctement configuré"
        },
        {
            question: "Quelle méthode du Service Worker permet d'intercepter une requête réseau ?",
            options: [
                "fetch",
                "postMessage",
                "intercept",
                "request"
            ],
            answer: "fetch"
        }
    ];

    let currentQuestion = 0;
    let errors = 0;

    function updateQuestion() {
        const questionData = questions[currentQuestion];
        document.getElementById("question-text").innerText = questionData.question;

        const choicesContainer = document.getElementById("choices");
        choicesContainer.innerHTML = ""; // Réinitialiser les choix

        questionData.options.forEach(option => {
            const button = document.createElement("button");
            button.innerText = option;
            button.classList.add("btn", "btn-outline-primary");
            button.addEventListener("click", () => handleAnswer(option, button));
            choicesContainer.appendChild(button);
        });
    }

    function handleAnswer(selectedOption, button) {
        const questionData = questions[currentQuestion];

        if (selectedOption === questionData.answer) {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-success");
            setTimeout(() => {
                currentQuestion++;
                if (currentQuestion < questions.length) {
                    updateQuestion();
                    showMessage("Bonne réponse ! Continuez.", false);
                } else {
                    showMessage("Félicitations ! Vous avez gagné.", false);
                    disableGame();
                }
            }, 1000);
        } else {
            button.classList.remove("btn-outline-primary");
            button.classList.add("btn-danger");
            errors++;
            const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
            if (errors <= parts.length) {
                drawPart(parts[errors - 1]);
            }
            if (errors >= 7) {
                showMessage("Dommage, vous avez perdu ! Le bonhomme est complet.", true);
                disableGame();
            } else {
                showMessage("Mauvaise réponse. Essayez encore !", true);
            }
        }
    }

    function drawPart(partId) {
        document.getElementById(partId).style.visibility = "visible";
    }

    function showMessage(message, isError = false) {
        const messageElement = document.getElementById("game-message");
        messageElement.innerText = message;
        messageElement.classList.toggle("text-danger", isError);
        messageElement.classList.toggle("text-success", !isError);
    }

    function disableGame() {
        document.getElementById("choices").innerHTML = "";
    }

    function recommencer() {
        currentQuestion = 0;
        errors = 0;
        const parts = ["rope", "head", "body", "left-arm", "right-arm", "left-leg", "right-leg"];
        parts.forEach(part => {
            document.getElementById(part).style.visibility = "hidden";
        });
        showMessage("Bonne chance !", false);
        updateQuestion();
    }

    // Initialiser le jeu
    updateQuestion();
</script>


</body>
</html>
