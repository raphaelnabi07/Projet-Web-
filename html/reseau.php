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
</head>
<?php include '../php/header.php'; ?>

<body>
    <div class="matiere-reseaux">
        <h2>Réseaux Informatiques : Architectures, Protocoles et Sécurité</h2>
        <img src="../images/reseaux.jpg" alt="Infrastructure Réseau et Cloud" style="width: 100%; max-width: 900px; height: 450px; object-fit: cover; border-radius: 8px;">

        <p>
            Le module Réseaux est une immersion dans le "système nerveux" du monde numérique. Vous apprendrez comment les données transitent, de la simple impulsion électrique aux protocoles complexes qui font tenir Internet. Cette matière vous enseigne à concevoir, configurer et sécuriser des infrastructures interconnectées, des compétences vitales pour garantir la fiabilité et la performance des échanges dans un environnement professionnel de plus en plus distribué. 🔗
        </p>

        <h3>Déroulé du module (6 séances de 5 heures)</h3>
        
        <p>
            <strong>Séance 1 : Fondamentaux et Modèle OSI :</strong> 
            Introduction aux architectures réseaux. Vous étudierez les 7 couches du modèle OSI pour comprendre l'encapsulation des données et le rôle spécifique de chaque protocole, du média physique jusqu'à l'application utilisateur.
        </p>
        <p>
            <strong>Séance 2 : Adressage IP et Calcul de Masques :</strong> 
            La séance mathématique du module. Vous apprendrez à segmenter des réseaux (Subnetting) en manipulant le binaire et les masques de sous-réseau (VLSM) afin d'optimiser l'attribution des adresses IP et d'organiser la hiérarchie d'un parc informatique.
        </p>
        <p>
            <strong>Séance 3 : Simulation avec Cisco Packet Tracer :</strong> 
            Premiers pas dans l'ingénierie virtuelle. À l'aide de l'outil Cisco, vous concevrez des topologies réseaux complexes pour simuler le comportement de commutateurs (switches) et de routeurs avant tout déploiement réel.
        </p>
        <p>
            <strong>Séance 4 : Configuration Physique de Routeurs :</strong> 
            Passage au matériel concret. Lors de cette séance pratique, vous manipulerez de vrais équipements (câblage, consoles) pour configurer les interfaces de routage, définir les passerelles et établir la communication directe entre différents segments réseaux.
        </p>
        <p>
            <strong>Séance 5 : Travaux Pratiques en Conditions Réelles :</strong> 
            Mise en situation professionnelle. Ce TP long vous demande de résoudre des problèmes de connectivité, de mettre en place des services essentiels (DHCP, DNS) et de vérifier le bon acheminement des paquets via des outils de diagnostic comme Wireshark.
        </p>
        <p>
            <strong>Séance 6 : Routage et Sécurité des Flux :</strong> 
            Approfondissement des échanges. Vous étudierez les protocoles de routage dynamique et les bases de la sécurisation (ACLs, pare-feu) pour protéger les données en transit et garantir la confidentialité des communications.
        </p>

        <h3>Modalités d'évaluation</h3>
        <ul>
            <li><strong>Projet en Groupe (40%) :</strong> Conception et déploiement simulé d'une infrastructure réseau complète pour une entreprise, incluant un plan d'adressage optimisé et une topologie redondante.</li>
            <li><strong>QCM Final (40%) :</strong> Examen théorique et technique portant sur les calculs d'IP, la connaissance des protocoles et l'analyse de trames sous pression de temps.</li>
            <li><strong>TP (20%) :</strong> Évaluation en autonomie sur machine visant à valider votre capacité à configurer un routeur et un switch sans erreur de syntaxe.</li>
        </ul>

        <h3>Clés de Réussite : Précision et Logique</h3>
        <p>
            Pour réussir ce module, vous devez allier rigueur mathématique et curiosité technique. Une erreur d'un seul bit dans un masque peut paralyser tout un système : la précision est donc votre meilleure alliée. Pour l'étudiant motivé, le secret réside dans la pratique régulière des commandes Cisco et l'utilisation quotidienne d'outils de diagnostic (ping, traceroute) pour transformer des concepts abstraits en réflexes concrets. Ne vous contentez pas de faire marcher le réseau, cherchez à comprendre pourquoi il communique.
        </p>

        <h3>Impact : Le Socle de la Transformation Numérique</h3>
        <p>
            Le réseau est la fondation indispensable de tout service informatique. Maîtriser ces infrastructures, c'est s'ouvrir les portes de l'administration système, de l'architecture Cloud et de la cybersécurité. Dans un monde interconnecté, savoir bâtir et protéger les autoroutes de l'information est un atout stratégique majeur pour tout ingénieur de demain.
        </p>
    </div>
</body>

<?php include '../php/footer.php'; ?>
</html>