// Gestion des Erreurs
function simulerErreur() {
    try {
        throw new Error("Erreur simulée !");
    } catch (error) {
        document.getElementById("error-result").innerHTML = `<div class="alert alert-danger">${error.message}</div>`;
    }
}

// Async/Await avec Fetch
async function fetchAsyncAwait() {
    try {
        let response = await fetch("https://jsonplaceholder.typicode.com/posts/1");
        let data = await response.json();
        document.getElementById("async-await-fetch-result").innerHTML = `<div class="alert alert-success">${data.title}</div>`;
    } catch (error) {
        console.error("Erreur:", error);
    }
}

// AJAX avec JSON
async function fetchWithJSON() {
    let data = { name: "John", age: 30 };
    try {
        let response = await fetch("https://jsonplaceholder.typicode.com/posts", {
            method: "POST",
            headers: { "Content-Type": "application/json" },
            body: JSON.stringify(data)
        });
        let result = await response.json();
        document.getElementById("json-result").innerHTML = `<div class="alert alert-info">Données envoyées : ${result.title}</div>`;
    } catch (error) {
        console.error("Erreur:", error);
    }
}

// Utilisation des Promises
function handlePromise() {
    new Promise((resolve, reject) => {
        setTimeout(() => resolve("Promise résolue avec succès !"), 1000);
    })
    .then(result => {
        document.getElementById("promise-result").innerHTML = `<div class="alert alert-info">${result}</div>`;
    })
    .catch(error => console.error(error));
}

// Gestion des Timeouts avec Promise.race
function handleTimeout() {
    let fetchPromise = fetch("https://jsonplaceholder.typicode.com/posts/1")
        .then(response => response.json())
        .then(data => data.title);
    
    let timeoutPromise = new Promise((_, reject) =>
        setTimeout(() => reject("Délai dépassé !"), 2000)
    );

    Promise.race([fetchPromise, timeoutPromise])
        .then(result => document.getElementById("timeout-result").innerHTML = `<div class="alert alert-warning">${result}</div>`)
        .catch(error => document.getElementById("timeout-result").innerHTML = `<div class="alert alert-danger">${error}</div>`);
}
