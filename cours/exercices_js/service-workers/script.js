// script.js : Enregistrement du Service Worker

function registerServiceWorker() {
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('sw.js')
            .then((registration) => {
                console.log("Service Worker enregistré avec succès !");
                document.getElementById("sw-result").innerHTML = `<div class="alert alert-success">Service Worker enregistré avec succès !</div>`;
            })
            .catch((error) => {
                console.error("Erreur d'enregistrement du Service Worker :", error);
                document.getElementById("sw-result").innerHTML = `<div class="alert alert-danger">Erreur d'enregistrement : ${error.message}</div>`;
            });
    } else {
        document.getElementById("sw-result").innerHTML = "<div class='alert alert-warning'>Les Service Workers ne sont pas pris en charge dans ce navigateur.</div>";
    }
}
