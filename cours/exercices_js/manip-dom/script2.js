// Fonction pour ajouter un nouvel élément
function ajouterNouvelElement() {
    const liste = document.getElementById("ma-liste");
    const nouvelElement = document.createElement("li");
    nouvelElement.textContent = "Nouvel élément";
    nouvelElement.classList.add("list-group-item", "nouvelle-classe");
    nouvelElement.id = "element-special";
    
    // Ajout d'un écouteur d'événement sur le nouvel élément
    nouvelElement.addEventListener("click", () => {
        alert("Élément cliqué !");
    });
    
    liste.appendChild(nouvelElement);
}

// Fonction pour cloner le dernier élément de la liste
function clonerElement() {
    const liste = document.getElementById("ma-liste");
    const dernierElement = liste.lastElementChild;
    
    if (dernierElement) {
        const cloneElement = dernierElement.cloneNode(true);
        liste.appendChild(cloneElement);
    }
}

// Fonction pour supprimer le dernier élément de la liste
function supprimerDernierElement() {
    const liste = document.getElementById("ma-liste");
    if (liste.lastElementChild) {
        liste.removeChild(liste.lastElementChild);
    }
}
