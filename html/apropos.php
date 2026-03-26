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
                <h2>Raphaël Nabi</h2>
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
                <h2>Thierno Diallo</h2>
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
                <section id="a-propos">
                

                    <div class="contribution">
                        <h3>Contributions de Raphaël</h3>
                        <ul>
                            <li><strong>Interface et Design :</strong> Conception et intégration des pages <em>Accueil</em>, <em>À propos</em>, <em>Équipe enseignante</em>, de la page du cours<em>Base de données</em> et du Header (HTML, CSS et scripts JavaScript dédiés).</li>
                            <li><strong>Authentification :</strong> Développement de la page de connexion (Login) avec gestion des sessions en PHP.(<code>login.php logout.php session.php </code>)</li>
                            <li><strong>Backend et Base de données :</strong> Création de la structure de la base de données et établissement de la connexion via PHP.(<code>db_config.php</code>)</li>
                            <li><strong>Gestion Administrative :</strong> Mise en place de l'interface de gestion des permanences côté professeur avec l'affichage des permanances, incluant les fonctionnalités de validation et de suppression.(<code>valider.php supprimer.php gestion.php</code>).</li>
                        </ul>
                    </div>

                    <div class="contribution">
                        <h3>Contributions de Thierno</h3>
                        <ul>
                            <li><strong>Contenu et Structure :</strong> Réalisation des pages thématiques : <em>Associations</em>, <em>Locaux</em>, des cours dédiées au <em>Langage C</em>, au <em>Réseau</em> et au <em>Web</em> et le Footer (HTML et CSS dédiés).</li>
                            <li><strong>Système de Réservation :</strong> Création complète du formulaire des permanences et le tableau récapitulatif.</li>
                            <li><strong>Traitement des Données :</strong> Développement de la logique de récupération des données saisies, incluant la page de traitement et le résumé de validation après l'envoi du formulaire.</li>
                        </ul>
                    </div>

                    <div class="contribution-collective">
                        <h3>Travail Collectif et Synergie</h3>
                        <p>
                            Au-delà de la répartition technique, ce projet a bénéficié d'un effort commun constant. Nous avons collaboré étroitement sur :
                        </p>
                        <ul>
                            <li><strong>Identité Visuelle :</strong> Discussion et harmonisation des choix esthétiques (charte graphique, typographies) pour garantir une cohérence sur l'ensemble du site.</li>
                            <li><strong>Gestion des Médias :</strong> Travail mutuel sur la sélection, le redimensionnement et l'importation des images pour optimiser le rendu visuel.</li>
                            <li><strong>Résolution de Problèmes :</strong> Entraide régulières pour surmonter les difficultés techniques rencontrées.</li>
                        </ul>
                    </div>

                    <div class="difficultes-rencontrees">
                        <h3>Défis et Réalité du Projet</h3>
                        <p>
                            La réalisation de ce site a été un apprentissage intense. Bien que nous soyons satisfaits du résultat visuel, nous avons rencontré quelques limites:
                        </p>
                        <ul>
                            <li>
                                <strong>Adaptabilité (Responsive) :</strong> Par manque de pratique et de connaissances techniques sur les Media Queries, et suite à une gestion du temps un peu tardive sur cet aspect, nous n'avons pas pu rendre le site Responsive.
                            </li>
                            <li>
                                <strong>Organisation du JavaScript :</strong> Nous avons eu des difficultés en essayant de séparer le code JavaScript du fichier <code>gestion.php</code>. En déplaçant les fonctions vers un fichier externe, celles-ci ne répondaient plus, nous obligeant à les laisser dans le fichier PHP pour qu'elles restent opérationnelles.
                            </li>
                            <li>
                                <strong>Rigueur et Esthétique :</strong> Hormis ces points, nous n'avons pas eu de blocages insurmontables. Cependant, nous avons réalisé que créer un site est un travail <strong>long et méticuleux</strong>, demandant beaucoup de patience pour obtenir un affichage précis et une esthétique qui nous convienne.
                            </li>
                            <li>
                                <strong>Maîtrise de la Logique :</strong> Nous avons constaté que la mise en place et la compréhension en <strong>PHP</strong> et en <strong>JavaScript</strong> demande une pratique bien plus régulière que le HTML ou le CSS. Il nous faudra encore du temps et de l'exercice pour nous sentir pleinement à l'aise avec ces langages de programmation et leurs mécanismes complexes.
                            </li>
                        </ul>
                    </div>
                </section>
                <br>
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