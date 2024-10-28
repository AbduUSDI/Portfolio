var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var dropdownContent = this.nextElementSibling;
        if (dropdownContent.style.display === "block") {
            dropdownContent.style.display = "none";
        } else {
            dropdownContent.style.display = "block";
        }
    });
}
// Sélectionner les éléments
const sidebar = document.querySelector('.sidebar');
const toggleBtn = document.getElementById('sidebarToggle');

// Ouvrir et fermer la sidebar
toggleBtn.addEventListener('click', () => {
    sidebar.classList.toggle('active');
});

// Fermer la sidebar en cliquant à l'extérieur
document.addEventListener('click', (e) => {
    if (!sidebar.contains(e.target) && !toggleBtn.contains(e.target)) {
        sidebar.classList.remove('active');
    }
});

// Fermer la sidebar lorsqu'un lien est cliqué
document.querySelectorAll('.sidebar a').forEach(link => {
    link.addEventListener('click', () => {
        sidebar.classList.remove('active');
    });
});
