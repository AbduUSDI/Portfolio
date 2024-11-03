// script.js

// Classe Produit
class Produit {
    constructor(nom, prix) {
        this.nom = nom;
        this.prix = prix;
    }

    // Méthode pour afficher les informations du produit
    afficher() {
        return `${this.nom} - ${this.prix.toFixed(2)} €`;
    }
}

// Classe Inventaire pour gérer la liste des produits
class Inventaire {
    constructor() {
        this.produits = JSON.parse(localStorage.getItem("inventaireProduits")) || [];
    }

    // Méthode pour ajouter un produit à l'inventaire
    ajouterProduit(produit) {
        this.produits.push(produit);
        this.sauvegarder();
    }

    // Méthode pour supprimer un produit de l'inventaire
    supprimerProduit(index) {
        this.produits.splice(index, 1);
        this.sauvegarder();
    }

    // Méthode pour sauvegarder l'inventaire dans localStorage
    sauvegarder() {
        localStorage.setItem("inventaireProduits", JSON.stringify(this.produits));
    }

    // Méthode pour afficher tous les produits
    afficherProduits() {
        return this.produits.map((produit, index) => ({ ...produit, index }));
    }

    // Méthode pour effacer tous les produits
    effacerProduits() {
        this.produits = [];
        localStorage.removeItem("inventaireProduits");
    }
}

// Instancie un nouvel inventaire
const inventaire = new Inventaire();

// Fonction pour ajouter un produit
function ajouterProduit() {
    const productName = document.getElementById("productName").value.trim();
    const productPrice = parseFloat(document.getElementById("productPrice").value);

    if (productName && !isNaN(productPrice)) {
        const produit = new Produit(productName, productPrice);
        inventaire.ajouterProduit(produit);
        displayMessage("Produit ajouté avec succès !", "success");
        document.getElementById("productName").value = "";
        document.getElementById("productPrice").value = "";
        afficherProduits();
    } else {
        displayMessage("Veuillez entrer un nom et un prix valides.", "danger");
    }
}

// Fonction pour afficher tous les produits
function afficherProduits() {
    const products = inventaire.afficherProduits();
    const productList = document.getElementById("product-list");

    productList.innerHTML = "<h3>Liste des produits</h3>";

    if (products.length > 0) {
        products.forEach((product) => {
            const productElement = document.createElement("div");
            productElement.className = "alert alert-secondary";
            productElement.innerHTML = `
                <strong>${product.nom}</strong> - ${product.prix.toFixed(2)} € 
                <button class="btn btn-sm btn-danger float-end" onclick="supprimerProduit(${product.index})">Supprimer</button>
            `;
            productList.appendChild(productElement);
        });
    } else {
        productList.innerHTML += "<p class='alert alert-info'>Aucun produit à afficher.</p>";
    }
}

// Fonction pour supprimer un produit
function supprimerProduit(index) {
    inventaire.supprimerProduit(index);
    displayMessage("Produit supprimé avec succès.", "success");
    afficherProduits();
}

// Fonction pour effacer tous les produits
function effacerProduits() {
    inventaire.effacerProduits();
    displayMessage("Tous les produits ont été effacés.", "warning");
    afficherProduits();
}

// Fonction pour afficher un message temporaire
function displayMessage(message, type = "info") {
    const productList = document.getElementById("product-list");
    productList.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
}
// Fonction pour vérifier les réponses aux questions
function verifierReponse(questionId, bonneReponse) {
    const reponse = document.getElementById(questionId).value.trim();
    const resultId = `${questionId}-result`;

    if (reponse === bonneReponse) {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-success">Bonne réponse !</div>`;
    } else {
        document.getElementById(resultId).innerHTML = `<div class="alert alert-danger">Mauvaise réponse. Essayez encore !</div>`;
    }
}

// Fonction pour afficher les indices
function afficherIndice(niveau) {
    const indices = [
        "Indice 1 : Les méthodes de l'inventaire commencent par un verbe décrivant leur action.",
        "Indice 2 : La méthode pour afficher commence par 'afficher'.",
        "Indice 3 : La méthode pour effacer commence par 'effacer'."
    ];
    document.getElementById("indice").innerHTML = `<div class='alert alert-info'>${indices[niveau - 1]}</div>`;
}

// Fonction pour afficher les réponses
function afficherReponses() {
    const reponses = `
        <div class='alert alert-warning'>
            <p>Réponse Question 1 : <code>ajouterProduit</code></p>
            <p>Réponse Question 2 : <code>afficherProduits</code></p>
            <p>Réponse Question 3 : <code>effacerProduits</code></p>
        </div>`;
    document.getElementById("reponses").innerHTML = reponses;
}