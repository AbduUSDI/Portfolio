<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Classes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/exercice.css"/>
</head>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Exercice 9 : Classes en JavaScript</h1>
        <?php include '../templates/retour.php'; ?>
        <section id="classes">
            <p>Écrivez des exemples JavaScript en utilisant les classes. Entrez vos réponses pour chaque section ci-dessous :</p>

            <!-- Formulaire pour entrer les exemples de Classes -->
            <div class="mb-3">
                <label for="classDeclarationInput" class="form-label">Déclarez une classe `Personne` avec un constructeur prenant `nom` et `age` :</label>
                <input type="text" id="classDeclarationInput" class="form-control" placeholder="Exemple : class Personne { constructor(nom, age) { ... } }">
            </div>

            <div class="mb-3">
                <label for="classMethodInput" class="form-label">Ajoutez une méthode `sePresenter()` qui retourne 'Bonjour, je m'appelle [nom]' :</label>
                <input type="text" id="classMethodInput" class="form-control" placeholder="Exemple : sePresenter() { return 'Bonjour, je m'appelle ' + this.nom; }">
            </div>

            <div class="mb-3">
                <label for="privatePropertyInput" class="form-label">Ajoutez une propriété privée `#identifiant` initialisée avec un numéro unique :</label>
                <input type="text" id="privatePropertyInput" class="form-control" placeholder="Exemple : #identifiant = 123;">
            </div>

            <div class="mb-3">
                <label for="classInheritanceInput" class="form-label">Créez une classe `Etudiant` qui hérite de `Personne` et ajoute une propriété `etude` :</label>
                <input type="text" id="classInheritanceInput" class="form-control" placeholder="Exemple : class Etudiant extends Personne { constructor(nom, age, etude) { ... } }">
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
            const classDeclarationInput = document.getElementById("classDeclarationInput").value.trim();
            const classMethodInput = document.getElementById("classMethodInput").value.trim();
            const privatePropertyInput = document.getElementById("privatePropertyInput").value.trim();
            const classInheritanceInput = document.getElementById("classInheritanceInput").value.trim();

            // Réponses attendues
            const bonneReponseClassDeclaration = "class Personne { constructor(nom, age) { this.nom = nom; this.age = age; } }";
            const bonneReponseClassMethod = "sePresenter() { return 'Bonjour, je m appelle ' + this.nom; }";
            const bonneReponsePrivateProperty = "#identifiant = 123;";
            const bonneReponseClassInheritance = "class Etudiant extends Personne { constructor(nom, age, etude) { super(nom, age); this.etude = etude; } }";

            let resultat = "";

            if (classDeclarationInput === bonneReponseClassDeclaration && classMethodInput === bonneReponseClassMethod &&
                privatePropertyInput === bonneReponsePrivateProperty && classInheritanceInput === bonneReponseClassInheritance) {
                resultat = "<div class='alert alert-success'>Bravo ! Toutes les réponses sont correctes.</div>";
            } else {
                resultat = "<div class='alert alert-danger'>Les réponses sont incorrectes. Vérifiez vos réponses.</div>";
                if (classDeclarationInput !== bonneReponseClassDeclaration) {
                    resultat += "<p>Astuce pour la déclaration de la classe : Utilisez `class Nom { constructor(...) { ... } }`.</p>";
                }
                if (classMethodInput !== bonneReponseClassMethod) {
                    resultat += "<p>Astuce pour la méthode : Utilisez `nomMethod() { ... }` pour définir des méthodes dans une classe.</p>";
                }
                if (privatePropertyInput !== bonneReponsePrivateProperty) {
                    resultat += "<p>Astuce pour la propriété privée : Utilisez `#nomPropriete` pour une propriété privée.</p>";
                }
                if (classInheritanceInput !== bonneReponseClassInheritance) {
                    resultat += "<p>Astuce pour l'héritage : Utilisez `extends` pour hériter d'une classe parent.</p>";
                }
            }
            document.getElementById("resultat-exercice").innerHTML = resultat;
        }

        function afficherIndice(niveau) {
            const indices = [
                "Indice 1 : Une classe se déclare avec `class Nom { ... }`.",
                "Indice 2 : Les propriétés privées utilisent le symbole `#` au début du nom de la propriété.",
                "Indice 3 : L'héritage utilise `extends` et appelle `super()` pour le constructeur parent."
            ];
            document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
        }

        function afficherReponse() {
            const reponse = `
                <div class='alert alert-warning'>
                    Réponses :<br>
                    Déclarer une classe Personne : <code>class Personne { constructor(nom, age) { this.nom = nom; this.age = age; } }</code><br>
                    Méthode sePresenter : <code>sePresenter() { return 'Bonjour, je m appelle ' + this.nom; }</code><br>
                    Propriété privée identifiant : <code>#identifiant = 123;</code><br>
                    Classe Etudiant héritant de Personne : <code>class Etudiant extends Personne { constructor(nom, age, etude) { super(nom, age); this.etude = etude; } }</code>
                </div>`;
            document.getElementById("reponse").innerHTML = reponse;
        }
    </script>
</body>
</html>
