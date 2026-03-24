<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EFREI Informatique</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>
<?php include '../php/header.php'; ?>
<body>
    <main class="container-propos">
        <h1 class="titre-page">L'équipe du projet</h1>

        <div class="equipe-container">
            <div class="membre-card">
                <div class="photo-container">
                    <img src="../images/PDP-Raph.jpg" alt="Photo Raphaël" class="photo-profil">
                </div>
                <h3>Raphaël Nabi</h3>
                <p>Étudiant à l'EFREI</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/rapha%C3%ABl-nabi/" target="_blank" class="link-linkedin">
                        <img src="../images/LinkedIN.jpg" width="50" height="50" alt="LinkedIn"> LinkedIn
                    </a>
                    <a href="https://github.com/raphaelnabi07" target="_blank" class="link-github">
                        <img src="../images/GitHub.jpg" width="90" height="50" alt="GitHub"> GitHub
                    </a>
                </div>
            </div>

            <div class="membre-card">
                <div class="photo-container">
                    <img src="../images/PDP-Thierno.jpg" alt="Photo Thierno" class="photo-profil">
                </div>
                <h3>Thierno Diallo</h3>
                <p>Étudiant à l'EFREI</p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/in/thierno-diallo-efrei/" target="_blank" class="link-linkedin">
                        <img src="../images/LinkedIN.jpg" width="50" height="50" alt="LinkedIn"> LinkedIn
                    </a>
                    <a href="https://github.com/titi-design" target="_blank" class="link-github">
                        <img src="../images/GitHub.jpg" width="90" height="50" alt="GitHub"> GitHub
                    </a>
                </div>
            </div>
        </div>

        <div class="explication-projet">
            <h2>Détails de la réalisation</h2>
            <div class="contenu-projet">
                <p>
                    Ce projet a été réalisé dans le cadre du module Web Dynamique. 
                    Nous avons utilisé <strong>HTML5, CSS3, JavaScript et PHP</strong>.
                </p>
                <div class="depot-container">
                    <a href="https://github.com/raphaelnabi07/Projet-Web-.git" class="btn-github-projet">
                        📁 Voir le dépôt GitHub du projet
                    </a>
                </div>
            </div>
        </div>
    </main>
</body>
<?php include '../php/footer.php'; ?>
</html>