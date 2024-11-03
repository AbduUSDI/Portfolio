<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Sélection DOM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 10 : Sélection et Manipulation du DOM</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="dom-manipulation">
            <p>Utilisez les méthodes de sélection et de manipulation du DOM en JavaScript pour répondre aux questions ci-dessous :</p>

            <!-- Structure de base pour la sélection et la manipulation du DOM -->
            <div id="content" class="p-3 mb-3 border">
                <h2 class="title">Titre principal</h2>
                <p class="description">Ceci est une description initiale.</p>
                <button id="btn" class="btn btn-primary" onclick="alert('Bouton cliqué!')">Cliquez-moi</button>
                <ul class="list">
                    <li>Élément 1</li>
                    <li>Élément 2</li>
                    <li>Élément 3</li>
                </ul>
            </div>

            <!-- Formulaire pour entrer les réponses des sélections et manipulations DOM -->
            <div class="mb-3">
                <label for="selectByIdInput" class="form-label">Sélectionnez l'élément avec `id="content"` et changez son fond en bleu :</label>
                <input type="text" id="selectByIdInput" class="form-control" placeholder="Exemple : document.getElementById('content').style.backgroundColor = 'blue';">
            </div>

            <div class="mb-3">
                <label for="selectByClassInput" class="form-label">Sélectionnez tous les éléments avec la classe `list` et changez leur couleur en rouge :</label>
                <input type="text" id="selectByClassInput" class="form-control" placeholder="Exemple : document.querySelectorAll('.list li').forEach(li => li.style.color = 'red');">
            </div>

            <div class="mb-3">
                <label for="selectByTagInput" class="form-label">Sélectionnez tous les éléments `li` et ajoutez "- modifié" à leur contenu :</label>
                <input type="text" id="selectByTagInput" class="form-control" placeholder="Exemple : document.querySelectorAll('li').forEach(li => li.textContent += ' - modifié');">
            </div>

            <div class="mb-3">
                <label for="selectByQuerySelectorInput" class="form-label">Sélectionnez le bouton et changez son texte en "Cliquez ici" :</label>
                <input type="text" id="selectByQuerySelectorInput" class="form-control" placeholder="Exemple : document.querySelector('#btn').textContent = 'Cliquez ici';">
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
        function verifierReponses() {
            const selectByIdInput = document.getElementById("selectByIdInput").value.trim();
            const selectByClassInput = document.getElementById("selectByClassInput").value.trim();
            const selectByTagInput = document.getElementById("selectByTagInput").value.trim();
            const selectByQuerySelectorInput = document.getElementById("selectByQuerySelectorInput").value.trim();

            // Réponses attendues
            const bonneReponseSelectById = "document.getElementById('content').style.backgroundColor = 'blue';";
            const bonneReponseSelectByClass = "document.querySelectorAll('.list li').forEach(li => li.style.color = 'red');";
            const bonneReponseSelectByTag = "document.querySelectorAll('li').forEach(li => li.textContent += ' - modifié');";
            const bonneReponseSelectByQuerySelector = "document.querySelector('#btn').textContent = 'Cliquez ici';";

            let resultat = "";

            // Vérification des réponses et champs vides
            if (!selectByIdInput || !selectByClassInput || !selectByTagInput || !selectByQuerySelectorInput) {
                resultat = "<div class='alert alert-danger'>Veuillez remplir tous les champs avant de vérifier.</div>";
            } else if (
                selectByIdInput === bonneReponseSelectById &&
                selectByClassInput === bonneReponseSelectByClass &&
                selectByTagInput === bonneReponseSelectByTag &&
                selectByQuerySelectorInput === bonneReponseSelectByQuerySelector
            ) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (selectByIdInput !== bonneReponseSelectById) {
                    resultat += "<p>Astuce pour sélectionner par ID : Utilisez `getElementById` et `style` pour changer le style.</p>";
                }
                if (selectByClassInput !== bonneReponseSelectByClass) {
                    resultat += "<p>Astuce pour sélectionner par classe : Utilisez `querySelectorAll` et `forEach` pour appliquer une couleur.</p>";
                }
                if (selectByTagInput !== bonneReponseSelectByTag) {
                    resultat += "<p>Astuce pour sélectionner par balise : Utilisez `querySelectorAll` avec la balise `li`.</p>";
                }
                if (selectByQuerySelectorInput !== bonneReponseSelectByQuerySelector) {
                    resultat += "<p>Astuce pour sélectionner avec `querySelector` : Utilisez `#btn` pour cibler le bouton.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Utilisez `getElementById` pour sélectionner un élément par son ID.",
                "Indice 2 : `querySelectorAll` peut être utilisé pour sélectionner plusieurs éléments avec une classe ou une balise.",
                "Indice 3 : Utilisez `forEach` pour appliquer un changement à plusieurs éléments sélectionnés."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Sélection par ID : <code>document.getElementById('content').style.backgroundColor = 'blue';</code><br>
                    Sélection par classe : <code>document.querySelectorAll('.list li').forEach(li => li.style.color = 'red');</code><br>
                    Sélection par balise : <code>document.querySelectorAll('li').forEach(li => li.textContent += ' - modifié');</code><br>
                    Sélection avec querySelector : <code>document.querySelector('#btn').textContent = 'Cliquez ici';</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
