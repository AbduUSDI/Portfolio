<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Modules JavaScript</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Exercice sur les Modules en JavaScript</h1>
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
            question: "Que permet de faire un module en JavaScript ?",
            options: [
                "Organiser le code en blocs réutilisables",
                "Créer une application mobile",
                "Exécuter du code sur le serveur",
                "Ajouter des styles CSS"
            ],
            answer: "Organiser le code en blocs réutilisables"
        },
        {
            question: "Quelle syntaxe permet d'importer une valeur par défaut ?",
            options: [
                "import myValue from './module.js';",
                "require('./module.js');",
                "include myValue './module.js';",
                "fetch('./module.js');"
            ],
            answer: "import myValue from './module.js';"
        },
        {
            question: "Quelle est la syntaxe correcte pour exporter une fonction par défaut ?",
            options: [
                "export default function myFunction() {}",
                "export function = myFunction() {}",
                "default export myFunction() {}",
                "module.exports = myFunction;"
            ],
            answer: "export default function myFunction() {}"
        },
        {
            question: "Que signifie l'instruction `export { myFunction }` ?",
            options: [
                "Exporter une fonction nommée",
                "Exporter une valeur par défaut",
                "Renommer une fonction",
                "Importer une fonction"
            ],
            answer: "Exporter une fonction nommée"
        },
        {
            question: "Comment renommer une valeur importée ?",
            options: [
                "import { myValue as newName } from './module.js';",
                "import myValue as newName from './module.js';",
                "rename myValue to newName;",
                "import { rename myValue newName }"
            ],
            answer: "import { myValue as newName } from './module.js';"
        },
        {
            question: "Quel est le type de fichier attendu pour un module en JavaScript ?",
            options: [".js", ".json", ".css", ".html"],
            answer: ".js"
        },
        {
            question: "Que retourne l'importation d'une valeur dans un module ?",
            options: [
                "La valeur exportée",
                "Une promesse",
                "Une fonction",
                "Un objet vide"
            ],
            answer: "La valeur exportée"
        },
        {
            question: "Peut-on importer plusieurs valeurs d'un même module ?",
            options: ["Oui", "Non", "Seulement avec import *", "Seulement avec export default"],
            answer: "Oui"
        },
        {
            question: "Quelle est la différence entre `export` et `export default` ?",
            options: [
                "`export` permet d'exporter plusieurs éléments, `export default` un seul",
                "`export` exporte des objets, `export default` exporte des fonctions",
                "`export` est utilisé pour Node.js uniquement",
                "Aucune différence"
            ],
            answer: "`export` permet d'exporter plusieurs éléments, `export default` un seul"
        },
        {
            question: "Que fait l'instruction `import * as Utils from './module.js';` ?",
            options: [
                "Importe tout le contenu du module sous l'alias Utils",
                "Crée une copie locale du module",
                "Importe uniquement les fonctions exportées",
                "Remplace le contenu du module"
            ],
            answer: "Importe tout le contenu du module sous l'alias Utils"
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
