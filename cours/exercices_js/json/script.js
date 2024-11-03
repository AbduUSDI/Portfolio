// Fonction pour ajouter un produit
function addProduct() {
    const productName = document.getElementById("productName").value.trim();
    const productPrice = parseFloat(document.getElementById("productPrice").value);

    if (productName && !isNaN(productPrice)) {
        const product = { name: productName, price: productPrice };
        const products = JSON.parse(localStorage.getItem("products")) || [];
        products.push(product);
        localStorage.setItem("products", JSON.stringify(products));
        displayMessage("Produit ajouté avec succès !", "success");
        document.getElementById("productName").value = "";
        document.getElementById("productPrice").value = "";
    } else {
        displayMessage("Veuillez entrer un nom et un prix valides.", "danger");
    }
}

// Fonction pour afficher les produits
function displayProducts() {
    const products = JSON.parse(localStorage.getItem("products")) || [];
    const productList = document.getElementById("product-list");
    productList.innerHTML = "<h3>Liste des produits</h3>";

    if (products.length > 0) {
        products.forEach((product, index) => {
            const productElement = document.createElement("div");
            productElement.className = "alert alert-secondary";
            productElement.innerHTML = `<strong>${product.name}</strong> - ${product.price.toFixed(2)} € 
                                        <button class="btn btn-sm btn-danger float-end" onclick="deleteProduct(${index})">Supprimer</button>`;
            productList.appendChild(productElement);
        });
    } else {
        productList.innerHTML += "<p class='alert alert-info'>Aucun produit à afficher.</p>";
    }
}

// Fonction pour supprimer un produit par son index
function deleteProduct(index) {
    const products = JSON.parse(localStorage.getItem("products")) || [];
    products.splice(index, 1);
    localStorage.setItem("products", JSON.stringify(products));
    displayMessage("Produit supprimé avec succès.", "success");
    displayProducts();
}

// Fonction pour effacer tous les produits
function clearProducts() {
    localStorage.removeItem("products");
    displayMessage("Tous les produits ont été effacés.", "warning");
    displayProducts();
}

// Fonction pour afficher un message temporaire
function displayMessage(message, type = "info") {
    const productList = document.getElementById("product-list");
    productList.innerHTML = `<div class="alert alert-${type}">${message}</div>`;
}
