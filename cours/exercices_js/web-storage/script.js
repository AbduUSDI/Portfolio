// script.js

// Fonction pour sauvegarder dans localStorage
function saveToLocalStorage() {
    const userName = document.getElementById("userName").value;
    const userColor = document.getElementById("userColor").value;

    if (userName && userColor) {
        localStorage.setItem("userName", userName);
        localStorage.setItem("userColor", userColor);
        displayResult("Données sauvegardées dans localStorage !");
    } else {
        displayResult("Veuillez entrer toutes les informations.", "danger");
    }
}

// Fonction pour sauvegarder dans sessionStorage
function saveToSessionStorage() {
    const userName = document.getElementById("userName").value;
    const userColor = document.getElementById("userColor").value;

    if (userName && userColor) {
        sessionStorage.setItem("userName", userName);
        sessionStorage.setItem("userColor", userColor);
        displayResult("Données sauvegardées dans sessionStorage !");
    } else {
        displayResult("Veuillez entrer toutes les informations.", "danger");
    }
}

// Fonction pour afficher un message de résultat
function displayResult(message, type = "success") {
    const resultDiv = document.getElementById("storageResult");
    resultDiv.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
}

// Fonction pour effacer les données du stockage
function clearStorage() {
    localStorage.clear();
    sessionStorage.clear();
    displayResult("Les données ont été effacées.");
}

// Chargement des données lors de l'ouverture de la page
document.addEventListener("DOMContentLoaded", () => {
    const userName = localStorage.getItem("userName") || sessionStorage.getItem("userName");
    const userColor = localStorage.getItem("userColor") || sessionStorage.getItem("userColor");

    if (userName && userColor) {
        document.getElementById("userName").value = userName;
        document.getElementById("userColor").value = userColor;
        displayResult("Données chargées depuis le stockage.");
    }
});
