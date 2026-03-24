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

.matiere-web {
    background: linear-gradient(145deg, rgba(255,255,255,0.97), rgba(248,250,255,0.94));
    border: 1px solid rgba(255,255,255,0.35);
    border-top: 6px solid #ffffff;
    border-radius: 24px;
    padding: 45px 50px;
    margin: 70px auto;
    max-width: 1150px;
    color: rgb(40, 59, 99);
    box-shadow: 0 12px 35px rgba(0, 0, 0, 0.18), 0 4px 12px rgba(42, 110, 170, 0.08);
    backdrop-filter: blur(10px);
    position: relative;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    font-family: 'Poppins', 'Segoe UI', Helvetica, Arial, sans-serif;
}

.matiere-web:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.22), 0 6px 18px rgba(42, 110, 170, 0.12);
}

.matiere-web::before {
    content: "";
    position: absolute;
    top: -80px;
    right: -60px;
    width: 230px;
    height: 230px;
    background: radial-gradient(circle, rgba(255, 255, 255, 0.28), transparent 70%);
    z-index: 0;
    pointer-events: none;
}

.matiere-web > * {
    position: relative;
    z-index: 1;
}

.matiere-web h2 {
    font-size: 2rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 25px;
    color: #1f4f7a;
    position: relative;
    padding-bottom: 14px;
    letter-spacing: 0.3px;
}

.matiere-web h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 110px;
    height: 4px;
    background: linear-gradient(to right, #ffffff, #2a6eaa);
    border-radius: 999px;
}

.matiere-web h3 {
    margin-top: 38px;
    margin-bottom: 16px;
    font-size: 1.25rem;
    font-weight: 600;
    color: #2a6eaa;
    letter-spacing: 0.2px;
}

.matiere-web p {
    font-size: 1.02rem;
    line-height: 1.9;
    margin-bottom: 18px;
    color: #314d68;
    text-align: justify;
}

.matiere-web ul {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 0;
}

.matiere-web li {
    background: rgba(42, 110, 170, 0.05);
    border-left: 4px solid #00d4ff;
    border-radius: 12px;
    padding: 14px 16px 14px 18px;
    margin-bottom: 12px;
    list-style: none;
    color: #314d68;
    position: relative;
}

.matiere-web img {
    width: 100%;
    max-width: 900px;
    display: block;
    margin: 0 auto 30px auto;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
    border: 1px solid rgba(255,255,255,0.75);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.matiere-web img:hover {
    transform: scale(1.02);
    box-shadow: 0 18px 38px rgba(0, 0, 0, 0.24);
}

.matiere-web strong {
    color: #1d5d96;
    font-weight: 700;
}
</style>
</head>
<?php include '../php/header.php'; ?>

<body>
    <div class="matiere-web">
        <h2>Développement Web : Ingénierie des Interfaces, UX et Performance des Applications Full-Stack</h2>
        <img src="../images/Web.jpg" alt="Développement Web Moderne" style="width: 100%; max-width: 900px; height: 450px; object-fit: cover; border-radius: 8px;">

        <p>
            Le développement web correspond à l'ensemble des techniques permettant de concevoir, structurer, styliser et rendre interactifs des sites et applications accessibles depuis un navigateur, en s'appuyant sur des technologies fondamentales comme HTML pour organiser le contenu, CSS pour définir l'apparence visuelle et l'agencement des éléments à l'écran, et JavaScript pour ajouter des fonctionnalités dynamiques et interactives côté client, tout en introduisant progressivement des notions plus avancées telles que la communication avec des serveurs via des requêtes HTTP, l'utilisation d'API pour échanger des données avec des services externes, la gestion des événements utilisateurs, la validation des formulaires ou encore l'optimisation des performances des pages web, ce qui permet également d'aborder des problématiques essentielles comme l'accessibilité numérique, la compatibilité entre navigateurs, l'adaptation aux différents supports grâce au responsive design, ainsi que les bonnes pratiques de structuration du code et d'organisation des projets, offrant ainsi aux étudiants les compétences nécessaires pour concevoir des interfaces modernes, ergonomiques et fonctionnelles répondant aux standards actuels du développement web professionnel. 🌍
        </p>

        <h3>Le Cycle de Création : Une Séance de 5 Heures de Production</h3>
        <p>
            Le module de Web est un studio d'innovation. On n'y apprend pas à faire des "sites", mais à construire des outils numériques complexes.
        </p>
        <p>
            <strong>Conception et Ergonomie (1 heure) :</strong> On commence par la psychologie de l'utilisateur. Comment l'œil circule-t-il sur une page ? Comment rendre une interface intuitive ? On étudie le Responsive Design poussé à l'extrême : un même code doit être parfait sur un écran de cinéma comme sur une montre connectée. On aborde la sémantique HTML pour le référencement naturel (SEO) et l'inclusion numérique (Accessibilité).
        </p>
        <p>
            <strong>Développement JS et Architecture Front (3 heures) :</strong> C'est la partie intensive. Les étudiants manipulent le JavaScript asynchrone pour créer des interfaces fluides qui communiquent avec des serveurs sans jamais recharger la page. Ils apprennent à gérer les états complexes, à sécuriser les transactions côté client et à utiliser les dernières API du Web (Géolocalisation, Notifications, Stockage local).
        </p>
        <p>
            <strong>Performance et Déploiement (1 heure) :</strong> Audit de vitesse avec <em>Lighthouse</em>. Chaque milliseconde gagnée est une victoire. Les étudiants apprennent à optimiser leurs ressources et à mettre en ligne leurs projets sur des infrastructures Cloud modernes avec des pipelines de déploiement automatique.
        </p>

        <h3>Évaluation : Le Verdict de l'Utilisateur et du Code</h3>
        <ul>
            <li><strong>Le Projet Fil Rouge (60%) :</strong> Création d'une application web complète (ex: une plateforme de réservation ou un réseau social thématique). On note l'esthétique, la rapidité, l'accessibilité et la propreté du code source.</li>
            <li><strong>Le Hackathon (20%) :</strong> Une épreuve de 24h pour résoudre un problème de société par le code web.</li>
            <li><strong>Test Technique (20%) :</strong> Validation des connaissances sur les standards du W3C et les moteurs JS.</li>
        </ul>

        <h3>Clés du Succès : Créativité et Veille Permanente</h3>
        <p>
            Pour réussir, il faut cultiver <strong>l'empathie</strong> (penser à l'utilisateur) et une <strong>curiosité insatiable</strong>. Le web change tous les six mois ; savoir apprendre par soi-même en lisant la documentation officielle est la compétence n°1. La maîtrise de l'inspecteur de navigateur est également indispensable pour déboguer les interfaces en temps réel.
        </p>

        <h3>Débouchés : Façonner l'Espace Public Numérique</h3>
        <p>
            Le développeur web est l'architecte du quotidien. Il crée les outils que nous utilisons pour manger, nous informer, nous soigner et nous divertir. C'est une carrière à la fois technique et artistique, offrant une liberté totale et une demande mondiale qui ne faiblit jamais.
        </p>
    </div>
</body>

<?php include '../php/footer.php'; ?>
</html>