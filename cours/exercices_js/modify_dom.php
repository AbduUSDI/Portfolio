<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Modification DOM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice : Modification du DOM</h1>
        <?php include '../templates/retour.php'; ?>
        
        <section id="dom-manipulation">
            <p>Utilisez JavaScript pour modifier le DOM en répondant aux questions ci-dessous :</p>

            <!-- Structure de base pour la modification du DOM -->
            <div id="content" class="p-3 mb-3 border">
                <h2 class="title">Titre Principal</h2>
                <p class="description">Ceci est une description initiale.</p>
                <ul class="list-group mb-3" id="itemList">
                    <li class="list-group-item">Élément 1</li>
                    <li class="list-group-item">Élément 2</li>
                    <li class="list-group-item">Élément 3</li>
                </ul>
                <button class="btn btn-primary" onclick="ajouterElement()">Ajouter un élément</button>
                <button class="btn btn-danger" onclick="supprimerDernierElement()">Supprimer le dernier élément</button>
                <button class="btn btn-secondary" onclick="modifierTitre()">Modifier le titre</button>
            </div>

            <!-- Formulaire pour entrer les réponses de modification du DOM -->
            <div class="mb-3">
                <label for="ajouterElementInput" class="form-label">Écrivez le code pour ajouter un nouvel élément avec le texte "Nouvel Élément" à la fin de la liste :</label>
                <input type="text" id="ajouterElementInput" class="form-control" placeholder="Exemple : let li = document.createElement('li'); li.textContent = 'Nouvel Élément'; document.getElementById('itemList').appendChild(li);">
            </div>

            <div class="mb-3">
                <label for="supprimerElementInput" class="form-label">Écrivez le code pour supprimer le dernier élément de la liste :</label>
                <input type="text" id="supprimerElementInput" class="form-control" placeholder="Exemple : let list = document.getElementById('itemList'); list.removeChild(list.lastElementChild);">
            </div>

            <div class="mb-3">
                <label for="modifierTitreInput" class="form-label">Écrivez le code pour changer le texte du titre en "Nouveau Titre Principal" :</label>
                <input type="text" id="modifierTitreInput" class="form-control" placeholder="Exemple : document.querySelector('.title').textContent = 'Nouveau Titre Principal';">
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
        // Fonctions pour tester la manipulation du DOM
        function ajouterElement() {
            let li = document.createElement("li");
            li.className = "list-group-item";
            li.textContent = "Nouvel Élément";
            document.getElementById("itemList").appendChild(li);
        }

        function supprimerDernierElement() {
            let list = document.getElementById("itemList");
            if (list.lastElementChild) {
                list.removeChild(list.lastElementChild);
            }
        }

        function modifierTitre() {
            document.querySelector(".title").textContent = "Nouveau Titre Principal";
        }

        // Vérification des réponses des utilisateurs
        function verifierReponses() {
            const ajouterElementInput = document.getElementById("ajouterElementInput").value.trim();
            const supprimerElementInput = document.getElementById("supprimerElementInput").value.trim();
            const modifierTitreInput = document.getElementById("modifierTitreInput").value.trim();

            // Réponses attendues
            const bonneReponseAjouterElement = "let li = document.createElement('li'); li.className = 'list-group-item'; li.textContent = 'Nouvel Élément'; document.getElementById('itemList').appendChild(li);";
            const bonneReponseSupprimerElement = "let list = document.getElementById('itemList'); list.removeChild(list.lastElementChild);";
            const bonneReponseModifierTitre = "document.querySelector('.title').textContent = 'Nouveau Titre Principal';";

            let resultat = "";

            if (!ajouterElementInput || !supprimerElementInput || !modifierTitreInput) {
                resultat = "<div class='alert alert-danger'>Veuillez remplir tous les champs avant de vérifier.</div>";
            } else if (
                ajouterElementInput === bonneReponseAjouterElement &&
                supprimerElementInput === bonneReponseSupprimerElement &&
                modifierTitreInput === bonneReponseModifierTitre
            ) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (ajouterElementInput !== bonneReponseAjouterElement) {
                    resultat += "<p>Astuce : Utilisez `createElement`, `className`, et `appendChild` pour ajouter un élément.</p>";
                }
                if (supprimerElementInput !== bonneReponseSupprimerElement) {
                    resultat += "<p>Astuce : Utilisez `removeChild` avec `lastElementChild` pour supprimer le dernier élément.</p>";
                }
                if (modifierTitreInput !== bonneReponseModifierTitre) {
                    resultat += "<p>Astuce : Utilisez `querySelector` pour cibler l'élément du titre et changer son `textContent`.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Pour ajouter un élément, utilisez `createElement` et `appendChild`.",
                "Indice 2 : Pour supprimer un élément, utilisez `removeChild` sur le dernier enfant de la liste.",
                "Indice 3 : Pour modifier le texte, ciblez le titre avec `querySelector` et modifiez son `textContent`."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Ajouter un élément : <code>let li = document.createElement('li'); li.className = 'list-group-item'; li.textContent = 'Nouvel Élément'; document.getElementById('itemList').appendChild(li);</code><br>
                    Supprimer le dernier élément : <code>let list = document.getElementById('itemList'); list.removeChild(list.lastElementChild);</code><br>
                    Modifier le titre : <code>document.querySelector('.title').textContent = 'Nouveau Titre Principal';</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
