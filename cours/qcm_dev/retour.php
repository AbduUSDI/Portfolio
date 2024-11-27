<!-- retour.php -->
<div style="margin: 20px;">
    <button onclick="retourDernierePage()" class="btn btn-primary">Retour à la page précédente</button>
</div>

<script>
    function retourDernierePage() {
        if (document.referrer) {
            // Retour à la page précédente
            history.back();
        } else {
            // Redirige vers la page d'accueil si aucun historique
            window.location.href = '/Portfolio/cours/index.php?page=qcm_dev/index';
        }
    }
</script>
