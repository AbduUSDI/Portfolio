<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Gestion des Erreurs & Debugging</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Gestion des Erreurs & Debugging</h1>

    <!-- Section pour tester try...catch -->
    <button class="btn btn-primary mb-3" onclick="executerCode()">Exécuter le code</button>
    <div id="resultat-execution" class="mt-3"></div>

    <!-- Section Questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>

        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : Quelle est l'utilité du bloc try...catch ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'capturer et gérer les erreurs')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelle méthode de console permet de signaler une erreur ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez la réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'console.error')">Vérifier la réponse</button>
            <div id="q2-result" class="mt-2"></div>
        </div>

        <!-- Boutons d'indices -->
        <div class="mt-4">
            <button class="btn btn-secondary me-2" onclick="afficherIndice(1)">Indice 1</button>
            <button class="btn btn-secondary" onclick="afficherIndice(2)">Indice 2</button>
            <div id="indice" class="mt-3"></div>
        </div>

        <!-- Bouton pour Afficher les Réponses -->
        <div class="mt-4">
            <button class="btn btn-warning" onclick="afficherReponses()">Afficher les réponses</button>
            <div id="reponses" class="mt-3"></div>
        </div>
    </section>
</div>

<script src="./verification.js"></script>
<script>
// Fonction pour exécuter du code avec try...catch
function executerCode() {
    try {
        let resultat = 10 / 0;
        if (!isFinite(resultat)) throw new Error("Division par zéro détectée");
        document.getElementById("resultat-execution").innerHTML = "Résultat : " + resultat;
    } catch (erreur) {
        console.error("Erreur détectée :", erreur.message);
        document.getElementById("resultat-execution").innerHTML = `<div class="alert alert-danger">Erreur : ${erreur.message}</div>`;
    } finally {
        console.log("Fin de l'exécution.");
    }
}
</script>
</body>
</html>
