<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Interactif</title>
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
        <h1 class="text-center">Exercice Interactif</h1>
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
            { question: "Quelle est la bonne déclaration pour une variable en JavaScript ?", options: ["var nom = \"Jean\";", "let nom = Jean;", "let nom = \"Jean\";", "const nom = \"Jean\";"], correct: 2 },
            { question: "Comment déclare-t-on une constante en JavaScript ?", options: ["let constante = 5;", "const constante = 5;", "var constante = 5;", "constante = 5;"], correct: 1 },
            { question: "Quel est le symbole pour accéder aux propriétés d'un objet ?", options: [":", ".", ";", "->"], correct: 1 },
            { question: "Quelle méthode transforme une chaîne en majuscules ?", options: ["toLowerCase()", "toUpperCase()", "capitalize()", "toString()"], correct: 1 },
            { question: "Comment ajoute-t-on un élément à un tableau ?", options: [".add()", ".push()", ".append()", ".insert()"], correct: 1 },
            { question: "Comment déclare-t-on une fonction en JavaScript ?", options: ["function maFonction {}", "fonction maFonction {}", "func maFonction()", "declare maFonction()"], correct: 0 },
            { question: "Quelle est la valeur de 2 + '2' en JavaScript ?", options: ["4", "22", "NaN", "Erreur"], correct: 1 },
            { question: "Quelle méthode vérifie si un tableau contient un élément ?", options: ["contains()", "includes()", "exists()", "find()"], correct: 1 },
            { question: "Comment convertir une chaîne en nombre entier ?", options: ["parseInt()", "toInt()", "Number()", "parse()"], correct: 0 },
            { question: "Quelle est la valeur de typeof null en JavaScript ?", options: ["null", "object", "undefined", "string"], correct: 1 },
            { question: "Quel mot-clé est utilisé pour déclarer une variable modifiable en JavaScript ?", options: ["let", "const", "var", "modifiable"], correct: 0 },
            { question: "Quel mot-clé est utilisé pour déclarer une variable constante ?", options: ["let", "const", "var", "fix"], correct: 1 },
            { question: "Quelle est la portée d'une variable déclarée avec `var` ?", options: ["Globale ou locale à une fonction", "Bloc", "Strictement globale", "Strictement locale"], correct: 0 },
            { question: "Quelle est la portée d'une variable déclarée avec `let` ?", options: ["Bloc", "Globale", "Locale à une fonction", "Strictement locale"], correct: 0 },
            { question: "Quelle est la portée d'une variable déclarée avec `const` ?", options: ["Bloc", "Globale", "Locale à une fonction", "Strictement locale"], correct: 0 },
            { question: "Peut-on réassigner une variable déclarée avec `const` ?", options: ["Oui", "Non"], correct: 1 },
            { question: "Quelle est la valeur par défaut d'une variable non initialisée en JavaScript ?", options: ["undefined", "null", "NaN", "0"], correct: 0 },
            { question: "Quelle est la syntaxe correcte pour déclarer une variable ?", options: ["let variableName;", "const variableName;", "var variableName;", "Toutes les réponses"], correct: 3 },
            { question: "Quelle est la sortie de `console.log(variable)` si `variable` n'est pas déclarée ?", options: ["undefined", "null", "ReferenceError", "SyntaxError"], correct: 2 },
            { question: "Quelle est la sortie de `console.log(variable)` si `variable` est déclarée mais pas initialisée ?", options: ["undefined", "null", "ReferenceError", "SyntaxError"], correct: 0 },
            { question: "Quelle est la différence entre `var`, `let` et `const` ?", options: ["Portée", "Mutabilité", "Hoisting", "Toutes les réponses"], correct: 3 },
            { question: "Les variables déclarées avec `let` ou `const` sont-elles accessibles avant leur déclaration ?", options: ["Oui", "Non"], correct: 1 },
            { question: "Quelle est la sortie de `typeof variable` si `variable` n'existe pas ?", options: ["undefined", "ReferenceError", "null", "Erreur de syntaxe"], correct: 0 },
            { question: "Quelle est la sortie de `let x; console.log(x)` ?", options: ["undefined", "null", "0", "ReferenceError"], correct: 0 },
            { question: "Comment déclarer plusieurs variables dans une seule ligne ?", options: ["let a, b;", "let a = 1, b = 2;", "var a, b;", "Toutes les réponses"], correct: 3 },
            { question: "Quelle est la différence principale entre `null` et `undefined` ?", options: ["null est défini par l'utilisateur, undefined est défini par JavaScript", "Ils sont identiques", "null est une chaîne vide", "undefined est un nombre"], correct: 0 },
            { question: "Que se passe-t-il si vous redéclarez une variable `var` dans le même contexte ?", options: ["Elle est remplacée", "Une erreur est levée", "Rien ne se passe", "Elle est ignorée"], correct: 0 },
            { question: "Est-il possible de redéclarer une variable `let` dans le même bloc ?", options: ["Oui", "Non"], correct: 1 },
            { question: "Quelle est la sortie de `console.log(a); let a = 5;` ?", options: ["undefined", "5", "ReferenceError", "SyntaxError"], correct: 2 },
            { question: "Quelle est la sortie de `console.log(a); var a = 5;` ?", options: ["undefined", "5", "ReferenceError", "SyntaxError"], correct: 0 },
            { question: "Comment convertir une chaîne en nombre en JavaScript ?", options: ["parseInt()", "Number()", "+variable", "Toutes les réponses"], correct: 3 },
            { question: "Que signifie le terme 'hoisting' pour les variables `var` ?", options: ["La variable est déplacée en haut de son contexte d'exécution", "La variable n'existe pas avant sa déclaration", "La variable est globale par défaut", "Elle ne concerne pas `var`"], correct: 0 },
            { question: "Peut-on déclarer une variable sans mot-clé (`var`, `let`, `const`) ?", options: ["Oui, elle sera globale", "Non, une erreur est levée", "Oui, elle sera locale", "Non, elle sera undefined"], correct: 0 },
            { question: "Quelle est la sortie de `let x = 5; x = 'Bonjour'; console.log(x);` ?", options: ["5", "'Bonjour'", "undefined", "Erreur"], correct: 1 },
            { question: "Quelle méthode est utilisée pour vérifier si une variable est un tableau ?", options: ["Array.isArray()", "typeof", "instanceof Array", "Les réponses 1 et 3"], correct: 3 },
            { question: "Quelle est la sortie de `const a = 5; a = 10;` ?", options: ["5", "10", "undefined", "TypeError"], correct: 3 },
            { question: "Comment vérifier si une variable est définie ?", options: ["variable !== undefined", "typeof variable !== 'undefined'", "variable ? true : false", "Les deux premières réponses"], correct: 3 },
            { question: "Que se passe-t-il si vous utilisez `delete` sur une variable déclarée avec `var` ?", options: ["La variable est supprimée", "La variable reste intacte", "Une erreur est levée", "La variable devient undefined"], correct: 1 },
            { question: "Quel mot-clé est utilisé pour rendre une variable inchangeable après assignation ?", options: ["final", "immutable", "const", "let"], correct: 2 },
            { question: "Comment copier une variable sans la lier à l'originale (pour des objets) ?", options: ["Object.assign()", "JSON.parse(JSON.stringify())", "Les deux réponses", "Aucune des réponses"], correct: 2 },
            { question: "Quelle est la sortie de `console.log(typeof null)` ?", options: ["null", "object", "undefined", "number"], correct: 1 },
            { question: "Peut-on déclarer une variable `let` sans l'initialiser ?", options: ["Oui", "Non"], correct: 0 },
            { question: "Comment une variable globale est-elle créée automatiquement ?", options: ["En omettant un mot-clé de déclaration", "Avec `global var`", "Avec `let global`", "Ce n'est pas possible"], correct: 0 },
            { question: "Comment vérifier si une variable est un objet ?", options: ["typeof variable === 'object'", "variable instanceof Object", "Les deux réponses", "typeof variable === 'instance'"], correct: 2 },
            { question: "Quelle est la sortie de `let x; console.log(x === undefined);` ?", options: ["true", "false", "undefined", "Erreur"], correct: 0 },
            { question: "Quelle est la différence entre `var` et `let` concernant le redeclaring ?", options: ["`var` permet le redeclaring, `let` ne le permet pas", "`let` permet le redeclaring, `var` ne le permet pas", "Les deux interdisent le redeclaring", "Aucun des deux n'interdit"], correct: 0 },
            { question: "Quelle est la sortie de `const a = []; a.push(1); console.log(a);` ?", options: ["[]", "[1]", "Erreur", "undefined"], correct: 1 },
            { question: "Quelle est la sortie de `let a = 1; { let a = 2; } console.log(a);` ?", options: ["1", "2", "undefined", "Erreur"], correct: 0 },
            { question: "Peut-on redéclarer une variable `const` ?", options: ["Oui", "Non"], correct: 1 },
            { question: "Quelle est la sortie de `console.log(b); let b = 5;` ?", options: ["undefined", "5", "ReferenceError", "SyntaxError"], correct: 2 }
            // Ajoutez ici jusqu'à 100 questions supplémentaires
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
