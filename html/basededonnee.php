<!DOCTYPE html>
<html lang="Fr">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EFREI Informatique</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
    <style>

.matiere-bdd {
    background: linear-gradient(145deg, rgba(255,255,255,0.97), rgba(242,248,255,0.93));
    border: 1px solid rgba(255,255,255,0.35);
    border-bottom: 6px solid #00d4ff;
    border-radius: 24px;
    padding: 45px 50px;
    margin: 70px auto;
    max-width: 1150px;
    color: rgb(40, 59, 99);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18), 0 4px 12px rgba(0, 212, 255, 0.08);
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-family: 'Poppins', 'Segoe UI', Helvetica, Arial, sans-serif;
}

.matiere-bdd:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.22), 0 6px 18px rgba(0, 212, 255, 0.12);
}

.matiere-bdd::before {
    content: "";
    position: absolute;
    top: -85px;
    right: -75px;
    width: 240px;
    height: 240px;
    background: radial-gradient(circle, rgba(0, 212, 255, 0.16), transparent 70%);
    z-index: 0;
    pointer-events: none;
}

.matiere-bdd > * {
    position: relative;
    z-index: 1;
}

.matiere-bdd h2 {
    font-size: 2rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 25px;
    color: #1f4f7a;
    position: relative;
    padding-bottom: 14px;
    letter-spacing: 0.3px;
}

.matiere-bdd h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 110px;
    height: 4px;
    background: linear-gradient(to right, #00d4ff, #2a6eaa);
    border-radius: 999px;
}

.matiere-bdd h3 {
    margin-top: 38px;
    margin-bottom: 16px;
    font-size: 1.25rem;
    font-weight: 600;
    color: #2a6eaa;
    letter-spacing: 0.2px;
}

.matiere-bdd p {
    font-size: 1.02rem;
    line-height: 1.9;
    margin-bottom: 18px;
    color: #314d68;
    text-align: justify;
}

.matiere-bdd ul {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 0;
}

.matiere-bdd li {
    background: rgba(0, 212, 255, 0.06);
    border-left: 4px solid #00d4ff;
    border-radius: 12px;
    padding: 14px 16px 14px 18px;
    margin-bottom: 12px;
    list-style: none;
    color: #314d68;
    position: relative;
}

.matiere-bdd img {
    width: 100%;
    max-width: 900px;
    display: block;
    margin: 0 auto 30px auto;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
    border: 1px solid rgba(255,255,255,0.65);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.matiere-bdd img:hover {
    transform: scale(1.02);
    box-shadow: 0 18px 38px rgba(0, 0, 0, 0.24);
}

.matiere-bdd strong {
    color: #1d5d96;
    font-weight: 700;
}
</style>
</head>
<?php include '../php/header.php'; ?>

<body>
    <div class="matiere-bdd">
        <h2>Bases de Données : Science de la Donnée, Modélisation et Architectures Big Data</h2>
        <img src="../images/bdd.jpg" alt="Gestion de données massives" style="width: 100%; max-width: 900px; height: 450px; object-fit: cover; border-radius: 8px;">

        <p>
            La matière Bases de données permet d'apprendre à organiser, modéliser, stocker et exploiter efficacement de grandes quantités d'informations dans des systèmes informatiques complexes, en introduisant d'abord les principes de la modélisation conceptuelle des données à travers la définition d'entités, d'attributs et de relations, puis en étudiant la transformation de ces modèles en structures relationnelles composées de tables reliées entre elles par des clés primaires et étrangères, tout en utilisant le langage SQL pour interroger, modifier, insérer ou supprimer des données de manière précise et performante, ce qui conduit également à comprendre des notions essentielles comme la normalisation des tables afin d'éviter la redondance d'informations, la gestion des transactions pour garantir la cohérence des données, le contrôle des accès utilisateurs pour assurer la sécurité des systèmes, ainsi que l'optimisation des requêtes pour améliorer les performances des applications manipulant de grands volumes d'informations, compétences indispensables pour le développement d'applications web dynamiques, de logiciels métiers ou de systèmes d'information utilisés dans la plupart des environnements numériques professionnels actuels. 📊
        </p>

        <h3>Parcours d'une Séance de 5 Heures : Dompter le Chaos</h3>
        <p>
            Le cours de Bases de Données apprend à ranger le monde dans des boîtes logiques parfaites.
        </p>
        <p>
            <strong>Modélisation Conceptuelle (90 minutes) :</strong> On apprend à transformer un besoin métier flou en un schéma mathématique pur. Les étudiants étudient les Formes Normales pour garantir qu'aucune donnée ne soit jamais dupliquée. C'est la phase d'architecture pure : une erreur ici condamne le projet à long terme.
        </p>
        <p>
            <strong>Requêtage SQL de Haute Volée (2h30) :</strong> Manipulation de millions de lignes. Les étudiants apprennent à poser des questions complexes à la machine : jointures multiples, sous-requêtes, agrégations massives. Ils apprennent à garantir la cohérence des données grâce aux transactions (ACID), essentielles pour les systèmes bancaires.
        </p>
        <p>
            <strong>Performance et Tuning (1 heure) :</strong> On apprend qu'une base de données est vivante. On étudie les index pour accélérer les recherches et on apprend à sécuriser les accès pour protéger la vie privée et les secrets industriels.
        </p>

        <h3>Évaluation : L'Efficacité avant Tout</h3>
        <ul>
            <li><strong>L'Audit de Modélisation (40%) :</strong> Transformer un scénario client en un schéma sans faille.</li>
            <li><strong>L'Examen SQL (40%) :</strong> Extraire des données précises sous pression de temps sur des volumes massifs.</li>
            <li><strong>Le Projet Logiciel (20%) :</strong> Intégrer une base de données réelle dans une application métier.</li>
        </ul>

        <h3>Clés de Réussite : Logique et Anticipation</h3>
        <p>
            Réussir demande un <strong>esprit d'analyse</strong> très développé. Il faut savoir simplifier la complexité et anticiper la croissance des données. Un bon ingénieur prévoit toujours comment le système réagira dans 10 ans avec 1000 fois plus de données.
        </p>

        <h3>Impact : Le Moteur de l'Intelligence Artificielle</h3>
        <p>
            La donnée est le nouvel or noir. Maîtriser les bases de données, c'est maîtriser l'actif le plus précieux des entreprises modernes. C'est la porte d'entrée vers les métiers de Data Scientist, d'Administrateur de Bases de Données (DBA) et d'Expert Big Data. C'est ici que l'on construit la mémoire du futur.
        </p>
    </div>
</body>

<?php include '../php/footer.php'; ?>
</html>