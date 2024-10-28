<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test-Driven Development (TDD) - Cours Complet</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Animate.css pour les animations -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="assets/css/cours.css"/>
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Test-Driven Development (TDD)</h3>
    <button class="dropdown-btn">Introduction à TDD</button>
    <div class="dropdown-container">
        <a href="#what-is-tdd">Définition et Concepts Clés</a>
    </div>
    <button class="dropdown-btn">Les Étapes de TDD</button>
    <div class="dropdown-container">
        <a href="#tdd-steps">Red, Green, Refactor</a>
    </div>
    <button class="dropdown-btn">Avantages et Inconvénients</button>
    <div class="dropdown-container">
        <a href="#pros-cons">Bénéfices et Limites</a>
    </div>
    <button class="dropdown-btn">Exemple de TDD</button>
    <div class="dropdown-container">
        <a href="#tdd-example">Exemple Pratique en Pseudocode</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Test-Driven Development (TDD)</h1>
        <p>Le Test-Driven Development (TDD) est une méthodologie de développement qui consiste à écrire les tests avant même le code, permettant ainsi d'assurer la fonctionnalité correcte et la maintenabilité du logiciel.</p>

        <!-- Qu'est-ce que TDD ? -->
        <section id="what-is-tdd">
            <h2>Qu'est-ce que le Test-Driven Development (TDD) ?</h2>
            <p><strong>Définition :</strong> TDD est une approche dans laquelle les développeurs créent des tests pour définir le comportement attendu avant de coder la fonctionnalité elle-même.</p>
            <p><strong>Concepts Clés :</strong> TDD repose sur des itérations rapides et répétitives d'écriture de tests, de code et de refactorisation, permettant de corriger les bugs plus rapidement et d'améliorer la conception du code.</p>
        </section>

        <!-- Les Étapes de TDD -->
        <section id="tdd-steps">
            <h2>Les Étapes de TDD : Red, Green, Refactor</h2>
            <ol>
                <li><strong>Red :</strong> Écrire un test pour une nouvelle fonctionnalité. Ce test doit échouer car la fonctionnalité n'est pas encore codée.</li>
                <li><strong>Green :</strong> Coder juste assez pour faire passer le test au vert, c'est-à-dire pour que le test réussisse.</li>
                <li><strong>Refactor :</strong> Améliorer et optimiser le code sans changer son comportement. Cela peut inclure le nettoyage du code, la suppression des redondances, ou l'optimisation des performances.</li>
            </ol>
            <p>Cette boucle continue garantit un développement structuré et une réduction des erreurs au fil de l'avancement du projet.</p>
        </section>

        <!-- Avantages et Inconvénients de TDD -->
        <section id="pros-cons">
            <h2>Avantages et Inconvénients du TDD</h2>
            <ul>
                <li><strong>Avantages :</strong>
                    <ul>
                        <li>Améliore la qualité du code grâce aux tests constants.</li>
                        <li>Facilite le refactoring car le comportement attendu est toujours testé.</li>
                        <li>Réduit les bugs en cours de développement.</li>
                        <li>Encourage une conception modulaire et simplifiée.</li>
                    </ul>
                </li>
                <li><strong>Inconvénients :</strong>
                    <ul>
                        <li>Peut ralentir le début du développement car l'écriture des tests prend du temps.</li>
                        <li>Nécessite des compétences en rédaction de tests et une discipline constante.</li>
                        <li>Peut sembler difficile dans les projets avec des exigences changeantes.</li>
                    </ul>
                </li>
            </ul>
        </section>

        <!-- Exemple Pratique de TDD -->
        <section id="tdd-example">
            <h2>Exemple Pratique de TDD</h2>
            <p>Dans cet exemple, nous allons illustrer TDD en utilisant le pseudocode pour une fonction simple, <code>addition(a, b)</code>, qui doit additionner deux nombres.</p>
            <pre>
<strong>1. Red :</strong> Écrire un test pour vérifier que la fonction retourne la somme correcte.
Test : addition(2, 3) retourne 5.

<strong>2. Green :</strong> Implémenter la fonction pour que le test passe.
function addition(a, b) {
    return a + b;
}

<strong>3. Refactor :</strong> Nettoyer ou optimiser la fonction si nécessaire (ici, aucun changement n'est nécessaire).
</pre>
            <p>Ce processus garantit que la fonction <code>addition</code> fait exactement ce qu'elle est censée faire, et les tests continueront à la vérifier si des modifications sont faites ultérieurement.</p>
        </section>

        <!-- Exemple de Projet TDD -->
        <div class="modal fade" id="tddExampleModal" tabindex="-1" role="dialog" aria-labelledby="tddExampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tddExampleModalLabel">Exemple de Projet TDD</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <pre>Dans le développement d'un calculateur, chaque opération (addition, soustraction, etc.) serait testée et implémentée une par une en suivant les étapes de TDD, assurant la précision et la maintenabilité du code.</pre>
                    </div>
                </div>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tddExampleModal">
            Voir Exemple de Projet TDD
        </button>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
