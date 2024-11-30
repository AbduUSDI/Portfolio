<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Modification du DOM</title>
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
        <h1 class="text-center">Exercice : Modification du DOM</h1>
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
    {
        question: "Ajoutez un élément à la liste avec le texte 'Nouvel Élément'.",
        options: [
            "let li = document.createElement('li'); li.textContent = 'Nouvel Élément'; document.getElementById('itemList').appendChild(li);",
            "document.createTextNode('Nouvel Élément');",
            "document.querySelector('.list').textContent += 'Nouvel Élément';",
            "document.getElementById('itemList').appendChild('Nouvel Élément');"
        ],
        correct: 0
    },
    {
        question: "Supprimez le dernier élément de la liste.",
        options: [
            "let list = document.getElementById('itemList'); list.removeChild(list.lastElementChild);",
            "document.querySelector('.list li:last-child').remove();",
            "document.getElementById('list').deleteChild(list.lastChild);",
            "document.getElementById('list').removeLastChild();"
        ],
        correct: 0
    },
    {
        question: "Modifiez le titre principal pour afficher 'Nouveau Titre Principal'.",
        options: [
            "document.querySelector('.title').textContent = 'Nouveau Titre Principal';",
            "document.querySelector('.title').innerHTML = 'Nouveau Titre Principal';",
            "document.querySelector('.header-title').textContent = 'Nouveau Titre Principal';",
            "document.getElementById('title').innerHTML = 'Nouveau Titre Principal';"
        ],
        correct: 0
    },
    {
        question: "Ajoutez une classe CSS 'highlight' à l'élément avec l'ID `content`.",
        options: [
            "document.getElementById('content').classList.add('highlight');",
            "document.getElementById('content').setAttribute('highlight', true);",
            "document.querySelector('.content').addClass('highlight');",
            "document.querySelector('#content').classList.addClass('highlight');"
        ],
        correct: 0
    },
    {
        question: "Rendez le texte de tous les éléments de liste gras.",
        options: [
            "document.querySelectorAll('li').forEach(li => li.style.fontWeight = 'bold');",
            "document.querySelectorAll('.list li').style.fontWeight = 'bold';",
            "document.querySelector('.list').style.fontWeight = 'bold';",
            "document.querySelectorAll('ul > li').style.fontWeight = 'bold';"
        ],
        correct: 0
    },
    {
        question: "Ajoutez un attribut `data-id` avec la valeur '123' au bouton.",
        options: [
            "document.querySelector('#btn').setAttribute('data-id', '123');",
            "document.getElementById('btn').data('id', '123');",
            "document.querySelector('#btn').setData('id', '123');",
            "document.querySelector('#btn').attr('data-id', '123');"
        ],
        correct: 0
    },
    {
        question: "Ajoutez une bordure rouge de 2px à la liste.",
        options: [
            "document.querySelector('.list').style.border = '2px solid red';",
            "document.querySelectorAll('.list').style.borderWidth = '2px';",
            "document.querySelector('.list').setBorder('2px red');",
            "document.querySelectorAll('.list li').style.borderColor = 'red';"
        ],
        correct: 0
    },
    {
        question: "Ajoutez un texte 'Important' avant le premier élément de la liste.",
        options: [
            "document.querySelector('.list').insertAdjacentText('afterbegin', 'Important');",
            "document.querySelector('.list').append('Important');",
            "document.querySelector('.list li').prepend('Important');",
            "document.getElementById('list').prependText('Important');"
        ],
        correct: 0
    },
    {
        question: "Masquez un élément avec l'ID `header`.",
        options: [
            "document.getElementById('header').style.display = 'none';",
            "document.querySelector('#header').hidden = true;",
            "document.getElementById('header').style.visibility = 'hidden';",
            "document.querySelector('#header').style.hide();"
        ],
        correct: 0
    },
    {
        question: "Ajoutez un écouteur d'événement `click` sur le bouton.",
        options: [
            "document.querySelector('#btn').addEventListener('click', () => alert('Clic!'));",
            "document.getElementById('btn').onClick = () => alert('Clic!');",
            "document.querySelector('#btn').click(() => alert('Clic!'));",
            "document.querySelector('#btn').addClickEvent(() => alert('Clic!'));"
        ],
        correct: 0
    },
    {
        question: "Comment insérer un texte avant un élément avec l'ID `info` ?",
        options: [
            "document.querySelector('#info').insertAdjacentText('beforebegin', 'Texte ajouté');",
            "document.querySelector('#info').prepend('Texte ajouté');",
            "document.querySelector('#info').append('Texte ajouté');",
            "document.querySelector('#info').innerText += 'Texte ajouté';"
        ],
        correct: 0
    },
    {
        question: "Comment supprimer un élément avec l'ID `item` ?",
        options: [
            "document.getElementById('item').remove();",
            "document.querySelector('#item').remove();",
            "document.querySelector('#item').delete();",
            "document.getElementById('item').delete();"
        ],
        correct: 0
    },
    {
        question: "Comment changer l'attribut `src` d'une image avec l'ID `image` ?",
        options: [
            "document.querySelector('#image').setAttribute('src', 'image.jpg');",
            "document.querySelector('#image').src = 'image.jpg';",
            "document.querySelector('#image').addAttribute('src', 'image.jpg');",
            "document.querySelector('#image').setSource('image.jpg');"
        ],
        correct: 0
    },
    {
        question: "Comment récupérer le nombre d'enfants d'un élément avec l'ID `container` ?",
        options: [
            "document.getElementById('container').children.length;",
            "document.querySelector('#container').childElementCount;",
            "document.querySelector('#container').childCount;",
            "document.getElementById('container').length;"
        ],
        correct: 0
    },
    {
        question: "Comment déplacer un élément avec l'ID `child` dans un autre élément avec l'ID `parent` ?",
        options: [
            "let child = document.getElementById('child'); document.getElementById('parent').appendChild(child);",
            "document.getElementById('parent').append(document.getElementById('child'));",
            "document.querySelector('#parent').append(document.querySelector('#child'));",
            "document.getElementById('parent').appendChild('#child');"
        ],
        correct: 0
    },
    {
        question: "Comment désactiver un bouton avec l'ID `btn` ?",
        options: [
            "document.getElementById('btn').disabled = true;",
            "document.querySelector('#btn').disable = true;",
            "document.getElementById('btn').enabled = false;",
            "document.querySelector('#btn').enable = false;"
        ],
        correct: 0
    },
    {
        question: "Comment réinitialiser le contenu HTML d'un élément avec l'ID `container` ?",
        options: [
            "document.getElementById('container').innerHTML = '';",
            "document.querySelector('#container').innerHTML = '';",
            "document.getElementById('container').resetHTML();",
            "document.querySelector('#container').clearHTML();"
        ],
        correct: 0
    },
    {
        question: "Comment ajouter un style inline pour définir une bordure rouge à un élément avec l'ID `box` ?",
        options: [
            "document.getElementById('box').style.cssText = 'border: 1px solid red;';",
            "document.querySelector('#box').setStyle('border: 1px solid red;');",
            "document.getElementById('box').addStyle('border: 1px solid red;');",
            "document.querySelector('#box').inlineStyle = 'border: 1px solid red;';"
        ],
        correct: 0
    },
    {
        question: "Comment vérifier si un élément avec l'ID `header` a la classe `active` ?",
        options: [
            "document.getElementById('header').classList.contains('active');",
            "document.querySelector('#header').hasClass('active');",
            "document.getElementById('header').isClass('active');",
            "document.querySelector('#header').containsClass('active');"
        ],
        correct: 0
    },
    {
        question: "Comment ajouter un événement `mouseenter` à un élément avec l'ID `hoverArea` ?",
        options: [
            "document.querySelector('#hoverArea').addEventListener('mouseenter', () => alert('Entré !'));",
            "document.getElementById('hoverArea').onMouseEnter(() => alert('Entré !'));",
            "document.querySelector('#hoverArea').mouseenter(() => alert('Entré !'));",
            "document.querySelector('#hoverArea').addHoverEvent(() => alert('Entré !'));"
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
            if (currentQuestion >= allQuestions.length) return;

            const questionData = allQuestions[currentQuestion];
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
            const questionData = allQuestions[currentQuestion];
            const runner = document.getElementById('runner');
            const resultat = document.getElementById('resultat');

            if (choix === questionData.correct) {
                score++;
                position += 50; // Le bonhomme avance
                runner.style.left = position + "px";

                if (score === allQuestions.length) {
                    resultat.innerHTML = "<div class='alert alert-success'>Félicitations ! Vous avez terminé l'exercice.</div>";
                } else {
                    resultat.innerHTML = "<div class='alert alert-success'>Bonne réponse ! Continuez.</div>";
                }
            } else {
                resultat.innerHTML = "<div class='alert alert-danger'>Mauvaise réponse. Recommencez la partie.</div>";
                document.getElementById('questions-container').classList.add('disabled');
            }

            currentQuestion++;
            if (currentQuestion < allQuestions.length) afficherQuestion();
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
