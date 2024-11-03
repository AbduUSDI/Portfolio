// Fonction pour ajouter un utilisateur
function addUser() {
    const userName = document.getElementById("userName").value.trim();
    const userAge = parseInt(document.getElementById("userAge").value);
    const userCity = document.getElementById("userCity").value.trim();

    if (userName && !isNaN(userAge) && userCity) {
        const user = {
            name: userName,
            age: userAge,
            city: userCity,
            interests: ["lecture", "voyages", "musique"] // Ajout d'intérêts par défaut
        };

        // Récupère les utilisateurs existants dans localStorage ou crée un tableau vide
        const users = JSON.parse(localStorage.getItem("users")) || [];
        
        // Ajoute le nouvel utilisateur
        users.push(user);

        // Enregistre la liste d'utilisateurs mise à jour dans localStorage
        localStorage.setItem("users", JSON.stringify(users));

        displayMessage("Utilisateur ajouté avec succès !", "success");

        // Réinitialise les champs du formulaire
        document.getElementById("userName").value = "";
        document.getElementById("userAge").value = "";
        document.getElementById("userCity").value = "";
    } else {
        displayMessage("Veuillez entrer un nom, un âge et une ville valides.", "danger");
    }
}

// Fonction pour afficher les utilisateurs
function displayUsers() {
    const users = JSON.parse(localStorage.getItem("users")) || [];
    const userList = document.getElementById("user-list");

    userList.innerHTML = "<h3>Liste des utilisateurs</h3>";

    if (users.length > 0) {
        users.forEach((user, index) => {
            const userElement = document.createElement("div");
            userElement.className = "alert alert-secondary";
            userElement.innerHTML = `
                <strong>Nom :</strong> ${user.name}, <strong>Âge :</strong> ${user.age}, <strong>Ville :</strong> ${user.city} 
                <button class="btn btn-sm btn-danger float-end" onclick="deleteUser(${index})">Supprimer</button>
            `;
            userList.appendChild(userElement);
        });
    } else {
        userList.innerHTML += "<p class='alert alert-info'>Aucun utilisateur à afficher.</p>";
    }
}

// Fonction pour supprimer un utilisateur par son index
function deleteUser(index) {
    const users = JSON.parse(localStorage.getItem("users")) || [];
    users.splice(index, 1);

    localStorage.setItem("users", JSON.stringify(users));
    
    displayMessage("Utilisateur supprimé avec succès.", "success");
    displayUsers();
}

// Fonction pour effacer tous les utilisateurs
function clearUsers() {
    localStorage.removeItem("users");
    displayMessage("Tous les utilisateurs ont été effacés.", "warning");
    displayUsers();
}

// Fonction pour afficher un message temporaire
function displayMessage(message, type = "info") {
    const userList = document.getElementById("user-list");
    userList.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
}
