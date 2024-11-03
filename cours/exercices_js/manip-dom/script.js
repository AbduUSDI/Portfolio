// Exemple de manipulation de DOM - ajout de couleur au clic
document.getElementById("btn").addEventListener("click", () => {
    document.getElementById("content").style.backgroundColor = "lightblue";
    displayMessage("Couleur du contenu modifiée avec succès !", "success");
});

// Fonction pour afficher un message temporaire
function displayMessage(message, type = "info") {
    const content = document.getElementById("content");
    content.innerHTML += `<div class="alert alert-${type}">${message}</div>`;
}
