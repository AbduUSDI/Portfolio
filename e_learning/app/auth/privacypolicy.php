<?php
include_once '../../public/templates/header.php';
include_once '../../public/templates/navbar.php';

?>
    <style>
        body {
            padding-top: 190px;
        }
        h1, h2, h3 {
            text-align: center;
            color: white;
        }
        p,
        ul,
        li {
            text-align: justify;
            line-height: 1.6;
            color:floralwhite;
        }
        .back-to-home {
            position: fixed;
            bottom: 200px;
            right: 20px;
            z-index: 1000;
            color: white;
            border-radius: 50%;
            width: 100px;
            height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease;
        }
        .back-to-home:hover {
            background-color: #0056b3;
        }

    </style>
    <div class="container containerr rounded">
        <h1>Politique de Confidentialité</h1>
        <p>Bienvenue sur notre plateforme de e-learning. La protection de vos données personnelles est une priorité pour nous. Cette politique de confidentialité explique quelles informations nous collectons, pourquoi nous les collectons, et comment nous les utilisons.</p>

        <h2>1. Collecte des Informations</h2>
        <p>Nous collectons les informations suivantes lorsque vous utilisez notre plateforme :</p>
        <ul>
            <li><strong>Informations d'inscription :</strong> Nom, adresse e-mail, et autres détails fournis lors de l'inscription.</li>
            <li><strong>Données d'utilisation :</strong> Informations sur votre interaction avec notre plateforme, telles que les cours suivis, les quiz complétés, et les messages échangés.</li>
            <li><strong>Cookies :</strong> Nous utilisons des cookies pour améliorer votre expérience utilisateur, mémoriser vos préférences et analyser le trafic sur notre site.</li>
        </ul>

        <h2>2. Utilisation des Informations</h2>
        <p>Nous utilisons vos informations pour :</p>
        <ul>
            <li>Fournir, exploiter et améliorer nos services.</li>
            <li>Communiquer avec vous, notamment pour vous envoyer des notifications importantes, des mises à jour et des offres promotionnelles.</li>
            <li>Assurer la sécurité de nos utilisateurs et prévenir les fraudes.</li>
        </ul>

        <h2>3. Partage des Informations</h2>
        <p>Nous ne partageons vos informations personnelles avec des tiers que dans les cas suivants :</p>
        <ul>
            <li>Avec votre consentement explicite.</li>
            <li>Pour respecter une obligation légale.</li>
            <li>Avec des prestataires de services qui nous aident à exploiter notre plateforme (ces prestataires sont tenus de respecter la confidentialité de vos informations).</li>
        </ul>

        <h2>4. Sécurité des Données</h2>
        <p>Nous prenons des mesures de sécurité appropriées pour protéger vos informations contre l'accès non autorisé, l'altération, la divulgation ou la destruction. Cependant, aucune méthode de transmission sur Internet ou de stockage électronique n'est totalement sécurisée. Nous ne pouvons donc garantir une sécurité absolue.</p>

        <h2>5. Vos Droits</h2>
        <p>Vous avez le droit de :</p>
        <ul>
            <li>Accéder à vos informations personnelles que nous détenons.</li>
            <li>Demander la correction de toute information inexacte.</li>
            <li>Demander la suppression de vos données personnelles (sous réserve de certaines exceptions légales).</li>
            <li>Vous opposer au traitement de vos données personnelles ou demander leur restriction.</li>
        </ul>

        <h2>6. Modifications de la Politique</h2>
        <p>Nous pouvons mettre à jour cette politique de confidentialité de temps à autre. Toute modification sera publiée sur cette page, et nous vous en informerons par e-mail ou via notre plateforme.</p>

        <h2>7. Contactez-nous</h2>
        <p>Si vous avez des questions ou des préoccupations concernant cette politique de confidentialité, veuillez nous contacter à <a href="mailto:e_learningabdu@hotmail.com">e_learningabdu@hotmail.com</a>.</p>

        <p>Dernière mise à jour : 16 août 2024</p>
    </div>

    <a href="/Portfolio/e_learning/home" class="btn btn-primary back-to-home"><img class="back-to-home" src="/Portfolio/e-learning/public/image_and_video/webp/HighQuality.webp" width="64px" height="64px"></img></a>

<?php include_once '../../public/templates/footer_visitor.php';
