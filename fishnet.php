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

        @media (max-width: 760px) {
            body {
                padding: 10px;
            }

            .project-list {
                grid-template-columns: repeat(2, minmax(0, 1fr));
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
    <button><a class="back-link" href="index.php">Retour à la page principale</a></button>
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">Fishnet</div>
        </div>
        <div class="window-body">
            <h2>Fishnet</h2>
            <h3>L'application de signalement de filet de pêche.</h3>
        </div>
    </div>
    <div>

    </div>
</body>

</html>