// Exercice XMLHttpRequest
function chargerDataXHR() {
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/1", true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("xhr-result").innerHTML = `<div class="alert alert-info">${xhr.responseText}</div>`;
        }
    };
    xhr.send();
}

// Exercice Fetch API
function chargerDataFetch() {
    fetch("https://jsonplaceholder.typicode.com/posts/1")
        .then(response => response.json())
        .then(data => {
            document.getElementById("fetch-result").innerHTML = `<div class="alert alert-info">${data.title}</div>`;
        })
        .catch(error => console.error("Erreur:", error));
}

// Exercice Async/Await
async function chargerDataAsyncAwait() {
    try {
        let response = await fetch("https://jsonplaceholder.typicode.com/posts/1");
        let data = await response.json();
        document.getElementById("async-await-result").innerHTML = `<div class="alert alert-info">${data.title}</div>`;
    } catch (error) {
        console.error("Erreur:", error);
    }
}

// Exercice Promise
function chargerDataPromise() {
    new Promise((resolve, reject) => {
        fetch("https://jsonplaceholder.typicode.com/posts/1")
            .then(response => response.json())
            .then(data => resolve(data.title))
            .catch(error => reject("Erreur: " + error));
    }).then(result => {
        document.getElementById("promise-result").innerHTML = `<div class="alert alert-info">${result}</div>`;
    }).catch(error => console.error(error));
}
