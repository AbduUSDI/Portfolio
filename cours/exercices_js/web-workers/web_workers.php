<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice : Web Workers</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/exercice.css"/>
</head>
<body>

<div class="container mt-5">
    <?php include '../../templates/retour.php'; ?>
    <h1 class="text-center mb-5">Exercice : Web Workers</h1>

    <!-- Section pour Démarrer le Worker -->
    <button class="btn btn-primary mb-3" onclick="startWorker()">Démarrer le Worker</button>
    <div id="resultat-worker" class="mt-3"></div>

    <!-- Section Questions -->
    <section id="questions" class="mt-5">
        <h2>Questions</h2>

        <!-- Question 1 -->
        <div class="mb-3">
            <label for="q1" class="form-label">Question 1 : À quoi servent les Web Workers en JavaScript ?</label>
            <input type="text" id="q1" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q1', 'Exécuter des tâches en arrière-plan')">Vérifier la réponse</button>
            <div id="q1-result" class="mt-2"></div>
        </div>

        <!-- Question 2 -->
        <div class="mb-3">
            <label for="q2" class="form-label">Question 2 : Quelle méthode est utilisée pour envoyer un message au Worker ?</label>
            <input type="text" id="q2" class="form-control" placeholder="Entrez votre réponse ici">
            <button class="btn btn-primary mt-2" onclick="verifierReponse('q2', 'postMessage')">Vérifier la réponse</button>
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
// Fonction pour démarrer le Worker
function startWorker() {
    if (window.Worker) {
        const worker = new Worker('worker.js');
        worker.postMessage(5000000); // Calcul de somme jusqu’à 5 millions

        worker.onmessage = function(event) {
            document.getElementById("resultat-worker").innerHTML = "Résultat : " + event.data;
        };

        worker.onerror = function(error) {
            document.getElementById("resultat-worker").innerHTML = "Erreur : " + error.message;
        };
    } else {
        document.getElementById("resultat-worker").innerHTML = "Les Web Workers ne sont pas pris en charge dans ce navigateur.";
    }
}
</script>
</body>
</html>
