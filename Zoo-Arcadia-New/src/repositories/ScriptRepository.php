<?php 
namespace Repositories;

class ScriptRepository {
    public function homeScript() {
        return '<script>
function registerClick(animalId) {
    console.log("Tentative d\'enregistrement du clic pour l\'animal ID:", animalId);
    fetch("/Portfolio/Zoo-Arcadia-New/record_click/" + animalId)
        .then(response => response.text())
        .then(data => {
            console.log("Données reçues:", data);
            window.location.href = "/Portfolio/Zoo-Arcadia-New/animal/" + animalId;
        })
        .catch(error => {
            console.error("Erreur lors de l\'enregistrement du clic:", error);
        });
}

</script>
        ';
    }

    public function habitatScript() {
        return '<script>
// Utilisation de FETCH pour enregistrer le clic dans MongoDB grâce au fichier "record_click.php"
function registerClick(animalId) {
    console.log("Tentative d\'enregistrement du clic pour l\'animal ID:", animalId);
    fetch("/Portfolio/Zoo-Arcadia-New/record_click/" + encodeURIComponent(animalId))
        .then(response => response.text())
        .then(data => {
            console.log("Données reçues:", data);
            window.location.href = "/Portfolio/Zoo-Arcadia-New/animal/" + encodeURIComponent(animalId);
        })
        .catch(error => {
            console.error("Erreur lors de l\'enregistrement du clic:", error);
        });
}
</script>
        ';
    }

    public function loginScript() {
        return '<script>
document.addEventListener("DOMContentLoaded", function() {
    const togglePassword = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("password");

    togglePassword.addEventListener("click", function() {
        const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
        passwordInput.setAttribute("type", type);

        const eyeIcon = this.querySelector("i");
        if (type === "password") {
            eyeIcon.classList.remove("fa-eye");
            eyeIcon.classList.add("fa-eye-slash");
        } else {
            eyeIcon.classList.remove("fa-eye-slash");
            eyeIcon.classList.add("fa-eye");
        }
    });
});
</script>
        ';
    }
public function manageServiceScript() 
    {
        $csrfToken = htmlspecialchars($_SESSION["csrf_token"], ENT_QUOTES);
        
        return "<script>
                    $(document).ready(function() {
                        function refreshServiceTable() {
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/admin/services?action=list',
                                type: 'GET',
                                success: function(data) {
                                    $('#servicesTable').html(data);
                                },
                                error: function(xhr, status, error) {
                                    $('#responseMessage').html('Erreur lors de la récupération des services.');
                                }
                            });
                        }
                    
                        refreshServiceTable();
                    
                        $('#addServiceModal').on('show.bs.modal', function () {
                            $(this).find('form')[0].reset();
                            $('#responseMessage').html('');
                        });
                    
                        $('#addServiceForm').on('submit', function(event) {
                            event.preventDefault();
                            var formData = new FormData(this);
                    
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/admin/services?action=add',
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    $('#responseMessage').html(response);
                                    $('#addServiceModal').modal('hide');
                                    $('#addServiceForm')[0].reset();
                                    refreshServiceTable();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                },
                                error: function(xhr, status, error) {
                                    $('#responseMessage').html('Erreur lors de l\'ajout du service.');
                                }
                            });
                        });
                    
                        $(document).on('submit', '#editServiceForm', function(event) {
                            event.preventDefault();
                            var formData = new FormData(this);
                    
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/admin/services?action=edit',
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    $('#editResponseMessage').html(response);
                                    $('#editServiceModal').modal('hide');
                                    refreshServiceTable();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                },
                                error: function(xhr, status, error) {
                                    $('#editResponseMessage').html('Erreur lors de la modification du service.');
                                }
                            });
                        });
                    
                        $(document).on('click', '.btn-edit', function() {
                            var serviceId = $(this).data('id');
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/admin/services?action=get',
                                type: 'GET',
                                data: { id: serviceId },
                                success: function(data) {
                                    var service = JSON.parse(data);
                                    $('#editServiceId').val(service.id);
                                    $('#editName').val(service.name);
                                    $('#editDescription').val(decodeHtml(service.description));
                                    $('#editServiceModal').modal('show');
                                },
                                error: function(xhr, status, error) {
                                    $('#editResponseMessage').html('Erreur lors de la récupération du service.');
                                }
                            });
                        });
                    
                        function decodeHtml(html) {
                            var txt = document.createElement('textarea');
                            txt.innerHTML = html;
                            return txt.value;
                        }
                    
                        $(document).on('click', '.btn-delete', function(event) {
                            event.preventDefault();
                            var serviceId = $(this).data('id');
                            if (confirm('Êtes-vous sûr de vouloir supprimer ce service ?')) {
                                $.ajax({
                                    url: '/Portfolio/Zoo-Arcadia-New/admin/services?action=delete&id=' + serviceId + '&csrf_token=$csrfToken',
                                    type: 'GET',
                                    success: function(response) {
                                        alert(response);
                                        refreshServiceTable();
                                    },
                                    error: function(xhr, status, error) {
                                        alert('Erreur lors de la suppression du service.');
                                    }
                                });
                            }
                        });
                    });
                </script>";
    }
    public function manageServiceEmployeeScript() 
    {
        $csrfToken = htmlspecialchars($_SESSION["csrf_token"], ENT_QUOTES);
        
        return "<script>
                    $(document).ready(function() {
                        function refreshServiceTable() {
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/employee/services?action=list',
                                type: 'GET',
                                success: function(data) {
                                    $('#servicesTable').html(data);
                                },
                                error: function(xhr, status, error) {
                                    $('#responseMessage').html('Erreur lors de la récupération des services.');
                                }
                            });
                        }
                    
                        refreshServiceTable();
                    
                        $('#addServiceModal').on('show.bs.modal', function () {
                            $(this).find('form')[0].reset();
                            $('#responseMessage').html('');
                        });
                    
                        $('#addServiceForm').on('submit', function(event) {
                            event.preventDefault();
                            var formData = new FormData(this);
                    
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/employee/services?action=add',
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    $('#responseMessage').html(response);
                                    $('#addServiceModal').modal('hide');
                                    $('#addServiceForm')[0].reset();
                                    refreshServiceTable();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                },
                                error: function(xhr, status, error) {
                                    $('#responseMessage').html('Erreur lors de l\'ajout du service.');
                                }
                            });
                        });
                    
                        $(document).on('submit', '#editServiceForm', function(event) {
                            event.preventDefault();
                            var formData = new FormData(this);
                    
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/employee/services?action=edit',
                                type: 'POST',
                                data: formData,
                                contentType: false,
                                processData: false,
                                success: function(response) {
                                    $('#editResponseMessage').html(response);
                                    $('#editServiceModal').modal('hide');
                                    refreshServiceTable();
                                    $('body').removeClass('modal-open');
                                    $('.modal-backdrop').remove();
                                },
                                error: function(xhr, status, error) {
                                    $('#editResponseMessage').html('Erreur lors de la modification du service.');
                                }
                            });
                        });
                    
                        $(document).on('click', '.btn-edit', function() {
                            var serviceId = $(this).data('id');
                            $.ajax({
                                url: '/Portfolio/Zoo-Arcadia-New/employee/services?action=get',
                                type: 'GET',
                                data: { id: serviceId },
                                success: function(data) {
                                    var service = JSON.parse(data);
                                    $('#editServiceId').val(service.id);
                                    $('#editName').val(service.name);
                                    $('#editDescription').val(decodeHtml(service.description));
                                    $('#editServiceModal').modal('show');
                                },
                                error: function(xhr, status, error) {
                                    $('#editResponseMessage').html('Erreur lors de la récupération du service.');
                                }
                            });
                        });
                    
                        function decodeHtml(html) {
                            var txt = document.createElement('textarea');
                            txt.innerHTML = html;
                            return txt.value;
                        }
                    
                        $(document).on('click', '.btn-delete', function(event) {
                            event.preventDefault();
                            var serviceId = $(this).data('id');
                            if (confirm('Êtes-vous sûr de vouloir supprimer ce service ?')) {
                                $.ajax({
                                    url: '/Portfolio/Zoo-Arcadia-New/employee/services?action=delete&id=' + serviceId + '&csrf_token=$csrfToken',
                                    type: 'GET',
                                    success: function(response) {
                                        alert(response);
                                        refreshServiceTable();
                                    },
                                    error: function(xhr, status, error) {
                                        alert('Erreur lors de la suppression du service.');
                                    }
                                });
                            }
                        });
                    });
                </script>";
    }
    public function manageHabitatScript() {
        return '<script>

// Fonctions pour le CRUD sans rechargement de page grâce à AJAX

$(document).ready(function() {
    // Fonction pour rafraîchir la table des habitats
    function refreshHabitatTable() {
        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/fetch_habitats",
            type: "GET",
            success: function(data) {
                $("#habitatsTable").html(data);
            },
            error: function(xhr, status, error) {
                console.log("Erreur: " + error);
            }
        });
    }

    // Initialisation de la table des habitats
    refreshHabitatTable();

    // Réinitialiser le formulaire d"ajout d"habitat lors de l"ouverture du modal
    $("#addHabitatModal").on("show.bs.modal", function () {
        $(this).find("form")[0].reset();
        $("#responseMessage").html(""); // Efface le message de réponse
    });

    // Formulaire pour ajouter un habitat
    $("#addHabitatForm").on("submit", function(event) {
        event.preventDefault();
        
        var name = $("#name").val();
        var description = $("#description").val();
        if (name.trim() === "" || description.trim() === "") {
            alert("Veuillez remplir tous les champs obligatoires.");
            return;
        }

        var formData = new FormData(this);

        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/habitats?action=add",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#responseMessage").html(response);
                $("#addHabitatModal").modal("hide");
                $("#addHabitatForm")[0].reset();
                refreshHabitatTable();
                $("body").removeClass("modal-open");
                $(".modal-backdrop").remove();
            },
            error: function(xhr, status, error) {
                $("#responseMessage").html("Erreur: " + error);
            }
        });
    });

    // Formulaire pour modifier un habitat
    $(document).on("submit", "#editHabitatForm", function(event) {
        event.preventDefault();

        var name = $("#editName").val();
        var description = $("#editDescription").val();
        if (name.trim() === "" || description.trim() === "") {
            alert("Veuillez remplir tous les champs obligatoires.");
            return;
        }

        var formData = new FormData(this);

        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/habitats?action=edit",
            type: "POST",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $("#editResponseMessage").html(response);
                $("#editHabitatModal").modal("hide");
                refreshHabitatTable();
                $("body").removeClass("modal-open");
                $(".modal-backdrop").remove();
            },
            error: function(xhr, status, error) {
                $("#editResponseMessage").html("Erreur: " + error);
            }
        });
    });

    // Fonction pour remplir le formulaire de modification
    $(document).on("click", ".btn-edit", function() {
        var habitatId = $(this).data("id");
        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/habitats?action=get",
            type: "GET",
            data: { id: habitatId },
            success: function(data) {
                var habitat = JSON.parse(data);
                $("#editHabitatId").val(habitat.id);
                $("#editName").val(habitat.name);
                $("#editDescription").val(habitat.description);
                $("#editHabitatModal").modal("show");
            },
            error: function(xhr, status, error) {
                console.log("Erreur: " + error);
            }
        });
    });

    // Fonction pour supprimer un habitat
    $(document).on("click", ".btn-delete", function(event) {
        event.preventDefault();
        var url = $(this).attr("href");

        if (confirm("Êtes-vous sûr de vouloir supprimer ce habitat ?")) {
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    alert(response);
                    refreshHabitatTable();
                },
                error: function(xhr, status, error) {
                    alert("Erreur: " + error);
                }
            });
        }
    });
});
</script>
        ';
    }
    public function manageUserScript() {
        return '
            <script>
                // Gestion des formulaires Ajouter et Modifier utilisateur
                document.addEventListener("DOMContentLoaded", function () {
                    const addUserForm = document.getElementById("addUserForm");
                    const editUserForm = document.getElementById("editUserForm");
    
                    // Gestion du formulaire d\'ajout d\'utilisateur
                    addUserForm.addEventListener("submit", function (e) {
                        e.preventDefault();
                        const formData = new FormData(addUserForm);
                        fetch("/Portfolio/Zoo-Arcadia-New/admin/users?action=add", { // Adaptation de l\'URL
                            method: "POST",
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            alert(data);
                            location.reload();
                        })
                        .catch(error => {
                            console.error("Erreur lors de l\'ajout de l\'utilisateur :", error);
                        });
                    });
    
                    // Gestion du formulaire de modification d\'utilisateur
                    editUserForm.addEventListener("submit", function (e) {
                        e.preventDefault();
                        const formData = new FormData(editUserForm);
                        fetch("/Portfolio/Zoo-Arcadia-New/admin/users?action=edit", { // Adaptation de l\'URL
                            method: "POST",
                            body: formData
                        })
                        .then(response => response.text())
                        .then(data => {
                            alert(data);
                            location.reload();
                        })
                        .catch(error => {
                            console.error("Erreur lors de la modification de l\'utilisateur :", error);
                        });
                    });
    
                    // Pré-remplir le formulaire d\'édition avec les données de l\'utilisateur sélectionné
                    document.querySelectorAll(".user-management-edit-btn").forEach(button => {
                        button.addEventListener("click", function () {
                            const userId = this.getAttribute("data-id");
                            fetch(`/Portfolio/Zoo-Arcadia-New/admin/users?action=get&id=${userId}`) // Adaptation de l\'URL
                                .then(response => response.json())
                                .then(data => {
                                    document.getElementById("editUserId").value = data.id;
                                    document.getElementById("editEmail").value = data.email;
                                    document.getElementById("editUsername").value = data.username;
                                    document.getElementById("editRole").value = data.role_id;
                                })
                                .catch(error => {
                                    console.error("Erreur lors de la récupération des données utilisateur :", error);
                                });
                        });
                    });
    
                    // Suppression d\'un utilisateur
                    document.querySelectorAll(".user-management-delete-btn").forEach(button => {
                        button.addEventListener("click", function () {
                            const userId = this.getAttribute("data-id");
                            const csrfToken = this.getAttribute("data-csrf_token");
                            if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?")) {
                                fetch(`/Portfolio/Zoo-Arcadia-New/admin/users?action=delete&id=${userId}&csrf_token=${csrfToken}`) // Adaptation de l\'URL
                                    .then(response => response.text())
                                    .then(data => {
                                        alert(data);
                                        location.reload();
                                    })
                                    .catch(error => {
                                        console.error("Erreur lors de la suppression de l\'utilisateur :", error);
                                    });
                            }
                        });
                    });
    
                    // Affichage/Masquage du mot de passe
                    document.querySelectorAll(".toggle-password").forEach(button => {
                        button.addEventListener("click", function () {
                            const passwordField = this.closest(".input-group").querySelector("input");
                            const icon = this.querySelector("i");
                            
                            if (passwordField.type === "password") {
                                passwordField.type = "text";
                                icon.classList.remove("fa-eye");
                                icon.classList.add("fa-eye-slash");
                            } else {
                                passwordField.type = "password";
                                icon.classList.remove("fa-eye-slash");
                                icon.classList.add("fa-eye");
                            }
                        });
                    });
                });
            </script>
        ';
    }    
    public function manageReportAdminScript() {
        return '
                <script>
$(document).ready(function() {
    function refreshReportsTable() {
        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/reports?action=list",
            type: "GET",
            success: function(data) {
                $("#reportContainer").html(data);
            },
            error: function(xhr, status, error) {
                console.log("Erreur: " + error);
            }
        });
    }

    $("#editReportForm").on("submit", function(event) {
        event.preventDefault();
        var formData = $(this).serialize();

        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/reports?action=edit",
            type: "POST",
            data: formData,
            success: function(response) {
                $("#editResponseMessage").html(response);
                $("#editReportModal").modal("hide");
                refreshReportsTable();
                $("body").removeClass("modal-open");
                $(".modal-backdrop").remove();
            },
            error: function(xhr, status, error) {
                $("#editResponseMessage").html("Erreur: " + error);
            }
        });
    });

    $(document).on("click", ".btn-edit", function() {
        var reportId = $(this).data("id");
        $.ajax({
            url: "/Portfolio/Zoo-Arcadia-New/admin/reports?action=get",
            type: "GET",
            data: { id: reportId },
            success: function(data) {
                var report = JSON.parse(data);
                $("#editReportId").val(report.id);
                $("#editAnimal").val(report.animal_id);
                $("#editDate").val(report.visit_date);
                $("#editHealthStatus").val(report.health_status);
                $("#editFoodGiven").val(report.food_given);
                $("#editFoodQuantity").val(report.food_quantity);
                $("#editDetails").val(report.details);
                $("#editReportModal").modal("show");
            },
            error: function(xhr, status, error) {
                console.log("Erreur: " + error);
            }
        });
    });

    $(document).on("click", ".btn-delete", function(event) {
        event.preventDefault();
        var reportId = $(this).data("id");
        var csrfToken = $(this).data("csrf-token");
        if (confirm("Êtes-vous sûr de vouloir supprimer ce rapport ?")) {
            $.ajax({
                url: "/Portfolio/Zoo-Arcadia-New/admin/reports?action=delete&id=" + reportId + "&csrf_token=" + csrfToken,
                type: "GET",
                success: function(response) {
                    alert(response);
                    refreshReportsTable();
                },
                error: function(xhr, status, error) {
                    alert("Erreur: " + error);
                }
            });
        }
    });

    refreshReportsTable();

    $("#filterButton").on("click", function() {
        var visitDate = $("#filterDate").val();
        var animalId = $("#filterAnimal").val();
        $.ajax({
            url: "/Zoo-Arcadia-New/admin/reports?action=list",
            type: "GET",
            data: {
                visit_date: visitDate,
                animal_id: animalId
            },
            success: function(data) {
                $("#reportContainer").html(data);
            },
            error: function(xhr, status, error) {
                console.log("Erreur: " + error);
            }
        });
    });
});
</script>
                ';
    }
    public function manageAnimalAdminScript() {
        // Créez une variable pour le token CSRF en dehors de la chaîne JavaScript
        $csrfToken = htmlspecialchars($_SESSION["csrf_token"], ENT_QUOTES);
    
        return "
            <script>
            $(document).ready(function() {
                // Fonction pour rafraîchir le tableau des animaux
                function refreshAnimalTable() {
                    $.ajax({
                        url: '/Portfolio/Zoo-Arcadia-New/admin/animals?action=list',
                        type: 'GET',
                        success: function(data) {
                            $('main').html(data);
                        },
                        error: function(xhr, status, error) {
                            console.log('Erreur: ' + error);
                        }
                    });
                }
    
                // Réinitialiser le formulaire d'ajout d'animal lors de l'ouverture du modal
                $('#addAnimalModal').on('show.bs.modal', function () {
                    $(this).find('form')[0].reset();
                    $('#responseMessage').html(''); // Efface le message de réponse
                });
    
                // Gestion de la soumission du formulaire d'ajout d'animal
                $('#addAnimalForm').on('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);
    
                    // Ajout du token CSRF dans les données du formulaire
                    formData.append('csrf_token', '$csrfToken');
    
                    $.ajax({
                        url: '/Portfolio/Zoo-Arcadia-New/admin/animals?action=add',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('#responseMessage').html(response);
                            $('#addAnimalModal').modal('hide');
                            $('#addAnimalForm')[0].reset(); // Réinitialise le formulaire après soumission réussie
                            refreshAnimalTable();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        },
                        error: function(xhr, status, error) {
                            $('#responseMessage').html('Erreur: ' + error);
                        }
                    });
                });
    
                // Gestion de la soumission du formulaire de modification d'animal
                $('#editAnimalForm').on('submit', function(event) {
                    event.preventDefault();
                    var formData = new FormData(this);
    
                    // Ajout du token CSRF dans les données du formulaire
                    formData.append('csrf_token', '$csrfToken');
    
                    $.ajax({
                        url: '/Portfolio/Zoo-Arcadia-New/admin/animals?action=edit',
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('#editResponseMessage').html(response);
                            $('#editAnimalModal').modal('hide');
                            refreshAnimalTable();
                            $('body').removeClass('modal-open');
                            $('.modal-backdrop').remove();
                        },
                        error: function(xhr, status, error) {
                            $('#editResponseMessage').html('Erreur: ' + error);
                        }
                    });
                });
    
                // Gestion de l'édition d'un animal
                $(document).on('click', '.btn-edit', function() {
                    var animalId = $(this).data('id');
                    $.ajax({
                        url: '/Portfolio/Zoo-Arcadia-New/admin/animals?action=get',
                        type: 'GET',
                        data: { id: animalId },
                        success: function(data) {
                            var animal = JSON.parse(data);
                            $('#editAnimalId').val(animal.id);
                            $('#editName').val(animal.name);
                            $('#editSpecies').val(animal.species);
                            $('#editHabitatId').val(animal.habitat_id);
                            $('#editAnimalModal').modal('show');
                        },
                        error: function(xhr, status, error) {
                            console.log('Erreur: ' + error);
                        }
                    });
                });
    
                // Gestion de la suppression d'un animal
                $(document).on('click', '.btn-delete', function(event) {
                    event.preventDefault();
                    var url = '/Portfolio/Zoo-Arcadia-New/admin/animals?action=delete&id=' + $(this).data('id') + '&csrf_token=$csrfToken';
                    if (confirm('Êtes-vous sûr de vouloir supprimer cet animal ?')) {
                        $.ajax({
                            url: url,
                            type: 'GET',
                            success: function(response) {
                                alert(response);
                                refreshAnimalTable();
                            },
                            error: function(xhr, status, error) {
                                alert('Erreur: ' + error);
                            }
                        });
                    }
                });
    
                // Rafraîchir le tableau des animaux au chargement de la page
                refreshAnimalTable();
            });
            </script>
        ";
    }
    public function zooHoursScript() {
        return '<script>
function toggleClosed(checkbox, id) {
    const openInput = document.querySelector(`input[name="hours[${id}][open]"]`);
    const closeInput = document.querySelector(`input[name="hours[${id}][close]"]`);
    
    if (checkbox.checked) {
        openInput.disabled = true;
        closeInput.disabled = true;
    } else {
        openInput.disabled = false;
        closeInput.disabled = false;
    }
}
</script>
        ';
    }
    public function vetReportScript() {
        // Création d'une variable pour le token CSRF en dehors de la chaîne JavaScript
        $csrfToken = htmlspecialchars($_SESSION["csrf_token"], ENT_QUOTES);
    
        return '<script>
    $(document).ready(function() {
        // Utilisation de la variable PHP pour le token CSRF dans JavaScript
        var csrfToken = "' . $csrfToken . '";
    
        function refreshReportsTable() {
            $.ajax({
                url: "/Portfolio/Zoo-Arcadia-New/vet/reports?action=list",
                type: "GET",
                success: function(data) {
                    $("#reportContainer").html(data);
                },
                error: function(xhr, status, error) {
                    console.log("Erreur: " + error);
                }
            });
        }
    
        // Gestion de l\'ajout d\'un rapport
        $("#addReportForm").on("submit", function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            formData += "&csrf_token=" + csrfToken; // Ajout de la variable token CSRF dans les données du formulaire
    
            $.ajax({
                url: "/Portfolio/Zoo-Arcadia-New/vet/reports?action=add",
                type: "POST",
                data: formData,
                success: function(response) {
                    $("#addResponseMessage").html(response);
                    $("#addReportModal").modal("hide");
                    refreshReportsTable();
                    $("body").removeClass("modal-open");
                    $(".modal-backdrop").remove();
                },
                error: function(xhr, status, error) {
                    $("#addResponseMessage").html("Erreur: " + error);
                }
            });
        });
    
        // Vide le modal pour que quand on réouvre le modal il soit vide
        $("#addReportModal").on("show.bs.modal", function () {
            $(this).find("form")[0].reset();
            $("#addResponseMessage").html("");
        });
    
        // Gestion de la modification d\'un rapport
        $("#editReportForm").on("submit", function(event) {
            event.preventDefault();
            var formData = $(this).serialize();
            formData += "&csrf_token=" + csrfToken;
    
            $.ajax({
                url: "/Portfolio/Zoo-Arcadia-New/vet/reports?action=edit",
                type: "POST",
                data: formData,
                success: function(response) {
                    $("#editResponseMessage").html(response);
                    $("#editReportModal").modal("hide");
                    refreshReportsTable();
                    $("body").removeClass("modal-open");
                    $(".modal-backdrop").remove();
                },
                error: function(xhr, status, error) {
                    $("#editResponseMessage").html("Erreur: " + error);
                }
            });
        });
    
        // Chargement des données dans le formulaire de modification
        $(document).on("click", ".btn-edit", function() {
            var reportId = $(this).data("id");
            $.ajax({
                url: "/Portfolio/Zoo-Arcadia-New/vet/reports?action=get",
                type: "GET",
                data: { id: reportId },
                success: function(data) {
                    var report = JSON.parse(data);
                    $("#editReportId").val(report.id);
                    $("#editAnimal").val(report.animal_id);
                    $("#editDate").val(report.visit_date);
                    $("#editHealthStatus").val(report.health_status);
                    $("#editFoodGiven").val(report.food_given);
                    $("#editFoodQuantity").val(report.food_quantity);
                    $("#editDetails").val(report.details);
                    $("#editReportModal").modal("show");
                },
                error: function(xhr, status, error) {
                    console.log("Erreur: " + error);
                }
            });
        });
    
        // Gestion de la suppression d\'un rapport
        $(document).on("click", ".btn-delete", function(event) {
            event.preventDefault();
            var reportId = $(this).data("id");
            var csrfToken = "' . $csrfToken . '";
            if (confirm("Êtes-vous sûr de vouloir supprimer ce rapport ?")) {
                $.ajax({
                    url: "/Portfolio/Zoo-Arcadia-New/vet/reports?action=delete&id=" + reportId + "&csrf_token=" + csrfToken,
                    type: "GET",
                    success: function(response) {
                        alert(response);
                        refreshReportsTable();
                    },
                    error: function(xhr, status, error) {
                        alert("Erreur: " + error);
                    }
                });
            }
        });
    
        // Initialisation du tableau des rapports
        refreshReportsTable();
    
        // Gestion du filtrage des rapports
        $("#filterButton").on("click", function() {
            var visitDate = $("#filterDate").val();
            var animalId = $("#filterAnimal").val();
            $.ajax({
                url: "/Zoo-Arcadia-New/vet/reports?action=list",
                type: "GET",
                data: {
                    visit_date: visitDate,
                    animal_id: animalId
                },
                success: function(data) {
                    $("#reportContainer").html(data);
                },
                error: function(xhr, status, error) {
                    console.log("Erreur: " + error);
                }
            });
        });
    });
    </script>';
    }    
}