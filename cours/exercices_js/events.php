<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Gestion des événements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
    <style>
        #game-container {
            width: 100%;
            max-width: 600px;
            height: 200px;
            background-color: #333;
            position: relative;
            margin: 20px auto;
            border-radius: 10px;
            overflow: hidden;
            border: 2px solid #444;
        }

        #runner {
            width: 50px;
            height: 50px;
            background-color: #ff9800;
            border-radius: 50%;
            position: absolute;
            top: 75px;
            left: 10px;
            transition: left 1s ease;
        }

        #finish-line {
            width: 10px;
            height: 200px;
            background-color: #4caf50;
            position: absolute;
            right: 10px;
            top: 0;
        }

        .question {
            margin-bottom: 20px;
        }

        .disabled {
            pointer-events: none;
            opacity: 0.6;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Exercice : Gestion des événements</h1>
        <div>
            <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
            <?php include '../templates/retour.php'; ?>
        </div>
        <div id="game-container">
            <div id="runner"></div>
            <div id="finish-line"></div>
        </div>
        <div id="questions-container" class="mt-4">
            <!-- Les questions seront générées ici -->
        </div>
        <div id="resultat" class="mt-3"></div>
    </div>

    <script>
        const allQuestions = [
            {
                question: "Ajoutez un écouteur d'événement `click` sur le bouton avec l'ID `clickButton` qui affiche 'Bouton cliqué !'.",
                options: [
                    "document.getElementById('clickButton').addEventListener('click', () => alert('Bouton cliqué !'));",
                    "document.getElementById('clickButton').onclick = () => alert('Bouton cliqué !');",
                    "document.querySelector('#clickButton').onClick('click', alert('Bouton cliqué !'));",
                    "document.querySelector('#clickButton').click(alert('Bouton cliqué !'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `mouseenter` pour afficher 'Souris au-dessus !' dans un élément avec l'ID `hoverText`.",
                options: [
                    "document.getElementById('hoverText').addEventListener('mouseenter', () => console.log('Souris au-dessus !'));",
                    "document.querySelector('#hoverText').onMouseEnter = () => console.log('Souris au-dessus !');",
                    "document.querySelector('#hoverText').mouseenter(() => console.log('Souris au-dessus !'));",
                    "document.getElementById('hoverText').hover(() => console.log('Souris au-dessus !'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `input` sur un champ de saisie avec l'ID `textInput` pour afficher la valeur saisie.",
                options: [
                    "document.getElementById('textInput').addEventListener('input', function() { console.log(this.value); });",
                    "document.querySelector('#textInput').addEventListener('input', function() { alert(this.value); });",
                    "document.getElementById('textInput').addInputEvent('input', function() { console.log(this.value); });",
                    "document.getElementById('textInput').input(() => console.log(this.value));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `dblclick` sur un bouton pour afficher 'Double clic détecté !'.",
                options: [
                    "document.querySelector('#btn').addEventListener('dblclick', () => console.log('Double clic détecté !'));",
                    "document.querySelector('#btn').ondblclick = () => console.log('Double clic détecté !');",
                    "document.getElementById('btn').dblclick(() => console.log('Double clic détecté !'));",
                    "document.querySelector('#btn').doubleClick(() => console.log('Double clic détecté !'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `keydown` pour afficher le nom de la touche pressée dans la console.",
                options: [
                    "document.addEventListener('keydown', (e) => console.log(e.key));",
                    "document.addEventListener('keydown', (e) => console.log(e.keyCode));",
                    "document.addEventListener('keydown', () => console.log(event.key));",
                    "document.addEventListener('keypress', (e) => console.log(e.key));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `change` sur une liste déroulante pour afficher l'option sélectionnée.",
                options: [
                    "document.querySelector('#dropdown').addEventListener('change', (e) => console.log(e.target.value));",
                    "document.getElementById('dropdown').onchange = (e) => console.log(e.target.value);",
                    "document.querySelector('#dropdown').addChangeEvent(() => alert(this.value));",
                    "document.querySelector('#dropdown').onChange(() => console.log('Changé'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `mousemove` pour afficher les coordonnées de la souris.",
                options: [
                    "document.addEventListener('mousemove', (e) => console.log(`X: ${e.clientX}, Y: ${e.clientY}`));",
                    "document.addEventListener('mousemove', (e) => alert(`X: ${e.x}, Y: ${e.y}`));",
                    "document.body.onmousemove = (e) => console.log(`X: ${e.pageX}, Y: ${e.pageY}`);",
                    "document.querySelector('#container').mousemove((e) => console.log(e));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `focus` sur un champ de texte pour afficher 'Focus activé'.",
                options: [
                    "document.querySelector('#inputField').addEventListener('focus', () => console.log('Focus activé'));",
                    "document.getElementById('inputField').onfocus = () => alert('Focus activé');",
                    "document.querySelector('#inputField').addFocusEvent(() => console.log('Focus activé'));",
                    "document.getElementById('inputField').focus(() => alert('Focus activé'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `blur` pour afficher 'Focus perdu'.",
                options: [
                    "document.querySelector('#inputField').addEventListener('blur', () => console.log('Focus perdu'));",
                    "document.getElementById('inputField').onblur = () => console.log('Focus perdu');",
                    "document.querySelector('#inputField').blur(() => alert('Focus perdu'));",
                    "document.querySelector('#inputField').onBlur(() => console.log('Focus perdu'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `submit` pour afficher un message lors de l'envoi d'un formulaire.",
                options: [
                    "document.querySelector('#form').addEventListener('submit', (e) => { e.preventDefault(); alert('Formulaire envoyé'); });",
                    "document.querySelector('#form').onsubmit = (e) => { e.preventDefault(); console.log('Envoyé'); };",
                    "document.getElementById('form').addSubmitEvent(() => alert('Soumis'));",
                    "document.querySelector('#form').submit(() => console.log('Formulaire soumis'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `contextmenu` sur un élément avec l'ID `box` pour empêcher l'ouverture du menu contextuel.",
                options: [
                    "document.getElementById('box').addEventListener('contextmenu', (e) => e.preventDefault());",
                    "document.querySelector('#box').oncontextmenu = (e) => e.preventDefault();",
                    "document.getElementById('box').oncontextmenu = (e) => false;",
                    "document.querySelector('#box').disableContextMenu();"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `resize` pour afficher la largeur actuelle de la fenêtre.",
                options: [
                    "window.addEventListener('resize', () => console.log(window.innerWidth));",
                    "document.addEventListener('resize', () => console.log(document.body.clientWidth));",
                    "window.onresize = () => console.log(window.outerWidth);",
                    "document.body.addEventListener('resize', () => console.log(window.innerWidth));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `scroll` pour afficher 'Défilement détecté !'.",
                options: [
                    "document.addEventListener('scroll', () => console.log('Défilement détecté !'));",
                    "window.addEventListener('scroll', () => alert('Défilement détecté !'));",
                    "document.body.addScrollListener(() => console.log('Défilement détecté !'));",
                    "window.onScroll(() => console.log('Défilement détecté !'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `mouseleave` pour afficher 'Souris sortie' sur un élément avec l'ID `hoverZone`.",
                options: [
                    "document.getElementById('hoverZone').addEventListener('mouseleave', () => console.log('Souris sortie'));",
                    "document.querySelector('#hoverZone').onmouseleave = () => alert('Souris sortie');",
                    "document.querySelector('#hoverZone').mouseLeave(() => console.log('Souris sortie'));",
                    "document.getElementById('hoverZone').leave(() => console.log('Souris sortie'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `mouseup` pour afficher 'Clic relâché' sur un bouton avec l'ID `releaseButton`.",
                options: [
                    "document.getElementById('releaseButton').addEventListener('mouseup', () => console.log('Clic relâché'));",
                    "document.querySelector('#releaseButton').onmouseup = () => console.log('Clic relâché');",
                    "document.getElementById('releaseButton').onRelease(() => console.log('Clic relâché'));",
                    "document.querySelector('#releaseButton').mouseRelease(() => console.log('Clic relâché'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `keyup` pour afficher 'Touche relâchée : A' lors de la saisie de la touche A.",
                options: [
                    "document.addEventListener('keyup', (e) => { if (e.key === 'a' || e.key === 'A') console.log('Touche relâchée : A'); });",
                    "document.addEventListener('keyup', (e) => { if (e.key === 'a') console.log('Touche relâchée : A'); });",
                    "window.addKeyupListener('A', () => console.log('Touche relâchée : A'));",
                    "document.onKeyup('a', () => console.log('Touche relâchée : A'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `dragstart` pour afficher 'Début du glisser-déposer'.",
                options: [
                    "document.querySelector('#draggable').addEventListener('dragstart', () => console.log('Début du glisser-déposer'));",
                    "document.getElementById('draggable').onDragStart(() => alert('Début du glisser-déposer'));",
                    "document.querySelector('#draggable').dragStart(() => console.log('Début du glisser-déposer'));",
                    "document.getElementById('draggable').addDragEvent(() => console.log('Début du glisser-déposer'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `drop` pour afficher 'Élément déposé' sur une zone avec l'ID `dropZone`.",
                options: [
                    "document.querySelector('#dropZone').addEventListener('drop', (e) => console.log('Élément déposé'));",
                    "document.querySelector('#dropZone').onDrop = (e) => alert('Élément déposé');",
                    "document.querySelector('#dropZone').drop(() => console.log('Élément déposé'));",
                    "document.getElementById('dropZone').dropEvent(() => console.log('Élément déposé'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `focusout` pour afficher 'Focus perdu' sur un champ avec l'ID `inputField`.",
                options: [
                    "document.querySelector('#inputField').addEventListener('focusout', () => console.log('Focus perdu'));",
                    "document.querySelector('#inputField').onFocusOut(() => console.log('Focus perdu'));",
                    "document.getElementById('inputField').focusOut(() => alert('Focus perdu'));",
                    "document.querySelector('#inputField').blur(() => console.log('Focus perdu'));"
                ],
                correct: 0
            },
            {
                question: "Ajoutez un événement `paste` pour afficher 'Texte collé'.",
                options: [
                    "document.querySelector('#textArea').addEventListener('paste', () => console.log('Texte collé'));",
                    "document.getElementById('textArea').onpaste = () => alert('Texte collé');",
                    "document.querySelector('#textArea').paste(() => console.log('Texte collé'));",
                    "document.getElementById('textArea').onPaste(() => console.log('Texte collé'));"
                ],
                correct: 0
            }
        ];

        // Fonction pour sélectionner 10 questions aléatoires
        function getRandomQuestions(questions, count) {
            const shuffled = questions.sort(() => 0.5 - Math.random());
            return shuffled.slice(0, count);
        }

        // Sélectionne 10 questions aléatoires
        const questions = getRandomQuestions(allQuestions, 10);

        let position = 10; // Position initiale du coureur
        let currentQuestion = 0; // Question actuelle
        let score = 0; // Nombre de bonnes réponses

        function afficherQuestion() {
            if (currentQuestion >= questions.length) return;

            const questionData = questions[currentQuestion];
            const container = document.getElementById('questions-container');
            container.innerHTML = `
                <div class="question">
                    <p><strong>Question ${currentQuestion + 1} :</strong> ${questionData.question}</p>
                    <div>
                        ${questionData.options.map((option, index) => 
                            `<button class="btn btn-primary me-2" onclick="verifierReponse(${index})">${index + 1}. ${option}</button>`
                        ).join('')}
                    </div>
                </div>
            `;
        }

        function verifierReponse(choix) {
            const questionData = questions[currentQuestion];
            const runner = document.getElementById('runner');
            const resultat = document.getElementById('resultat');

            if (choix === questionData.correct) {
                score++;
                position += 50; // Le bonhomme avance
                runner.style.left = position + "px";

                if (score === questions.length) {
                    resultat.innerHTML = "<div class='alert alert-success'>Félicitations ! Vous avez terminé l'exercice.</div>";
                } else {
                    resultat.innerHTML = "<div class='alert alert-success'>Bonne réponse ! Continuez.</div>";
                }
            } else {
                resultat.innerHTML = "<div class='alert alert-danger'>Mauvaise réponse. Recommencez la partie.</div>";
                document.getElementById('questions-container').classList.add('disabled');
            }

            currentQuestion++;
            if (currentQuestion < questions.length) afficherQuestion();
        }

        function recommencer() {
            position = 10;
            currentQuestion = 0;
            score = 0;
            document.getElementById('runner').style.left = position + "px";
            document.getElementById('resultat').innerHTML = "";
            document.getElementById('questions-container').classList.remove('disabled');
            afficherQuestion();
        }

        // Initialisation
        afficherQuestion();
    </script>
</body>
</html>
