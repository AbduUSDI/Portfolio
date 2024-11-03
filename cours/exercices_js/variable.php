<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Variables</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>
    
    <div class="container mt-5">
        
        <h1 class="text-center mb-5">Exercice 1 : Variables et Tableaux</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="variables">
            <p>Déclarez les variables et constantes suivantes :</p>
            <ol>
                <li>Une variable <code>let</code> nommée <code>prenom</code> avec la valeur "John".</li>
                <li>Une constante <code>const</code> nommée <code>ville</code> avec la valeur "Paris".</li>
                <li>Un tableau <code>const</code> appelé <code>fruits</code> contenant les valeurs "Pomme", "Banane", "Orange".</li>
            </ol>
            <p>Entrez vos réponses ci-dessous :</p>
            
            <!-- Formulaire pour entrer les réponses -->
            <div class="mb-3">
                <label for="prenomInput" class="form-label">Variable prénom :</label>
                <input type="text" id="prenomInput" class="form-control" placeholder="Entrez ici la déclaration pour la variable prénom">
            </div>
            
            <div class="mb-3">
                <label for="villeInput" class="form-label">Constante ville :</label>
                <input type="text" id="villeInput" class="form-control" placeholder="Entrez ici la déclaration pour la constante ville">
            </div>

            <div class="mb-3">
                <label for="fruitsInput" class="form-label">Tableau fruits :</label>
                <input type="text" id="fruitsInput" class="form-control" placeholder="Entrez ici la déclaration pour le tableau fruits">
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
            const prenomInput = document.getElementById("prenomInput").value.trim();
            const villeInput = document.getElementById("villeInput").value.trim();
            const fruitsInput = document.getElementById("fruitsInput").value.trim();

            // Conditions de vérification des réponses
            const bonneReponsePrenom = "let prenom = 'John';";
            const bonneReponseVille = "const ville = 'Paris';";
            const bonneReponseFruits = "const fruits = ['Pomme', 'Banane', 'Orange'];";

            let resultat = "";

            if (prenomInput === bonneReponsePrenom && villeInput === bonneReponseVille && fruitsInput === bonneReponseFruits) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";

                if (prenomInput !== bonneReponsePrenom) {
                    resultat += "<p>Astuce pour <strong>prenom</strong> : Utilisez <code>let</code> avec une valeur de chaîne de caractères.</p>";
                }
                if (villeInput !== bonneReponseVille) {
                    resultat += "<p>Astuce pour <strong>ville</strong> : Utilisez <code>const</code> et vérifiez la syntaxe des guillemets autour de 'Paris'.</p>";
                }
                if (fruitsInput !== bonneReponseFruits) {
                    resultat += "<p>Astuce pour <strong>fruits</strong> : Utilisez un tableau (array) et placez les éléments entre crochets.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Utilisez <code>let</code> pour déclarer la variable <code>prenom</code> avec une chaîne de caractères.",
                "Indice 2 : La constante <code>ville</code> doit utiliser le mot-clé <code>const</code> et contenir 'Paris'.",
                "Indice 3 : Le tableau <code>fruits</code> doit contenir trois valeurs : 'Pomme', 'Banane', 'Orange'."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponse :<br>
                    <code>let prenom = 'John';</code><br>
                    <code>const ville = 'Paris';</code><br>
                    <code>const fruits = ['Pomme', 'Banane', 'Orange'];</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
