<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours Complet sur Python</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/css/cours.css">
</head>
<body>
<?php include 'templates/nav.php'; ?>

<div class="sidebar">
    <h3 style="padding-left: 15px; font-weight: bold;">Python</h3>
    <button class="dropdown-btn">Introduction</button>
    <div class="dropdown-container">
        <a href="#intro-python">Présentation</a>
        <a href="#installation">Installation</a>
    </div>

    <button class="dropdown-btn">Bases de Python</button>
    <div class="dropdown-container">
        <a href="#variables">Variables et Types de Données</a>
        <a href="#operations">Opérations de Base</a>
        <a href="#conditions">Structures Conditionnelles</a>
        <a href="#boucles">Boucles</a>
    </div>

    <button class="dropdown-btn">Structures de Données</button>
    <div class="dropdown-container">
        <a href="#lists">Listes</a>
        <a href="#tuples">Tuples</a>
        <a href="#dictionaries">Dictionnaires</a>
        <a href="#sets">Ensembles</a>
    </div>

    <button class="dropdown-btn">Fonctions</button>
    <div class="dropdown-container">
        <a href="#defining-functions">Définition des Fonctions</a>
        <a href="#lambda-functions">Fonctions Lambda</a>
    </div>

    <button class="dropdown-btn">Programmation Orientée Objet</button>
    <div class="dropdown-container">
        <a href="#classes">Classes et Objets</a>
        <a href="#inheritance">Héritage</a>
        <a href="#polymorphism">Polymorphisme</a>
    </div>

    <button class="dropdown-btn">Modules et Bibliothèques</button>
    <div class="dropdown-container">
        <a href="#importing-modules">Importer des Modules</a>
        <a href="#common-libraries">Bibliothèques Courantes</a>
    </div>

    <button class="dropdown-btn">Gestion des Exceptions</button>
    <div class="dropdown-container">
        <a href="#exceptions">Les Exceptions</a>
        <a href="#handling-exceptions">Gestion des Exceptions</a>
    </div>

    <button class="dropdown-btn">Fonctionnalités Avancées</button>
    <div class="dropdown-container">
        <a href="#list-comprehensions">List Comprehensions</a>
        <a href="#generators">Générateurs</a>
        <a href="#decorators">Décorateurs</a>
    </div>
</div>

<div class="content">
    <div class="container mt-5">
        <h1>Cours Complet sur Python</h1>
        <p>Python est un langage de programmation populaire, reconnu pour sa simplicité, sa lisibilité et sa polyvalence. Il est utilisé dans de nombreux domaines, notamment le développement web, les scripts, le calcul scientifique et l’intelligence artificielle.</p>

        <!-- Introduction à Python -->
        <section id="intro-python">
            <h2>Présentation de Python</h2>
            <p>Python est un langage interprété, orienté objet et de haut niveau. Créé par Guido van Rossum, il est connu pour sa syntaxe simple et intuitive.</p>
            <pre><code class="language-python"># Hello World en Python
print("Hello, World!")</code></pre>
        </section>

        <!-- Installation -->
        <section id="installation">
            <h2>Installation</h2>
            <p>Vous pouvez télécharger Python sur le site officiel : <a href="https://www.python.org/downloads/" target="_blank">python.org</a>. Une fois installé, ouvrez votre terminal ou ligne de commande et tapez :</p>
            <pre><code>python --version</code></pre>
            <p>Vous devriez voir la version de Python installée.</p>
        </section>

        <!-- Initiation aux variables -->
        <section id="variables">
    <h2>Variables et Types de Données</h2>
    <p>En Python, les variables sont utilisées pour stocker des informations ou des valeurs de différents types. Python propose plusieurs types de données natifs, dont les plus courants sont :</p>
    
    <ul>
        <li><strong>Entiers (int)</strong> : pour les nombres entiers (ex : <code>10</code>)</li>
        <li><strong>Flottants (float)</strong> : pour les nombres décimaux (ex : <code>3.14</code>)</li>
        <li><strong>Chaînes de caractères (str)</strong> : pour les textes (ex : <code>"Python"</code>)</li>
        <li><strong>Booléens (bool)</strong> : pour les valeurs vraies ou fausses (ex : <code>True</code> ou <code>False</code>)</li>
    </ul>
    
    <h2>Déclaration et Affectation de Variables</h2>
    <p>Déclarer une variable en Python est simple : il suffit d'utiliser un nom suivi d'un signe égal (<code>=</code>) et de la valeur souhaitée.</p>
    
    <pre><code class="language-python"># Exemples de variables
nombre = 10               # Variable entière
pi = 3.14                 # Variable flottante
nom = "Python"            # Variable chaîne de caractères
est_actif = True          # Variable booléenne</code></pre>
    
    <p>Vous pouvez également afficher le type de chaque variable avec la fonction <code>type()</code> :</p>
    
    <pre><code class="language-python"># Vérifier le type de chaque variable
print(type(nombre))       # <class 'int'>
print(type(pi))           # <class 'float'>
print(type(nom))          # <class 'str'>
print(type(est_actif))    # <class 'bool'></code></pre>
    
    <!-- Exemples supplémentaires -->
    <h2>Exemples Avancés : Manipulation des types de données</h2>
    <h3>Conversions de types</h3>
    <p>Python permet de convertir un type de données en un autre. Voici quelques exemples de conversions :</p>
    
    <pre><code class="language-python"># Conversion d'un entier en flottant
nombre = 10
flottant = float(nombre)      # Devient 10.0

# Conversion d'un flottant en entier
flottant = 3.14
entier = int(flottant)        # Devient 3

# Conversion d'un entier en chaîne de caractères
entier = 20
chaine = str(entier)          # Devient "20"

# Conversion d'une chaîne de caractères en entier
chaine = "100"
entier = int(chaine)          # Devient 100</code></pre>

    <h3>Chaînes de Caractères : Manipulations et Opérations</h3>
    <p>Les chaînes de caractères (ou textes) peuvent être manipulées de différentes façons en Python :</p>
    
    <pre><code class="language-python"># Exemple de manipulations de chaînes de caractères
message = "Bienvenue en Python!"
print(message.upper())          # Convertir en majuscules
print(message.lower())          # Convertir en minuscules
print(message.replace("Python", "la programmation"))  # Remplacer un mot</code></pre>

    <h3>Booléens et Opérations Logiques</h3>
    <p>Les booléens sont souvent utilisés pour contrôler des conditions logiques. Ils peuvent être combinés avec des opérateurs tels que <code>and</code>, <code>or</code>, et <code>not</code> :</p>
    
    <pre><code class="language-python"># Exemple d'opérations logiques
age = 20
est_majeur = age >= 18          # Retourne True

# Opérations logiques
est_etudiant = True
est_employe = False
resultat = est_etudiant or est_employe  # Retourne True car l'une des conditions est vraie</code></pre>
</section>

        <!-- Structure if-else -->
<div class="condition-block">
    <h2>1. Structure <code>if-else</code></h2>
    <p>
        La structure conditionnelle <code>if</code> permet d'exécuter un bloc de code uniquement si une condition est vraie.
        L'instruction <code>else</code> s'exécute dans le cas contraire.
    </p>
    <p><strong>Exemple :</strong> Vérifions si une personne est majeure ou mineure en fonction de son âge.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Exemple de structure if-else
age = 20
if age >= 18:
    print("Vous êtes majeur.")
else:
    print("Vous êtes mineur.")
        </code></pre>
    </div>
    <div class="example-output">
        <button onclick="checkAge(20)" class="btn btn-warning">Exécuter avec âge = 20</button>
        <button onclick="checkAge(16)" class="btn btn-secondary">Exécuter avec âge = 16</button>
        <p id="ifElseResult"></p>
    </div>
</div>

<!-- Structure if-elif-else -->
<div class="condition-block">
    <h2>2. Structure <code>if-elif-else</code></h2>
    <p>
        Utilisez <code>elif</code> pour vérifier plusieurs conditions successives. Chaque bloc est vérifié dans l'ordre.
        Cette structure est utile pour les décisions multi-options.
    </p>
    <p><strong>Exemple :</strong> Attribution d'une mention en fonction d'un score.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Exemple de structure if-elif-else
score = 85
if score >= 90:
    print("Mention Excellent")
elif score >= 70:
    print("Mention Bien")
elif score >= 50:
    print("Mention Passable")
else:
    print("Mention Insuffisant")
        </code></pre>
    </div>
    <div class="example-output">
        <button onclick="checkScore(95)" class="btn btn-warning">Exécuter avec score = 95</button>
        <button onclick="checkScore(75)" class="btn btn-info">Exécuter avec score = 75</button>
        <button onclick="checkScore(40)" class="btn btn-secondary">Exécuter avec score = 40</button>
        <p id="ifElifElseResult"></p>
    </div>
</div>

<!-- Conditions imbriquées -->
<div class="condition-block">
    <h2>3. Conditions Imbriquées</h2>
    <p>
        Les conditions imbriquées permettent de vérifier plusieurs critères dans différents niveaux de logique. Par exemple, on peut vérifier l'âge et le genre d'une personne pour afficher un message spécifique.
    </p>
    <p><strong>Exemple :</strong> Message spécifique en fonction de l'âge et du genre.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Exemple de conditions imbriquées
age = 20
genre = "Femme"
if age >= 18:
    if genre == "Femme":
        print("Vous êtes une femme majeure.")
    else:
        print("Vous êtes un homme majeur.")
else:
    print("Vous êtes mineur.")
        </code></pre>
    </div>
    <div class="example-output">
        <button onclick="checkNestedConditions(20, 'Femme')" class="btn btn-warning">Exécuter avec âge = 20, genre = Femme</button>
        <button onclick="checkNestedConditions(16, 'Homme')" class="btn btn-info">Exécuter avec âge = 16, genre = Homme</button>
        <button onclick="checkNestedConditions(20, 'Homme')" class="btn btn-secondary">Exécuter avec âge = 20, genre = Homme</button>
        <p id="nestedConditionsResult"></p>
    </div>
</div>

<script>
// JavaScript functions to simulate Python logic
function checkAge(age) {
    let result = (age >= 18) ? "Vous êtes majeur." : "Vous êtes mineur.";
    document.getElementById("ifElseResult").innerText = result;
}

function checkScore(score) {
    let result;
    if (score >= 90) {
        result = "Mention Excellent";
    } else if (score >= 70) {
        result = "Mention Bien";
    } else if (score >= 50) {
        result = "Mention Passable";
    } else {
        result = "Mention Insuffisant";
    }
    document.getElementById("ifElifElseResult").innerText = result;
}

function checkNestedConditions(age, genre) {
    let result;
    if (age >= 18) {
        result = (genre === "Femme") ? "Vous êtes une femme majeure." : "Vous êtes un homme majeur.";
    } else {
        result = "Vous êtes mineur.";
    }
    document.getElementById("nestedConditionsResult").innerText = result;
}
</script>


        <!-- Boucles -->
<section id="boucles">
    <h2>Boucles</h2>
    <p>
        En Python, les boucles permettent de répéter une série d'instructions. 
        <code>for</code> est souvent utilisé pour parcourir une séquence (comme une liste), tandis que <code>while</code> continue tant qu'une condition est vraie.
    </p>

    <!-- Boucle for -->
    <div class="loop-block">
        <h3>Boucle <code>for</code></h3>
        <p>La boucle <code>for</code> permet de parcourir des séquences, comme des listes, des chaînes, ou des intervalles de nombres.</p>
        <p><strong>Exemple :</strong> Affichons chaque nombre de 0 à 4 en utilisant <code>range</code>.</p>
        <div class="example-code">
            <pre><code class="language-python">
# Boucle for avec range
for i in range(5):
    print(i)
            </code></pre>
        </div>
        <div class="example-output">
            <button onclick="runForLoop()" class="btn btn-secondary">Exécuter la boucle for</button>
            <p id="forLoopResult"></p>
        </div>
    </div>

    <!-- Boucle while -->
    <div class="loop-block">
        <h3>Boucle <code>while</code></h3>
        <p>La boucle <code>while</code> continue tant qu'une condition est vraie. C'est utile pour des itérations où le nombre d'exécutions dépend d'une condition.</p>
        <p><strong>Exemple :</strong> Affichons les nombres de 0 à 4 en utilisant une boucle <code>while</code>.</p>
        <div class="example-code">
            <pre><code class="language-python">
# Boucle while
compteur = 0
while compteur < 5:
    print(compteur)
    compteur += 1
            </code></pre>
        </div>
        <div class="example-output">
            <button onclick="runWhileLoop()" class="btn btn-secondary">Exécuter la boucle while</button>
            <p id="whileLoopResult"></p>
        </div>
    </div>

    <!-- Boucle for avec liste -->
    <div class="loop-block">
        <h3>Boucle <code>for</code> avec une Liste</h3>
        <p>On peut utiliser une boucle <code>for</code> pour parcourir directement les éléments d'une liste.</p>
        <p><strong>Exemple :</strong> Affichons chaque fruit dans une liste.</p>
        <div class="example-code">
            <pre><code class="language-python">
# Boucle for avec une liste
fruits = ["Pomme", "Banane", "Cerise"]
for fruit in fruits:
    print(fruit)
            </code></pre>
        </div>
        <div class="example-output">
            <button onclick="runFruitLoop()" class="btn btn-secondary">Exécuter la boucle avec liste</button>
            <p id="fruitLoopResult"></p>
        </div>
    </div>

    <!-- Boucle avec break et continue -->
    <div class="loop-block">
        <h3>Utilisation de <code>break</code> et <code>continue</code></h3>
        <p><code>break</code> termine une boucle prématurément, tandis que <code>continue</code> passe directement à l'itération suivante.</p>
        <p><strong>Exemple :</strong> Utilisation de <code>break</code> pour interrompre la boucle quand le nombre est égal à 3.</p>
        <div class="example-code">
            <pre><code class="language-python">
# Boucle avec break
for i in range(5):
    if i == 3:
        break
    print(i)
            </code></pre>
        </div>
        <div class="example-output">
            <button onclick="runBreakLoop()" class="btn btn-secondary">Exécuter la boucle avec break</button>
            <p id="breakLoopResult"></p>
        </div>
    </div>
</section>

<script>
// JavaScript functions to simulate Python logic

function runForLoop() {
    let output = "";
    for (let i = 0; i < 5; i++) {
        output += i + " ";
    }
    document.getElementById("forLoopResult").innerText = output;
}

function runWhileLoop() {
    let output = "";
    let compteur = 0;
    while (compteur < 5) {
        output += compteur + " ";
        compteur += 1;
    }
    document.getElementById("whileLoopResult").innerText = output;
}

function runFruitLoop() {
    const fruits = ["Pomme", "Banane", "Cerise"];
    let output = "";
    for (let fruit of fruits) {
        output += fruit + " ";
    }
    document.getElementById("fruitLoopResult").innerText = output;
}

function runBreakLoop() {
    let output = "";
    for (let i = 0; i < 5; i++) {
        if (i === 3) {
            break;
        }
        output += i + " ";
    }
    document.getElementById("breakLoopResult").innerText = output;
}
</script>


        <!-- Listes -->
<section id="lists">
    <h2>Listes</h2>
    <p>Les listes sont des collections ordonnées et modifiables, qui permettent de stocker plusieurs éléments. Elles peuvent contenir des types de données variés et des éléments en double.</p>
    
    <!-- Création de listes -->
    <h3>Création et Manipulation de Listes</h3>
    <p>Vous pouvez créer une liste en plaçant des éléments entre crochets <code>[]</code> et en les séparant par des virgules.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Création d'une liste
fruits = ["pomme", "banane", "cerise"]
print(fruits)
        </code></pre>
    </div>

    <!-- Ajouter des éléments -->
    <h3>Ajout d'Éléments</h3>
    <p>Utilisez <code>append()</code> pour ajouter un élément à la fin de la liste ou <code>insert()</code> pour ajouter un élément à une position spécifique.</p>
    <div class="example-code">
        <pre><code class="language-python">
fruits.append("orange")     # Ajout à la fin
fruits.insert(1, "mangue")  # Ajout à la position 1
print(fruits)
        </code></pre>
    </div>

    <!-- Accéder aux éléments -->
    <h3>Accès aux Éléments</h3>
    <p>Les éléments de la liste sont accessibles en utilisant leur index, en commençant par 0 pour le premier élément.</p>
    <div class="example-code">
        <pre><code class="language-python">
premier_fruit = fruits[0]   # Accès au premier élément
dernier_fruit = fruits[-1]  # Accès au dernier élément
print(premier_fruit, dernier_fruit)
        </code></pre>
    </div>

    <!-- Modification d'éléments -->
    <h3>Modification d'Éléments</h3>
    <p>Vous pouvez modifier un élément en accédant à son index et en lui assignant une nouvelle valeur.</p>
    <div class="example-code">
        <pre><code class="language-python">
fruits[0] = "ananas"   # Remplace "pomme" par "ananas"
print(fruits)
        </code></pre>
    </div>

    <!-- Suppression d'éléments -->
    <h3>Suppression d'Éléments</h3>
    <p>Utilisez <code>remove()</code> pour supprimer un élément spécifique, <code>pop()</code> pour supprimer par index, ou <code>clear()</code> pour vider la liste.</p>
    <div class="example-code">
        <pre><code class="language-python">
fruits.remove("banane")  # Supprime "banane"
fruits.pop(2)            # Supprime l'élément à l'index 2
print(fruits)
        </code></pre>
    </div>

    <!-- Boucle dans une liste -->
    <h3>Parcourir une Liste</h3>
    <p>Utilisez une boucle <code>for</code> pour itérer sur les éléments d'une liste.</p>
    <div class="example-code">
        <pre><code class="language-python">
for fruit in fruits:
    print(fruit)
        </code></pre>
    </div>

    <!-- Listes imbriquées -->
    <h3>Listes Imbriquées</h3>
    <p>Les listes peuvent contenir d'autres listes, permettant de créer des structures multidimensionnelles.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Liste imbriquée
fruits_et_legumes = [["pomme", "banane"], ["carotte", "épinard"]]
print(fruits_et_legumes[0][1])  # Accès à "banane"
        </code></pre>
    </div>

    <!-- Fonctions utiles -->
    <h3>Fonctions Utiles pour les Listes</h3>
    <ul>
        <li><code>len()</code> : retourne le nombre d'éléments dans la liste.</li>
        <li><code>sort()</code> : trie la liste en place.</li>
        <li><code>reverse()</code> : inverse l'ordre des éléments de la liste.</li>
    </ul>
    <div class="example-code">
        <pre><code class="language-python">
print(len(fruits))     # Longueur de la liste
fruits.sort()          # Trie la liste
fruits.reverse()       # Inverse la liste
print(fruits)
        </code></pre>
    </div>
</section>


        <!-- Fonctions Lambda -->
<section id="lambda-functions">
    <h2>Fonctions Lambda</h2>
    <p>Les fonctions <strong>lambda</strong> sont des fonctions anonymes en Python, souvent utilisées pour des calculs simples, des opérations rapides, et en association avec d'autres fonctions comme <code>map</code>, <code>filter</code>, et <code>sorted</code>.</p>

    <!-- Déclaration de base -->
    <h3>Déclaration de Fonction Lambda</h3>
    <p>La syntaxe d’une fonction lambda consiste en le mot-clé <code>lambda</code> suivi des paramètres, du symbole <code>:</code>, et de l'expression à évaluer.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Fonction lambda de base pour calculer le carré
carre = lambda x: x ** 2
print(carre(5))  # Affiche 25
        </code></pre>
    </div>

    <!-- Utilisation avec plusieurs arguments -->
    <h3>Fonction Lambda avec Plusieurs Arguments</h3>
    <p>Les fonctions lambda peuvent accepter plusieurs arguments.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Lambda avec deux arguments
addition = lambda x, y: x + y
print(addition(10, 5))  # Affiche 15
        </code></pre>
    </div>

    <!-- Utilisation dans des fonctions intégrées -->
    <h3>Utilisation avec <code>map()</code>, <code>filter()</code>, et <code>sorted()</code></h3>
    <p>Les fonctions lambda sont souvent utilisées avec des fonctions intégrées pour manipuler des collections de données.</p>

    <h4><code>map()</code> avec Lambda</h4>
    <p>Applique la fonction à chaque élément d’une liste.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Doubler chaque nombre dans la liste
nombres = [1, 2, 3, 4]
resultat = list(map(lambda x: x * 2, nombres))
print(resultat)  # Affiche [2, 4, 6, 8]
        </code></pre>
    </div>

    <h4><code>filter()</code> avec Lambda</h4>
    <p>Filtre les éléments d'une liste selon une condition.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Garder les nombres pairs
nombres = [1, 2, 3, 4, 5, 6]
pairs = list(filter(lambda x: x % 2 == 0, nombres))
print(pairs)  # Affiche [2, 4, 6]
        </code></pre>
    </div>

    <h4><code>sorted()</code> avec Lambda</h4>
    <p>Tri des éléments selon une clé définie par lambda.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Trier une liste de tuples par le deuxième élément
eleves = [("Alice", 15), ("Bob", 12), ("Charlie", 17)]
eleves_triees = sorted(eleves, key=lambda x: x[1])
print(eleves_triees)  # Affiche [('Bob', 12), ('Alice', 15), ('Charlie', 17)]
        </code></pre>
    </div>

    <!-- Fonctions imbriquées Lambda -->
    <h3>Fonctions Lambda Imbriquées</h3>
    <p>Les lambdas peuvent aussi être utilisées comme éléments de retour de fonctions pour des calculs dynamiques.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Fonction retournant une lambda
def create_multiplier(n):
    return lambda x: x * n

doubler = create_multiplier(2)
tripler = create_multiplier(3)

print(doubler(5))  # Affiche 10
print(tripler(5))  # Affiche 15
        </code></pre>
    </div>
</section>


        <!-- Classes et Objets -->
<section id="classes">
    <h2>Classes et Objets</h2>
    <p>Python est un langage orienté objet, et les classes permettent de structurer le code en utilisant des objets, qui sont des instances de classes. Cela permet de mieux organiser les données et les fonctionnalités associées.</p>

    <!-- Définition de Base d'une Classe -->
    <h3>Définition de Base d'une Classe</h3>
    <p>Une <strong>classe</strong> est un modèle définissant des propriétés (attributs) et des comportements (méthodes) pour ses objets.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Définition de la classe Animal
class Animal:
    def __init__(self, nom):  # Constructeur de la classe
        self.nom = nom  # Attribut

    def parler(self):  # Méthode
        print(f"{self.nom} fait du bruit.")

# Création d'une instance de la classe
chien = Animal("Chien")
chien.parler()  # Affiche "Chien fait du bruit."
        </code></pre>
    </div>

    <!-- Attributs et Méthodes -->
    <h3>Attributs et Méthodes</h3>
    <p>Les attributs sont des variables associées à une classe, tandis que les méthodes sont des fonctions définies dans la classe pour agir sur les objets.</p>
    <div class="example-code">
        <pre><code class="language-python">
class Voiture:
    def __init__(self, marque, annee):
        self.marque = marque
        self.annee = annee

    def demarrer(self):
        print(f"La {self.marque} démarre.")

    def description(self):
        print(f"Voiture : {self.marque}, Année : {self.annee}")

# Création d'un objet Voiture
ma_voiture = Voiture("Toyota", 2022)
ma_voiture.demarrer()  # Affiche "La Toyota démarre."
ma_voiture.description()  # Affiche "Voiture : Toyota, Année : 2022"
        </code></pre>
    </div>

    <!-- Héritage -->
    <h3>Héritage</h3>
    <p>L’héritage permet de créer une nouvelle classe basée sur une classe existante, permettant la réutilisation du code.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Classe de base
class Animal:
    def __init__(self, nom):
        self.nom = nom

    def parler(self):
        print(f"{self.nom} fait un bruit.")

# Classe dérivée
class Chien(Animal):
    def parler(self):
        print(f"{self.nom} aboie.")

# Création d'une instance de Chien
rex = Chien("Rex")
rex.parler()  # Affiche "Rex aboie."
        </code></pre>
    </div>

    <!-- Encapsulation -->
    <h3>Encapsulation</h3>
    <p>L'encapsulation est le processus de protection des données en rendant certains attributs privés. En Python, cela se fait en ajoutant un underscore (<code>_</code>) ou un double underscore (<code>__</code>) avant le nom de l'attribut.</p>
    <div class="example-code">
        <pre><code class="language-python">
class CompteBancaire:
    def __init__(self, solde):
        self.__solde = solde  # Attribut privé

    def deposer(self, montant):
        self.__solde += montant
        print(f"Dépôt de {montant}. Solde actuel : {self.__solde}")

    def retirer(self, montant):
        if montant <= self.__solde:
            self.__solde -= montant
            print(f"Retrait de {montant}. Solde actuel : {self.__solde}")
        else:
            print("Fonds insuffisants.")

compte = CompteBancaire(1000)
compte.deposer(500)  # Affiche "Dépôt de 500. Solde actuel : 1500"
compte.retirer(200)  # Affiche "Retrait de 200. Solde actuel : 1300"
        </code></pre>
    </div>

    <!-- Polymorphisme -->
    <h3>Polymorphisme</h3>
    <p>Le polymorphisme permet d’utiliser une même méthode pour différents objets, offrant de la flexibilité dans le code.</p>
    <div class="example-code">
        <pre><code class="language-python">
class Chat:
    def parler(self):
        print("Miaou")

class Chien:
    def parler(self):
        print("Aboiement")

# Fonction qui accepte n'importe quel animal
def faire_parler(animal):
    animal.parler()

# Utilisation du polymorphisme
chat = Chat()
chien = Chien()

faire_parler(chat)  # Affiche "Miaou"
faire_parler(chien)  # Affiche "Aboiement"
        </code></pre>
    </div>
</section>

<!-- Gestion des Exceptions -->
<section id="exceptions">
    <h2>Les Exceptions</h2>
    <p>Les exceptions sont des erreurs qui surviennent pendant l'exécution du programme et interrompent son déroulement normal. La gestion des exceptions permet de capturer ces erreurs pour les traiter et éviter que le programme ne s'arrête brutalement.</p>

    <!-- Exemple de base -->
    <h3>Gestion de base des exceptions avec <code>try</code> et <code>except</code></h3>
    <p>Utilisez <code>try</code> et <code>except</code> pour intercepter les erreurs et exécuter un code alternatif.</p>
    <div class="example-code">
        <pre><code class="language-python">
# Exemple basique de gestion d'une exception
try:
    resultat = 10 / 0
except ZeroDivisionError:
    print("Erreur : Division par zéro impossible")
        </code></pre>
    </div>

    <!-- Multiples exceptions -->
    <h3>Gérer plusieurs types d'exceptions</h3>
    <p>Vous pouvez capturer plusieurs types d'exceptions en utilisant plusieurs blocs <code>except</code>. Par exemple :</p>
    <div class="example-code">
        <pre><code class="language-python">
try:
    valeur = int(input("Entrez un nombre : "))
    resultat = 10 / valeur
except ValueError:
    print("Erreur : Vous devez entrer un nombre valide.")
except ZeroDivisionError:
    print("Erreur : Division par zéro impossible.")
        </code></pre>
    </div>

    <!-- Blocs else et finally -->
    <h3>Utilisation de <code>else</code> et <code>finally</code></h3>
    <p>Le bloc <code>else</code> est exécuté si aucune exception n'est levée, tandis que le bloc <code>finally</code> est toujours exécuté, que l'exception ait été levée ou non. Cela est utile pour les tâches de nettoyage.</p>
    <div class="example-code">
        <pre><code class="language-python">
try:
    nombre = int(input("Entrez un nombre : "))
    resultat = 100 / nombre
except ValueError:
    print("Erreur : Entrez un nombre valide.")
except ZeroDivisionError:
    print("Erreur : Division par zéro impossible.")
else:
    print(f"Résultat : {resultat}")
finally:
    print("Opération terminée.")
        </code></pre>
    </div>

    <!-- Lever une exception avec raise -->
    <h3>Lever des exceptions personnalisées avec <code>raise</code></h3>
    <p>Il est possible de lever une exception manuellement en utilisant <code>raise</code>, notamment pour valider les données ou conditions spécifiques.</p>
    <div class="example-code">
        <pre><code class="language-python">
def verifier_age(age):
    if age < 18:
        raise ValueError("L'âge doit être supérieur ou égal à 18.")
    return "Âge accepté."

try:
    age = int(input("Entrez votre âge : "))
    print(verifier_age(age))
except ValueError as e:
    print(f"Erreur : {e}")
        </code></pre>
    </div>

    <!-- Exceptions personnalisées -->
    <h3>Créer des exceptions personnalisées</h3>
    <p>Vous pouvez définir vos propres classes d'exceptions pour gérer des erreurs spécifiques de manière plus structurée. Par exemple :</p>
    <div class="example-code">
        <pre><code class="language-python">
# Définition d'une exception personnalisée
class SoldeInsuffisantError(Exception):
    pass

def retirer_argent(solde, montant):
    if montant > solde:
        raise SoldeInsuffisantError("Le solde est insuffisant pour effectuer cette opération.")
    return solde - montant

try:
    solde = 100
    montant = int(input("Montant à retirer : "))
    nouveau_solde = retirer_argent(solde, montant)
    print(f"Retrait effectué, nouveau solde : {nouveau_solde}")
except SoldeInsuffisantError as e:
    print(f"Erreur : {e}")
        </code></pre>
    </div>
</section>


       <!-- Décorateurs -->
<section id="decorators">
    <h2>Décorateurs</h2>
    <p>Les décorateurs sont des fonctions qui modifient ou enrichissent le comportement d’autres fonctions sans en changer le code. Ils sont souvent utilisés pour ajouter des fonctionnalités comme la journalisation, la vérification d’accès, ou la gestion du temps d’exécution d’une fonction.</p>

    <!-- Exemple de base -->
    <h3>Exemple de Décorateur Basique</h3>
    <p>Dans cet exemple, un décorateur affiche un message avant et après l’exécution de la fonction décorée :</p>
    <div class="example-code">
        <pre><code class="language-python">
# Définition d'un décorateur de base
def decorateur_simple(fonction):
    def wrapper():
        print("Avant la fonction")
        fonction()
        print("Après la fonction")
    return wrapper

# Application du décorateur avec @
@decorateur_simple
def dire_bonjour():
    print("Bonjour!")

# Appel de la fonction
dire_bonjour()
        </code></pre>
    </div>

    <!-- Exemple avec arguments -->
    <h3>Décorateur avec Arguments</h3>
    <p>Les décorateurs peuvent aussi accepter des fonctions ayant des paramètres en ajoutant <code>*args</code> et <code>**kwargs</code> dans la fonction wrapper :</p>
    <div class="example-code">
        <pre><code class="language-python">
# Décorateur qui accepte des arguments de la fonction décorée
def decorateur_args(fonction):
    def wrapper(*args, **kwargs):
        print("Arguments:", args, kwargs)
        return fonction(*args, **kwargs)
    return wrapper

@decorateur_args
def addition(a, b):
    return a + b

# Appel de la fonction avec des arguments
print("Résultat:", addition(3, 5))
        </code></pre>
    </div>

    <!-- Exemple de décorateur pratique : journalisation -->
    <h3>Utilisation Pratique : Journalisation</h3>
    <p>Un décorateur peut être utile pour ajouter de la journalisation (log) à une fonction sans modifier son code :</p>
    <div class="example-code">
        <pre><code class="language-python">
import time

# Décorateur de journalisation
def journalisation(fonction):
    def wrapper(*args, **kwargs):
        print(f"Appel de la fonction '{fonction.__name__}' avec {args} et {kwargs}")
        result = fonction(*args, **kwargs)
        print(f"Résultat: {result}")
        return result
    return wrapper

@journalisation
def multiplier(x, y):
    return x * y

# Appel de la fonction
multiplier(4, 6)
        </code></pre>
    </div>

    <!-- Exemple avancé : Mesure du temps d'exécution -->
    <h3>Exemple Avancé : Mesure du Temps d'Exécution</h3>
    <p>Les décorateurs sont souvent utilisés pour mesurer le temps d'exécution d'une fonction, pratique dans les cas où l’optimisation de la performance est importante :</p>
    <div class="example-code">
        <pre><code class="language-python">
# Décorateur pour mesurer le temps d'exécution
def temps_execution(fonction):
    def wrapper(*args, **kwargs):
        debut = time.time()
        result = fonction(*args, **kwargs)
        fin = time.time()
        print(f"Temps d'exécution de {fonction.__name__}: {fin - debut} secondes")
        return result
    return wrapper

@temps_execution
def somme_lente(n):
    total = 0
    for i in range(n):
        total += i
    return total

# Appel de la fonction avec mesure du temps
somme_lente(1000000)
        </code></pre>
    </div>

    <!-- Explication supplémentaire -->
    <p><strong>Remarque :</strong> Les décorateurs sont un puissant outil pour ajouter des fonctionnalités transversales (comme la journalisation, la vérification de permissions ou la gestion des exceptions) sans altérer le code d'origine des fonctions. Cela améliore la lisibilité et la réutilisabilité du code.</p>
</section>


    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>
