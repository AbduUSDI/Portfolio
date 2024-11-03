<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Opérateurs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 3 : Opérateurs</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="operateurs">
            <p>Écrivez une expression JavaScript utilisant chaque type d'opérateur ci-dessous et entrez vos réponses :</p>

            <!-- Formulaire pour entrer les expressions d'opérateurs -->
            <div class="mb-3">
                <label for="additionInput" class="form-label">Opérateur mathématique (+) :</label>
                <input type="text" id="additionInput" class="form-control" placeholder="Exemple : 5 + 3">
            </div>

            <div class="mb-3">
                <label for="comparaisonInput" class="form-label">Opérateur de comparaison (>) :</label>
                <input type="text" id="comparaisonInput" class="form-control" placeholder="Exemple : 5 > 3">
            </div>

            <div class="mb-3">
                <label for="logiqueInput" class="form-label">Opérateur logique (&&) :</label>
                <input type="text" id="logiqueInput" class="form-control" placeholder="Exemple : (5 > 3) && (3 > 1)">
            </div>

            <div class="mb-3">
                <label for="affectationInput" class="form-label">Opérateur d'affectation (=) :</label>
                <input type="text" id="affectationInput" class="form-control" placeholder="Exemple : let x = 5">
            </div>

            <div class="mb-3">
                <label for="ternaireInput" class="form-label">Opérateur conditionnel (?:) :</label>
                <input type="text" id="ternaireInput" class="form-control" placeholder="Exemple : 5 > 3 ? 'Oui' : 'Non'">
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
            const additionInput = document.getElementById("additionInput").value.trim();
            const comparaisonInput = document.getElementById("comparaisonInput").value.trim();
            const logiqueInput = document.getElementById("logiqueInput").value.trim();
            const affectationInput = document.getElementById("affectationInput").value.trim();
            const ternaireInput = document.getElementById("ternaireInput").value.trim();

            // Conditions de vérification des réponses
            const bonneReponseAddition = "5 + 3";
            const bonneReponseComparaison = "5 > 3";
            const bonneReponseLogique = "(5 > 3) && (3 > 1)";
            const bonneReponseAffectation = "let x = 5";
            const bonneReponseTernaire = "5 > 3 ? 'Oui' : 'Non'";

            let resultat = "";

            if (additionInput === bonneReponseAddition && comparaisonInput === bonneReponseComparaison &&
                logiqueInput === bonneReponseLogique && affectationInput === bonneReponseAffectation &&
                ternaireInput === bonneReponseTernaire) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (additionInput !== bonneReponseAddition) {
                    resultat += "<p>Astuce pour l'opérateur mathématique : Utilisez un nombre de chaque côté de +.</p>";
                }
                if (comparaisonInput !== bonneReponseComparaison) {
                    resultat += "<p>Astuce pour l'opérateur de comparaison : Utilisez > pour comparer deux nombres.</p>";
                }
                if (logiqueInput !== bonneReponseLogique) {
                    resultat += "<p>Astuce pour l'opérateur logique : Combinez deux expressions avec &&.</p>";
                }
                if (affectationInput !== bonneReponseAffectation) {
                    resultat += "<p>Astuce pour l'opérateur d'affectation : Utilisez let pour assigner une valeur.</p>";
                }
                if (ternaireInput !== bonneReponseTernaire) {
                    resultat += "<p>Astuce pour l'opérateur conditionnel : Utilisez ?: pour créer une condition simple.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : L'addition utilise le signe + entre deux nombres.",
                "Indice 2 : Utilisez > pour vérifier si un nombre est supérieur à un autre.",
                "Indice 3 : Utilisez ? : pour une condition ternaire avec 'Oui' ou 'Non' en résultat."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponse :<br>
                    Opérateur mathématique : <code>5 + 3</code><br>
                    Opérateur de comparaison : <code>5 > 3</code><br>
                    Opérateur logique : <code>(5 > 3) && (3 > 1)</code><br>
                    Opérateur d'affectation : <code>let x = 5</code><br>
                    Opérateur conditionnel : <code>5 > 3 ? 'Oui' : 'Non'</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
