// script.js : Exemples de Syntaxe ES6+

function executerExemples() {
    // Exemple let et const
    let variableModifiable = 42;
    const constanteImmuable = "ES6";
    console.log(variableModifiable, constanteImmuable);

    // Fonction fléchée
    const somme = (a, b) => a + b;
    console.log("Somme avec fonction fléchée :", somme(5, 10));

    // Déstructuration d'objet
    const utilisateur = { nom: "Alice", age: 25 };
    const { nom, age } = utilisateur;
    console.log("Déstructuration :", nom, age);

    // Classe ES6+
    class Personne {
        constructor(nom) {
            this.nom = nom;
        }
        
        direBonjour() {
            return `Bonjour, ${this.nom}!`;
        }
    }
    const personne = new Personne("Bob");
    console.log(personne.direBonjour());

    // Promesse pour le code asynchrone
    const promesse = new Promise((resolve) => {
        setTimeout(() => resolve("Résolu !"), 1000);
    });
    promesse.then(result => console.log("Promesse :", result));

    document.getElementById("exemples-result").innerHTML = `<div class="alert alert-info">Consultez la console pour voir les résultats des exemples ES6+.</div>`;
}
