<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background: linear-gradient(to right, #ffffff, #ccedb6);">
    <a class="navbar-brand" href="/Portfolio/Zoo-Arcadia-New/home">
        <img src="/Zoo-Arcadia-New/assets/image/favicon.jpg" width="32px" height="32px" alt="Zoo Arcadia"> Zoo Arcadia
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/services">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/habitats">Habitats</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/contact">Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/home#avis">Avis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/animals">Animaux</a>
            </li>
            <?php if (isset($_SESSION['user'])): ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/logout">Déconnexion</a>
                </li>
                <?php if ($_SESSION['user']['role_id'] == 1): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/admin">Mon espace administrateur</a>
                    </li>
                <?php elseif ($_SESSION['user']['role_id'] == 2): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/employee">Mon espace employé</a>
                    </li>
                <?php elseif ($_SESSION['user']['role_id'] == 3): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/vet">Mon espace vétérinaire</a>
                    </li>
                <?php endif; ?>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Portfolio/Zoo-Arcadia-New/login">Connexion</a>
                </li>
            <?php endif; ?>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color: #ccedb6; border-radius: 5px;">
                        <?php
                        // Breadcrumbs dynamiques basés sur le paramètre 'page'
                        $breadcrumbs = [['Accueil', '/Portfolio/Zoo-Arcadia-New/home']];

                        if (isset($_GET['page'])) {
                            switch ($_GET['page']) {
                                case 'services':
                                    $breadcrumbs[] = ['Services', '/Portfolio/Zoo-Arcadia-New/services'];
                                    break;
                                case 'habitats':
                                    $breadcrumbs[] = ['Habitats', '/Portfolio/Zoo-Arcadia-New/habitats'];
                                    break;
                                case 'animals':
                                    $breadcrumbs[] = ['Animaux', '/Portfolio/Zoo-Arcadia-New/animals'];
                                    break;
                                case 'contact':
                                    $breadcrumbs[] = ['Contact', '/Portfolio/Zoo-Arcadia-New/contact'];
                                    break;
                                case 'animal':
                                    $breadcrumbs[] = ['Animaux', '/Portfolio/Zoo-Arcadia-New/animals'];
                                    $breadcrumbs[] = ['Détails de l\'animal', '/Portfolio/Zoo-Arcadia-New/animal'];
                                    break;
                                case 'habitat':
                                    $breadcrumbs[] = ['Habitats', '/Portfolio/Zoo-Arcadia-New/habitats'];
                                    $breadcrumbs[] = ['Détails de l\'habitat', '/Portfolio/Zoo-Arcadia-New/habitat'];
                                    break;
                                case 'login':
                                    $breadcrumbs[] = ['Connexion', '/Portfolio/Zoo-Arcadia-New/login'];
                                    break;
                                case 'aproposdenous':
                                    $breadcrumbs[] = ['A propos de nous', '/Portfolio/Zoo-Arcadia-New/aproposdenous'];
                                    break;
                                case 'mentions-legales':
                                    $breadcrumbs[] = ['Mentions légales', '/Portfolio/Zoo-Arcadia-New/mentions-legales'];
                                    break;
                                case 'politique-confidentialite':
                                    $breadcrumbs[] = ['Politique de confidentialité', '/Portfolio/Zoo-Arcadia-New/politique-de-confidentialite'];
                                    break;
                            }
                        }

                        foreach ($breadcrumbs as $key => $breadcrumb) {
                            if ($key == count($breadcrumbs) - 1) {
                                echo '<li class="breadcrumb-item active" aria-current="page" style="color: #333333; font-weight: bold;">' . htmlspecialchars($breadcrumb[0]) . '</li>';
                            } else {
                                echo '<li class="breadcrumb-item"><a href="' . htmlspecialchars($breadcrumb[1]) . '" style="color: #006400;">' . htmlspecialchars($breadcrumb[0]) . '</a></li>';
                            }
                        }
                        ?>
                    </ol>
                </nav>
            </li>
        </ul>
    </div>
</nav>
