<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/98.css" />
    <style>
        body {
            margin: 0;
            padding: 24px;
            background: #008080;
        }

        p {
            font-size: 14px;
        }

        ul {
            font-size: 14px;
        }

        .window {
            width: min(1100px, 100%);
            margin: 0 auto;
        }

        .window-body {
            padding: 16px;
        }

        .project-list {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
            margin-top: 24px;
        }

        .project-card {
            display: flex;
            flex-direction: column;
            min-width: 0;
            padding: 10px;
        }

        .project-image {
            display: block;
            width: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
            margin-bottom: 12px;
            background: #c0c0c0;
        }

        .project-card h3 {
            margin: 0 0 10px;
            font-size: 16px;
        }

        .project-card p {
            margin: 0;
            line-height: 1.4;
        }

        .back-link {
            color: inherit;
            text-decoration: none;
        }

        .page-explanations {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .page-explanation {
            margin: 0;
            min-width: 0;
        }

        .page-explanation img {
            display: block;
            width: 100%;
            height: auto;
            margin-bottom: 12px;
            border: 1px solid #808080;
            background: #c0c0c0;
        }

        .page-explanation figcaption {
            line-height: 1.4;
        }

        .page-explanation figcaption strong {
            display: block;
            margin-bottom: 6px;
        }

        .page-explanation--wide {
            grid-column: 1 / -1;
        }

        @media (max-width: 760px) {
            body {
                padding: 10px;
            }

            .project-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .page-explanations {
                grid-template-columns: 1fr;
            }

            .page-explanation--wide {
                grid-column: auto;
            }
        }

        @media (max-width: 480px) {
            .project-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <title>Portfolio de Dgino Quatresous</title>
</head>

<body>
    <a class="back-link" href="index.php"><button>Retour à la page principale</button></a>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">Fishnet</div>
        </div>
        <div class="window-body">
            <h2>Fishnet</h2>
            <h3>L'application de signalement de filet de pêche.</h3>
        </div>
    </div>
    <br>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">Description</div>
        </div>
        <div class="window-body">
            <p>Fishnet est une application web qui permet aux utilisateurs de signaler les filets de pêche abandonnés ou
                perdus dans les océans. L'application utilise une carte interactive pour localiser les filets signalés
                et fournit des informations à une association de plongeur pour les récupérer en toute sécurité.</p>
            <p>Les utilisateurs sont capable de discutter entre eux concernant les signalements de façon pseudo-anonyme.
                Les coordonnées du signalement eux même peuvent être remplis en utilisant la position GPS de l'appareil
                directement.
            </p>
        </div>
    </div>
    <br>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">Spécification technique</div>
        </div>
        <div class="window-body">
            <p>L'application à été créer en suivant le patterne MVC (Modèle-Vue-Contrôleur). Ce qui permet de
                diviser le code de l'application en trois parties distinctes: <strong>le Modèle</strong>, <strong>la
                    Vue</strong> et <strong>le Contrôleur</strong>.
            </p>
            <br>
            <p>Le <strong>Modèle</strong> est responsable de la gestion des données de l'application. Tout ce qui est
                transmit depuis les formulaire ou même les tableau de signalements sont gérés par le modèle.</p>
            <p>La <strong>Vue</strong> est responsable de l'affichage des pages à l'utilisateur. Elle affiche aussi les
                données charger depuis le modèle. Comme par exemple un tableau de signalements.</p>
            <p>Le <strong>Contrôleur</strong> est responsable de la gestion des interactions entre le Modèle et la Vue.
                Il reçoit les requêtes de l'utilisateur, les traites et appelle les méthodes appropriées du Modèle et de
                la Vue. Le contrôleur permet aussi d'empecher l'envoie de requête HTML inutile pour eviter de noyer les
                serveurs.</p>
            <br>
            <p>L'application utilise aussi PDO pour se connecter à la base de données et effectuer les requêtes SQL.
            </p>
        </div>
    </div>
    <br>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">Explication des pages fonctionnelles.</div>
        </div>
        <div class="window-body">
            <p>Cette section explique les différentes pages de l'application et leur fonctionnalité.</p>
            <div class="page-explanations">
                <figure class="page-explanation page-explanation--wide">
                    <img src="assets/screenshots/accueil.png" alt="Capture de la page d'accueil de FishNet Alert">
                    <figcaption>
                        <strong>Page d'accueil — signaler un filet</strong>
                        Cette page est le point d'entrée de l'application. L'utilisateur peut saisir les informations
                        du filet (nom du bateau, type d'objet, description et profondeur), renseigner sa position
                        géographique et utiliser le GPS de son appareil. La carte permet de visualiser la zone du
                        signalement, tandis que la liste du bas affiche les derniers signalements enregistrés.
                    </figcaption>
                </figure>

                <figure class="page-explanation">
                    <img src="assets/screenshots/inscription.png" alt="Capture de la page d'inscription de FishNet Alert">
                    <figcaption>
                        <strong>Page d'inscription</strong>
                        Le formulaire permet de créer un compte avec une adresse e-mail, un prénom, un nom, un pays et
                        un mot de passe. Les conditions d'utilisation et la politique de confidentialité doivent être
                        acceptées avant la validation de l'inscription.
                    </figcaption>
                </figure>

                <figure class="page-explanation">
                    <img src="assets/screenshots/profil.png" alt="Capture de la page du profil utilisateur de FishNet Alert">
                    <figcaption>
                        <strong>Page « Mon profil »</strong>
                        L'utilisateur retrouve ses informations personnelles et peut modifier son prénom, son nom ou
                        son pays. Le bouton de mise à jour enregistre les changements, et un lien permet de revenir à
                        l'accueil.
                    </figcaption>
                </figure>

                <figure class="page-explanation">
                    <img src="assets/screenshots/admin-dashboard1.png" alt="Capture de la gestion des utilisateurs de FishNet Alert">
                    <figcaption>
                        <strong>Tableau de bord administrateur — gestion des utilisateurs</strong>
                        L'administrateur dispose d'une vue d'ensemble des comptes, de leur rôle, du nombre de
                        signalements et de leur statut. Il peut bannir un utilisateur actif ou débannir un compte
                        suspendu. Le compte administrateur est protégé contre cette action.
                    </figcaption>
                </figure>

                <figure class="page-explanation page-explanation--wide">
                    <img src="assets/screenshots/admin-dashboard3.png" alt="Capture de la vue d'ensemble et de la gestion des signalements de FishNet Alert">
                    <figcaption>
                        <strong>Tableau de bord administrateur — vue d'ensemble et gestion des signalements</strong>
                        Cette page donne à l'administrateur une synthèse de l'activité de l'application grâce aux
                        indicateurs sur les signalements en attente, les signalements validés, les comptes actifs et
                        les demandes de débannissement. La partie « Gestion des signalements » permet ensuite de
                        consulter les détails d'un signalement et de le valider ou de le rejeter.
                    </figcaption>
                </figure>

                <figure class="page-explanation">
                    <img src="assets/screenshots/admin-dasboard2.png" alt="Capture de la gestion des demandes de débannissement de FishNet Alert">
                    <figcaption>
                        <strong>Tableau de bord administrateur — demandes de débannissement</strong>
                        Cette page rassemble les contestations envoyées par les utilisateurs bannis. L'administrateur
                        peut consulter le motif de la demande, puis l'accepter pour rétablir le compte ou la refuser
                        pour maintenir le bannissement.
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</body>

</html>