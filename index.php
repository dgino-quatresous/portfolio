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
    <div class="window">
        <div class="title-bar">
            <div class="title-bar-text">My Portfolio</div>
        </div>
        <div class="window-body">
            <h2>Bienvenue sur le Portfolio de Dgino Quatresous</h2>
            <h3>Voici la liste de mes projets.</h3>
            <div class="project-list">
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 1">
                    <h3><a href="fishnet.php">Projet 1</a></h3>
                    <p>Description du projet 1</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 2">
                    <h3>Projet 2</h3>
                    <p>Description du projet 2</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 3">
                    <h3>Projet 3</h3>
                    <p>Description du projet 3</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 4">
                    <h3>Projet 4</h3>
                    <p>Description du projet 4</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 5">
                    <h3>Projet 5</h3>
                    <p>Description du projet 5</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 6">
                    <h3>Projet 6</h3>
                    <p>Description du projet 6</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 7">
                    <h3>Projet 7</h3>
                    <p>Description du projet 7</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 8">
                    <h3>Projet 8</h3>
                    <p>Description du projet 8</p>
                </article>
                <article class="project-card sunken-panel">
                    <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 9">
                    <h3>Projet 9</h3>
                    <p>Description du projet 9</p>
                </article>
            </div>
        </div>
    </div>
</body>

</html>