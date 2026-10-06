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

        .portfolio-window {
            width: min(1100px, 100%);
            margin: 0 auto;
        }

        .loading-screen {
            position: fixed;
            z-index: 10;
            inset: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: #008080;
        }

        .loading-window {
            width: min(520px, 100%);
        }

        .loading-window .window-body {
            padding: 20px;
        }

        .loading-status {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0 0 16px;
        }

        .loading-status::before {
            width: 8px;
            height: 8px;
            content: "";
            background: #008000;
            box-shadow: inset 1px 1px #004000;
        }

        .loading-progress {
            height: 18px;
            padding: 2px;
            border: 2px inset #dfdfdf;
            background: #fff;
        }

        .loading-progress-bar {
            width: 0;
            height: 100%;
            background: #000080;
        }

        .loading-files {
            height: 70px;
            margin-top: 16px;
            padding: 6px 8px;
            overflow: hidden;
            border: 2px inset #dfdfdf;
            background: #000;
            color: #c0c0c0;
            font-family: "Courier New", monospace;
            font-size: 12px;
            line-height: 1.45;
        }

        .loading-file {
            display: block;
            white-space: nowrap;
        }

        .loading-file::before {
            color: #00ff00;
            content: "> ";
        }

        .portfolio-window {
            visibility: hidden;
        }

        .has-seen-loader .loading-screen {
            display: none;
        }

        .has-seen-loader .portfolio-window {
            visibility: visible;
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

        .desktop-file {
            position: fixed;
            top: 24px;
            right: 24px;
            z-index: 2;
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 124px;
            padding: 4px;
            border: 1px solid transparent;
            color: #fff;
            cursor: default;
            user-select: none;
        }

        .desktop-file:focus,
        .desktop-file:hover {
            border-color: #fff;
            outline: 1px dotted #000;
            background: #000080;
        }

        .desktop-file-icon {
            display: block;
            width: 94px;
            height: 94px;
            object-fit: contain;
        }

        .desktop-file-label {
            margin-top: 4px;
            text-align: center;
            text-shadow: 1px 1px #000;
        }

        .file-info-window {
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 3;
            width: min(360px, calc(100% - 32px));
            transform: translate(-50%, -50%);
        }

        .file-info-window[hidden] {
            display: none;
        }

        .file-info-window .window-body {
            line-height: 1.4;
        }

        .file-info-window .title-bar-controls button {
            width: 16px;
            min-width: 16px;
            height: 14px;
            padding: 0;
        }

        .file-info-window .title-bar {
            cursor: move;
        }

        @media (max-width: 760px) {
            body {
                padding: 10px;
            }

            .desktop-file {
                top: 10px;
                right: 10px;
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
    <script>
        try {
            if (window.localStorage.getItem("portfolio-loader-seen") === "true") {
                document.documentElement.classList.add("has-seen-loader");
            }
        } catch (error) {
            // Le chargement reste visible si le navigateur bloque le stockage local.
        }
    </script>
    <title>Portfolio de Dgino Quatresous</title>
</head>

<body>
    <div class="loading-screen" aria-label="Chargement du portfolio">
        <div class="window loading-window" role="status" aria-live="polite">
            <div class="title-bar">
                <div class="title-bar-text">Portfolio.exe - Loading...</div>
            </div>
            <div class="window-body">
                <p class="loading-status" id="loading-status">Compilation des fichiers...</p>
                <div class="loading-progress" role="progressbar" aria-label="Progression du chargement"
                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                    <div class="loading-progress-bar" id="loading-progress-bar"></div>
                </div>
                <div class="loading-files" id="loading-files" aria-label="Fichiers en cours de compilation"></div>
            </div>
        </div>
    </div>

    <div class="window portfolio-window">
        <div class="title-bar">
            <div class="title-bar-text">My Portfolio</div>
        </div>
        <div class="window-body">
            <h2>Bienvenue sur le Portfolio de Dgino Quatresous</h2>
        </div>
    </div>
    <br>

    <div class="desktop-file" id="text-file" role="button" tabindex="0" aria-label="Ouvrir le fichier texte">
        <img class="desktop-file-icon" src="assets/image/txt_file_icon.png" alt="">
        <span class="desktop-file-label">Contact.txt</span>
    </div>

    <div class="window file-info-window" id="file-info-window" role="dialog" aria-labelledby="file-info-title"
        aria-modal="true" hidden>
        <div class="title-bar">
            <div class="title-bar-text" id="file-info-title">Contact.txt</div>
            <div class="title-bar-controls">
                <button type="button" aria-label="Fermer" id="close-file-info"></button>
            </div>
        </div>
        <div class="window-body">
            <p><strong>Comment me contacter?</strong></p>
            <p>Vous pouvez me contacter par email à l'addresse suivantes :</p>
            <p>qdgino18@gmail.com</p>
        </div>
    </div>

    <div class="window portfolio-window">
        <div class="title-bar">
            <div class="title-bar-text">A propo de moi</div>
        </div>
        <div class="window-body">
            <h3>Liste de mes projets.</h3>
        </div>
        <div class="project-list">
            <article class="project-card sunken-panel">
                <img class="project-image" src="assets/project-placeholder.svg" alt="Image du projet 1">
                <h3><a href="fishnet.php">Fishnet</a></h3>
                <p>Application de localisation de filet de pêche</p>
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
    <script>
        (function () {
            var loaderSeenKey = "portfolio-loader-seen";
            var root = document.documentElement;
            var loadingScreen = document.querySelector(".loading-screen");
            var progressBar = document.getElementById("loading-progress-bar");
            var progressTrack = document.querySelector(".loading-progress");
            var loadingFiles = document.getElementById("loading-files");
            var loadingStatus = document.getElementById("loading-status");
            var files = [
                "index.php",
                "98.css",
                ".window",
                ".title-bar",
                ".project-list",
                ".project-card",
                "project-placeholder.svg",
                "fishnet.php",
                "package.json",
            ];

            if (root.classList.contains("has-seen-loader")) {
                return;
            }

            var startedAt = Date.now();
            var fileIndex = 0;
            var progress = 0;

            function addFile() {
                if (fileIndex >= files.length) {
                    return;
                }

                var file = document.createElement("span");
                file.className = "loading-file";
                file.textContent = files[fileIndex];
                loadingFiles.appendChild(file);
                loadingFiles.scrollTop = loadingFiles.scrollHeight;
                fileIndex += 1;
            }

            function finishLoading() {
                progress = 100;
                progressBar.style.width = progress + "%";
                progressTrack.setAttribute("aria-valuenow", progress);
                loadingStatus.textContent = "Compilation terminée. Ouverture du portfolio...";

                try {
                    window.localStorage.setItem(loaderSeenKey, "true");
                } catch (error) {
                    // Sans stockage local, le chargement sera rejoué à la prochaine visite.
                }

                setTimeout(function () {
                    loadingScreen.remove();
                    root.classList.add("has-seen-loader");
                }, 120);
            }

            function updateProgress() {
                var elapsed = Date.now() - startedAt;
                var remaining = Math.max(0, 2000 - elapsed);

                if (remaining === 0) {
                    finishLoading();
                    return;
                }

                progress = Math.min(96, progress + Math.floor(Math.random() * 15) + 3);
                progressBar.style.width = progress + "%";
                progressTrack.setAttribute("aria-valuenow", progress);
                addFile();
                setTimeout(updateProgress, Math.min(remaining, Math.max(90, Math.floor(Math.random() * 280) + 90)));
            }

            addFile();
            updateProgress();
        }());

        (function () {
            var textFile = document.getElementById("text-file");
            var infoWindow = document.getElementById("file-info-window");
            var closeButton = document.getElementById("close-file-info");
            var titleBar = infoWindow.querySelector(".title-bar");
            var isDragging = false;
            var dragOffsetX = 0;
            var dragOffsetY = 0;

            function openInfoWindow() {
                infoWindow.hidden = false;
                closeButton.focus();
            }

            function closeInfoWindow() {
                infoWindow.hidden = true;
                textFile.focus();
            }

            titleBar.addEventListener("pointerdown", function (event) {
                if (event.target.closest("button")) {
                    return;
                }

                var windowRect = infoWindow.getBoundingClientRect();

                isDragging = true;
                dragOffsetX = event.clientX - windowRect.left;
                dragOffsetY = event.clientY - windowRect.top;
                infoWindow.style.left = windowRect.left + "px";
                infoWindow.style.top = windowRect.top + "px";
                infoWindow.style.transform = "none";
                titleBar.setPointerCapture(event.pointerId);
                event.preventDefault();
            });

            titleBar.addEventListener("pointermove", function (event) {
                if (!isDragging) {
                    return;
                }

                infoWindow.style.left = event.clientX - dragOffsetX + "px";
                infoWindow.style.top = event.clientY - dragOffsetY + "px";
            });

            titleBar.addEventListener("pointerup", function (event) {
                isDragging = false;
                titleBar.releasePointerCapture(event.pointerId);
            });

            titleBar.addEventListener("pointercancel", function (event) {
                isDragging = false;
                titleBar.releasePointerCapture(event.pointerId);
            });

            textFile.addEventListener("dblclick", openInfoWindow);
            textFile.addEventListener("keydown", function (event) {
                if (event.key === "Enter" || event.key === " ") {
                    event.preventDefault();
                    openInfoWindow();
                }
            });
            closeButton.addEventListener("click", closeInfoWindow);
            document.addEventListener("keydown", function (event) {
                if (event.key === "Escape" && !infoWindow.hidden) {
                    closeInfoWindow();
                }
            });
        }());
    </script>
</body>

</html>