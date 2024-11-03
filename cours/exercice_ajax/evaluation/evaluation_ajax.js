// Tableau de questions et réponses
const questions = [
    { question: "Quelle méthode AJAX traditionnelle permet de créer une requête HTTP asynchrone ?", options: ["fetch", "XMLHttpRequest", "Promise"], reponse: "XMLHttpRequest" },
    { question: "Quelle syntaxe simplifie l'utilisation des Promises en rendant le code plus lisible ?", options: ["Callback", "XMLHttpRequest", "Async/Await"], reponse: "Async/Await" },
    { question: "Quel format de données est le plus courant pour échanger des données en AJAX ?", options: ["HTML", "JSON", "XML"], reponse: "JSON" },
    { question: "Quel objet en JavaScript est utilisé pour représenter une opération asynchrone ?", options: ["Promise", "Event", "Callback"], reponse: "Promise" },
    { question: "Quelle méthode permet de gérer les délais d’attente en AJAX ?", options: ["fetch", "Promise.race", "async/await"], reponse: "Promise.race" },
    { question: "Quelle est la fonction Fetch en JavaScript ?", options: ["XMLHttpRequest", "fetch", "await"], reponse: "fetch" },
    { question: "Quelle syntaxe de gestion des erreurs utilise try et catch ?", options: ["try...catch", "if...else", "for...catch"], reponse: "try...catch" },
    { question: "Quelle méthode permet de charger des données sans rechargement de page ?", options: ["JSON", "AJAX", "HTML"], reponse: "AJAX" },
    { question: "Dans Fetch, que retourne la méthode json() ?", options: ["String", "Array", "Promise"], reponse: "Promise" },
    { question: "Quelle méthode AJAX est la plus ancienne ?", options: ["fetch", "Promise", "XMLHttpRequest"], reponse: "XMLHttpRequest" },
    { question: "AJAX permet-il de charger du contenu de manière asynchrone ?", options: ["Oui", "Non", "Parfois"], reponse: "Oui" },
    { question: "Quelle méthode AJAX utilise un gestionnaire d'événements pour détecter les changements d'état ?", options: ["XMLHttpRequest", "fetch", "setTimeout"], reponse: "XMLHttpRequest" },
    { question: "Quel objet est utilisé pour gérer les requêtes asynchrones en JavaScript moderne ?", options: ["Promise", "Callback", "await"], reponse: "Promise" },
    { question: "Quelle méthode de Fetch API permet de définir les en-têtes et le corps de la requête ?", options: ["fetch", "XMLHttpRequest", "async"], reponse: "fetch" },
    { question: "Quelle est la réponse la plus fréquemment renvoyée par un serveur ?", options: ["HTML", "JSON", "CSS"], reponse: "JSON" },
    { question: "Quelle méthode AJAX est souvent abrégée en XHR ?", options: ["AJAX", "JSON", "XMLHttpRequest"], reponse: "XMLHttpRequest" },
    { question: "Comment appelle-t-on une fonction passée en paramètre d'une autre fonction ?", options: ["Callback", "Promise", "Event"], reponse: "Callback" },
    { question: "Quelle méthode JavaScript utilise fetch avec async et await ?", options: ["Fetch API", "XMLHttpRequest", "AJAX"], reponse: "Fetch API" },
    { question: "Quelle méthode AJAX est utilisée pour limiter l'accès aux données par domaine ?", options: ["CORS", "JSON", "AJAX"], reponse: "CORS" },
    { question: "Quelle syntaxe utilise Promise pour gérer les erreurs avec then et catch ?", options: ["try...catch", "then...catch", "if...else"], reponse: "then...catch" },
];

// Fonction pour générer les questions QCM dynamiquement dans le HTML
function afficherQuestions() {
    const questionsContainer = document.getElementById("questions-container");
    questions.forEach((q, index) => {
        const optionsHTML = q.options.map(option => `
            <div class="form-check">
                <input class="form-check-input checkbox" type="radio" name="q${index}" id="q${index}_${option}" value="${option}">
                <label class="form-check-label" style="font-style: italic;" for="q${index}_${option}">${option}</label>
            </div>
        `).join('');

        const questionHTML = `
            <div class="mb-3 questionDiv">
                <label class="form-label question">Question ${index + 1} : ${q.question}</label>
                ${optionsHTML}
            </div>
        `;
        questionsContainer.innerHTML += questionHTML;
    });
}

// Appeler la fonction pour afficher les questions au chargement de la page
window.onload = afficherQuestions;

// Fonction pour calculer le score
function calculerScore() {
    let score = 0;
    questions.forEach((q, index) => {
        const selectedOption = document.querySelector(`input[name="q${index}"]:checked`);
        if (selectedOption && selectedOption.value === q.reponse) {
            score++;
        }
    });

    // Afficher le résultat en fonction du score
    let message;
    if (score < 10) {
        message = `<div class="alert alert-danger">Score : ${score}/20 - Non réussi</div>`;
    } else if (score <= 15) {
        message = `<div class="alert alert-warning">Score : ${score}/20 - Passable</div>`;
    } else if (score <= 19) {
        message = `<div class="alert alert-success">Score : ${score}/20 - Félicitations, obtenu !</div>`;
    } else {
        message = `<div class="alert alert-success">Score : ${score}/20 - Magnifique, obtenu !</div>`;
    }
    document.getElementById("score-result").innerHTML = message;
    return false; // Empêcher le rechargement de la page
}
