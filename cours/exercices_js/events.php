<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Gestion des événements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice : Gestion des événements en JavaScript</h1>
        <?php include '../templates/retour.php'; ?>
        
        <section id="events-exercice">
            <p>Utilisez JavaScript pour capturer et gérer les événements suivants en répondant aux questions ci-dessous :</p>

            <!-- Structure de base pour la gestion des événements -->
            <div id="event-content" class="p-3 mb-3 border">
                <button id="clickButton" class="btn btn-primary mb-2">Cliquez-moi</button>
                <p id="hoverText">Passez la souris ici</p>
                <input type="text" id="textInput" class="form-control mt-2" placeholder="Tapez ici pour tester l'événement de saisie">
                <p id="eventResult" class="mt-3"></p>
            </div>

            <!-- Formulaire pour entrer les réponses pour les événements -->
            <div class="mb-3">
                <label for="clickEventInput" class="form-label">Écrivez le code pour afficher "Bouton cliqué !" dans `#eventResult` lorsque le bouton est cliqué :</label>
                <input type="text" id="clickEventInput" class="form-control" placeholder="Exemple : document.getElementById('clickButton').addEventListener('click', function() { ... });">
            </div>

            <div class="mb-3">
                <label for="hoverEventInput" class="form-label">Écrivez le code pour afficher "Souris au-dessus !" dans `#eventResult` lorsque le texte est survolé par la souris :</label>
                <input type="text" id="hoverEventInput" class="form-control" placeholder="Exemple : document.getElementById('hoverText').addEventListener('mouseenter', function() { ... });">
            </div>

            <div class="mb-3">
                <label for="inputEventInput" class="form-label">Écrivez le code pour afficher le texte saisi en temps réel dans `#eventResult` :</label>
                <input type="text" id="inputEventInput" class="form-control" placeholder="Exemple : document.getElementById('textInput').addEventListener('input', function() { ... });">
            </div>

            <button class="btn btn-primary" onclick="verifierReponses()">Vérifier les réponses</button>
            <div id="resultat-exercice" class="mt-3"></div>

            <!-- Boutons d'indices -->
            <div class="mt-4">
                <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
                <button class="btn btn-secondary me-2" onclick="afficherIndice(2)">Indice 2</button>
                <button class="btn btn-secondary" onclick="afficherIndice(3)">Indice 3</button>
                <div id="indice" class="mt-3"></div>
            </div>

            <!-- Bouton pour afficher la réponse -->
            <div class="mt-4">
                <button class="btn btn-warning" onclick="afficherReponse()">Afficher la réponse</button>
                <div id="reponse" class="mt-3"></div>
            </div>
        </section>
    </div>

    <script>
        // Ajout des événements pour vérification en direct
        document.getElementById("clickButton").addEventListener("click", function() {
            document.getElementById("eventResult").textContent = "Bouton cliqué !";
        });

        document.getElementById("hoverText").addEventListener("mouseenter", function() {
            document.getElementById("eventResult").textContent = "Souris au-dessus !";
        });

        document.getElementById("textInput").addEventListener("input", function() {
            document.getElementById("eventResult").textContent = this.value;
        });

        // Vérification des réponses de l'utilisateur
        function verifierReponses() {
            const clickEventInput = document.getElementById("clickEventInput").value.trim();
            const hoverEventInput = document.getElementById("hoverEventInput").value.trim();
            const inputEventInput = document.getElementById("inputEventInput").value.trim();

            // Réponses attendues
            const bonneReponseClickEvent = "document.getElementById('clickButton').addEventListener('click', function() { document.getElementById('eventResult').textContent = 'Bouton cliqué !'; });";
            const bonneReponseHoverEvent = "document.getElementById('hoverText').addEventListener('mouseenter', function() { document.getElementById('eventResult').textContent = 'Souris au-dessus !'; });";
            const bonneReponseInputEvent = "document.getElementById('textInput').addEventListener('input', function() { document.getElementById('eventResult').textContent = this.value; });";

            let resultat = "";

            if (!clickEventInput || !hoverEventInput || !inputEventInput) {
                resultat = "<div class='alert alert-danger'>Veuillez remplir tous les champs avant de vérifier.</div>";
            } else if (
                clickEventInput === bonneReponseClickEvent &&
                hoverEventInput === bonneReponseHoverEvent &&
                inputEventInput === bonneReponseInputEvent
            ) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (clickEventInput !== bonneReponseClickEvent) {
                    resultat += "<p>Astuce pour l'événement de clic : Utilisez `addEventListener` avec l'événement `click`.</p>";
                }
                if (hoverEventInput !== bonneReponseHoverEvent) {
                    resultat += "<p>Astuce pour l'événement de survol : Utilisez `addEventListener` avec l'événement `mouseenter`.</p>";
                }
                if (inputEventInput !== bonneReponseInputEvent) {
                    resultat += "<p>Astuce pour l'événement de saisie : Utilisez `addEventListener` avec l'événement `input`.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Utilisez `addEventListener` pour ajouter des écouteurs d'événements.",
                "Indice 2 : Utilisez `click` pour l'événement de clic, `mouseenter` pour le survol et `input` pour la saisie.",
                "Indice 3 : Assurez-vous que le code affiche le résultat dans `#eventResult`."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Événement de clic : <code>document.getElementById('clickButton').addEventListener('click', function() { document.getElementById('eventResult').textContent = 'Bouton cliqué !'; });</code><br>
                    Événement de survol : <code>document.getElementById('hoverText').addEventListener('mouseenter', function() { document.getElementById('eventResult').textContent = 'Souris au-dessus !'; });</code><br>
                    Événement de saisie : <code>document.getElementById('textInput').addEventListener('input', function() { document.getElementById('eventResult').textContent = this.value; });</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
