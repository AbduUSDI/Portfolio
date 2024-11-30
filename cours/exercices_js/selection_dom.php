<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice DOM</title>
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
        <h1 class="text-center">Exercice : Sélection DOM</h1>
        <div>
            <button class="btn btn-danger mb-3" onclick="recommencer()">Recommencer</button>
            <?php include '../templates/retour.php' ?>
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
            { question: "Sélectionnez l'élément avec l'ID `content` et changez son fond en bleu.", options: ["document.getElementById('content').style.backgroundColor = 'blue';", "document.getElementById('content').innerHTML = 'blue';", "document.querySelector('#content').style.color = 'blue';", "document.getElementsByTagName('content')[0].style.color = 'blue';"], correct: 0 },
            { question: "Changez la couleur des éléments de la liste en rouge.", options: ["document.querySelectorAll('.list li').forEach(li => li.style.color = 'red');", "document.getElementsByClassName('list').style.color = 'red';", "document.querySelectorAll('.list').style.color = 'red';", "document.querySelectorAll('li').forEach(li => li.style.color = 'red');"], correct: 0 },
            { question: "Ajoutez '- modifié' au contenu des éléments de liste.", options: ["document.querySelectorAll('li').forEach(li => li.textContent += ' - modifié');", "document.getElementById('list').innerHTML += ' - modifié';", "document.querySelectorAll('.list li').innerHTML += ' - modifié';", "document.querySelector('li').textContent = 'modifié';"], correct: 0 },
            { question: "Changez le texte du bouton en 'Cliquez ici'.", options: ["document.querySelector('#btn').textContent = 'Cliquez ici';", "document.querySelector('.btn').textContent = 'Cliquez ici';", "document.getElementById('btn').style.text = 'Cliquez ici';", "document.querySelector('#btn').style.innerHTML = 'Cliquez ici';"], correct: 0 },
            { question: "Ajoutez une classe CSS 'active' au contenu principal.", options: ["document.getElementById('content').classList.add('active');", "document.querySelector('#content').addClass('active');", "document.getElementById('content').className += 'active';", "document.querySelectorAll('#content').classList.add('active');"], correct: 0 },
            { question: "Sélectionnez tous les titres et mettez-les en gras.", options: ["document.querySelectorAll('h2').forEach(el => el.style.fontWeight = 'bold');", "document.getElementById('title').style.fontWeight = 'bold';", "document.querySelector('h2').style.fontWeight = 'bold';", "document.querySelectorAll('h2').forEach(el => el.style.color = 'bold');"], correct: 0 },
            { question: "Supprimez l'attribut `onclick` du bouton.", options: ["document.querySelector('#btn').removeAttribute('onclick');", "document.getElementById('btn').onclick = null;", "document.querySelectorAll('#btn').onclick = false;", "document.querySelector('#btn').removeProperty('onclick');"], correct: 0 },
            { question: "Ajoutez un nouvel élément `li` à la liste.", options: ["document.querySelector('.list').innerHTML += '<li>Nouveau</li>';", "document.querySelectorAll('.list').innerHTML += '<li>Nouveau</li>';", "document.getElementsByClassName('list').innerHTML += '<li>Nouveau</li>';", "document.getElementById('list').innerHTML += '<li>Nouveau</li>';"], correct: 0 },
            { question: "Récupérez le texte du titre principal.", options: ["document.querySelector('h2').textContent;", "document.getElementById('title').text;", "document.querySelector('#title').innerText;", "document.querySelectorAll('h2').value;"], correct: 0 },
            { question: "Ajoutez un écouteur d'événement `click` au bouton.", options: ["document.querySelector('#btn').addEventListener('click', () => alert('Clic!'));", "document.getElementById('btn').onClick = () => alert('Clic!');", "document.querySelector('.btn').onClick('click', alert('Clic!'));", "document.querySelectorAll('#btn').addEventListener('click', alert('Clic!'));"], correct: 0 },
            {
                question: "Comment récupérer la valeur d'un champ de formulaire avec l'ID `inputName` ?",
                options: [
                    "document.getElementById('inputName').value;",
                    "document.querySelector('#inputName').textContent;",
                    "document.getElementById('inputName').innerHTML;",
                    "document.querySelector('#inputName').getValue();"
                ],
                correct: 0
            },
            {
                question: "Comment ajouter un nouvel attribut `data-role='admin'` à un élément avec l'ID `user` ?",
                options: [
                    "document.getElementById('user').setAttribute('data-role', 'admin');",
                    "document.querySelector('#user').addAttribute('data-role', 'admin');",
                    "document.getElementById('user').data('role', 'admin');",
                    "document.getElementsByClassName('user')[0].setAttribute('data-role', 'admin');"
                ],
                correct: 0
            },
            {
                question: "Comment masquer un élément avec l'ID `menu` en utilisant JavaScript ?",
                options: [
                    "document.getElementById('menu').style.display = 'none';",
                    "document.querySelector('menu').hidden = true;",
                    "document.getElementById('menu').style.visibility = 'hidden';",
                    "document.querySelector('#menu').hide();"
                ],
                correct: 0
            },
            {
                question: "Comment vérifier si un élément avec l'ID `header` possède la classe `active` ?",
                options: [
                    "document.getElementById('header').classList.contains('active');",
                    "document.querySelector('#header').hasClass('active');",
                    "document.getElementById('header').isActive();",
                    "document.querySelector('#header').classList.has('active');"
                ],
                correct: 0
            },
            {
                question: "Comment supprimer le deuxième enfant d'un élément avec l'ID `list` ?",
                options: [
                    "document.getElementById('list').removeChild(document.getElementById('list').children[1]);",
                    "document.querySelector('#list').removeChild(1);",
                    "document.getElementById('list').deleteChild(1);",
                    "document.querySelector('#list').children[1].delete();"
                ],
                correct: 0
            },
            {
                question: "Comment ajouter du texte au début d'un élément avec l'ID `content` ?",
                options: [
                    "document.getElementById('content').insertAdjacentText('afterbegin', 'Texte ajouté');",
                    "document.querySelector('#content').prepend('Texte ajouté');",
                    "document.getElementById('content').innerText = 'Texte ajouté' + innerText;",
                    "document.querySelector('#content').append('Texte ajouté');"
                ],
                correct: 0
            },
            {
                question: "Comment récupérer le nombre d'enfants d'un élément avec l'ID `parent` ?",
                options: [
                    "document.getElementById('parent').children.length;",
                    "document.querySelector('#parent').childNodes.length;",
                    "document.getElementById('parent').countChildren();",
                    "document.querySelector('#parent').length;"
                ],
                correct: 0
            },
            {
                question: "Comment remplacer un élément avec l'ID `old` par un nouvel élément `newElement` ?",
                options: [
                    "document.getElementById('old').replaceWith(newElement);",
                    "document.querySelector('#old').replace(newElement);",
                    "document.getElementById('old').parentNode.replaceChild(newElement, document.getElementById('old'));",
                    "document.querySelector('#old').replaceNode(newElement);"
                ],
                correct: 2
            },
            {
                question: "Comment récupérer tous les enfants d'un élément avec l'ID `container` ?",
                options: [
                    "document.getElementById('container').children;",
                    "document.querySelector('#container').getAllChildren();",
                    "document.getElementById('container').childNodes();",
                    "document.querySelector('#container').children.get();"
                ],
                correct: 0
            },
            {
                question: "Comment ajouter un écouteur d'événement `mouseover` à un élément avec la classe `hoverable` ?",
                options: [
                    "document.querySelector('.hoverable').addEventListener('mouseover', () => console.log('Survolé'));",
                    "document.getElementsByClassName('hoverable').onMouseOver(() => console.log('Survolé'));",
                    "document.querySelector('.hoverable').onmouseover(() => console.log('Survolé'));",
                    "document.querySelectorAll('.hoverable').addMouseOver('mouseover', console.log('Survolé'));"
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
