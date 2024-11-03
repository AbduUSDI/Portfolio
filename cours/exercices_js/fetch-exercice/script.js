// script.js

async function fetchPosts() {
    try {
        const response = await fetch('https://jsonplaceholder.typicode.com/posts');
        
        if (!response.ok) {
            throw new Error(`Erreur : ${response.status}`);
        }

        const posts = await response.json();
        displayPosts(posts);
    } catch (error) {
        document.getElementById('post-container').innerHTML = `<div class="alert alert-danger">${error.message}</div>`;
    }
}

function displayPosts(posts) {
    const postContainer = document.getElementById('post-container');
    postContainer.innerHTML = ''; // Réinitialise le contenu

    posts.slice(0, 5).forEach(post => { // Affiche les 5 premières publications
        const postElement = document.createElement('div');
        postElement.className = 'card mb-3';
        postElement.innerHTML = `
            <div class="card-body">
                <h5 class="card-title">${post.title}</h5>
                <p class="card-text">${post.body}</p>
            </div>
        `;
        postContainer.appendChild(postElement);
    });
}
