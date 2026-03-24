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

.matiere-reseaux {
    background: linear-gradient(145deg, rgba(255,255,255,0.97), rgba(243,248,255,0.93));
    border: 1px solid rgba(255,255,255,0.35);
    border-right: 6px solid #00d4ff;
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

.matiere-reseaux:hover {
    transform: translateY(-6px);
    box-shadow: 0 18px 45px rgba(0, 0, 0, 0.22), 0 6px 18px rgba(0, 212, 255, 0.12);
}

.matiere-reseaux::before {
    content: "";
    position: absolute;
    top: -90px;
    right: -70px;
    width: 240px;
    height: 240px;
    background: radial-gradient(circle, rgba(42, 110, 170, 0.16), transparent 70%);
    z-index: 0;
    pointer-events: none;
}

.matiere-reseaux > * {
    position: relative;
    z-index: 1;
}

.matiere-reseaux h2 {
    font-size: 2rem;
    font-weight: 700;
    line-height: 1.3;
    margin-bottom: 25px;
    color: #1f4f7a;
    position: relative;
    padding-bottom: 14px;
    letter-spacing: 0.3px;
}

.matiere-reseaux h2::after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 110px;
    height: 4px;
    background: linear-gradient(to right, #2a6eaa, #00d4ff);
    border-radius: 999px;
}

.matiere-reseaux h3 {
    margin-top: 38px;
    margin-bottom: 16px;
    font-size: 1.25rem;
    font-weight: 600;
    color: #2a6eaa;
    letter-spacing: 0.2px;
}

.matiere-reseaux p {
    font-size: 1.02rem;
    line-height: 1.9;
    margin-bottom: 18px;
    color: #314d68;
    text-align: justify;
}

.matiere-reseaux ul {
    margin-top: 20px;
    margin-bottom: 20px;
    padding-left: 0;
}

.matiere-reseaux li {
    background: rgba(42, 110, 170, 0.06);
    border-left: 4px solid #2a6eaa;
    border-radius: 12px;
    padding: 14px 16px 14px 18px;
    margin-bottom: 12px;
    list-style: none;
    color: #314d68;
    position: relative;
}

.matiere-reseaux img {
    width: 100%;
    max-width: 900px;
    display: block;
    margin: 0 auto 30px auto;
    border-radius: 18px;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
    border: 1px solid rgba(255,255,255,0.65);
    transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.matiere-reseaux img:hover {
    transform: scale(1.02);
    box-shadow: 0 18px 38px rgba(0, 0, 0, 0.24);
}

.matiere-reseaux strong {
    color: #1d5d96;
    font-weight: 700;
}
</style>
</head>
<?php include '../php/header.php'; ?>

<body>
    ### Réseaux : L'Infrastructure de la Communication Globale 

    <div class="matiere-reseaux">
        <h2>Réseaux Informatiques : Architectures, Protocoles Internet et Sécurité des Systèmes Distribués</h2>
        <img src="../images/reseaux.jpg" alt="Infrastructure Réseau et Cloud" style="width: 100%; max-width: 800px; height: 400px; object-fit: cover; border-radius: 8px;">

        <p>
            La matière Réseaux permet d'explorer en profondeur les principes fondamentaux qui régissent la communication entre ordinateurs, serveurs et objets connectés au sein d'infrastructures locales ou globales comme Internet, en étudiant les architectures réseau, les modèles de référence tels que le modèle OSI et le modèle TCP/IP, ainsi que les protocoles essentiels qui permettent l'échange fiable des données, notamment IP pour l'adressage des machines, TCP et UDP pour le transport des informations, ou encore HTTP et DNS pour le fonctionnement des services web, tout en apprenant à comprendre le rôle des routeurs, commutateurs et pare-feu dans l'organisation et la sécurisation des communications, ce qui permet également d'aborder des notions avancées telles que la segmentation des réseaux, la gestion des flux de données, la qualité de service, la virtualisation des infrastructures ou encore les bases de la cybersécurité appliquée aux communications numériques, compétences aujourd'hui indispensables dans un contexte où les systèmes informatiques reposent largement sur des architectures distribuées et interconnectées nécessitant fiabilité, performance et sécurité. 🔗
        </p>

        <h3>Découpage Méthodologique de l'Apprentissage (Bloc de 5 Heures)</h3>
        <p>
            Le cours de Réseaux est une exploration du "système nerveux" mondial. Une session de 5 heures est un équilibre entre la physique du signal et la logique des protocoles.
        </p>
        <p>
            <strong>0h00 - 1h30 : L'Ingénierie des Protocoles (Théorie).</strong> Cette première phase est dédiée à l'analyse des couches OSI. On étudie comment une donnée brute est encapsulée à chaque étape du voyage. On s'immerge dans la couche 3 (Réseau) pour comprendre le routage IP, le découpage en sous-réseaux (VLSM) et les protocoles de routage dynamique comme OSPF ou BGP (le protocole qui fait tenir Internet). On passe ensuite à la couche 4 (Transport) pour analyser la fiabilité du protocole TCP face à la rapidité brute de l'UDP. C'est ici que l'étudiant comprend pourquoi sa vidéo YouTube peut être fluide malgré une connexion instable.
        </p>
        <p>
            <strong>1h30 - 4h00 : Simulation, Configuration et Lab (Pratique).</strong> Les étudiants passent sur machine. En utilisant des simulateurs de qualité industrielle (Cisco Packet Tracer, GNS3), ils doivent bâtir une infrastructure complète. Cela inclut la configuration de commutateurs (VLANs, Spanning Tree Protocol pour éviter les boucles), le paramétrage de routeurs, la mise en place de serveurs DHCP pour l'automatisation de l'adressage, et de serveurs DNS pour

        <hr>

        <strong>### 2. Réseaux : L'Infrastructure de la Communication Globale</strong>

    <div class="matiere-reseaux">
        <h2>Réseaux : Architectures, Protocoles et Sécurisation</h2>
        <img src="../images/reseaux2.jpg" alt="Réseaux Informatiques" style="width: 100%; max-width: 800px; height: 400px; object-fit: cover; border-radius: 8px;">

        <p>
            La matière Réseaux permet d'explorer en profondeur les principes fondamentaux qui régissent la communication entre ordinateurs, serveurs et objets connectés au sein d'infrastructures locales ou globales comme Internet, en étudiant les architectures réseau, les modèles de référence tels que le modèle OSI et le modèle TCP/IP, ainsi que les protocoles essentiels qui permettent l'échange fiable des données, notamment IP pour l'adressage des machines, TCP et UDP pour le transport des informations, ou encore HTTP et DNS pour le fonctionnement des services web, tout en apprenant à comprendre le rôle des routeurs, commutateurs et pare-feu dans l'organisation et la sécurisation des communications, ce qui permet également d'aborder des notions avancées telles que la segmentation des réseaux, la gestion des flux de données, la qualité de service, la virtualisation des infrastructures ou encore les bases de la cybersécurité appliquée aux communications numériques, compétences aujourd'hui indispensables dans un contexte où les systèmes informatiques reposent largement sur des architectures distribuées et interconnectées nécessitant fiabilité, performance et sécurité. 🔗
        </p>

        <h3>Découpage pédagogique d'un bloc de 5 heures</h3>
        <p>
            Le module de Réseaux alterne entre abstraction architecturale et configuration matérielle concrète. Une séance type commence par deux heures de théorie intensive sur les protocoles de communication. On y dissèque les sept couches du modèle OSI, en s'attardant particulièrement sur le routage (couche 3) et le transport (couche 4). L'étudiant apprend comment une requête part d'un navigateur, est encapsulée dans des segments TCP, puis des paquets IP, avant de devenir des trames Ethernet voyageant sur des câbles de cuivre ou de la fibre optique.
        </p>
        <p>
            Les deux heures suivantes sont consacrées à la pratique sur des outils de simulation professionnels (comme Cisco Packet Tracer) ou sur du matériel physique. L'étudiant doit configurer des routeurs et des commutateurs (switches), mettre en place des réseaux locaux virtuels (VLAN) pour isoler les flux d'une entreprise, et paramétrer des serveurs DHCP et DNS. La dernière heure est dédiée à l'analyse de trafic "réel". En utilisant le logiciel Wireshark, les étudiants capturent les paquets circulant sur le réseau de la salle pour observer, en temps réel, comment les machines "négocient" leur connexion et comment les données transitent, parfois en clair, soulignant ainsi l'importance cruciale du chiffrement.
        </p>

        <h3>Système d'évaluation et validation des compétences</h3>
        <p>
            L'évaluation en Réseaux combine théorie pure et expertise technique. Les étudiants passent des examens écrits (30% de la note) focalisés sur le calcul d'adressage IP (Subnetting) et l'analyse de scénarios de routage. Une erreur d'un seul bit dans un masque de sous-réseau peut rendre un réseau entier injoignable, la notation est donc d'une précision chirurgicale. Une part importante de la note (40%) provient des Travaux Pratiques notés, où l'étudiant doit construire une infrastructure réseau complète répondant à un cahier des charges spécifique en moins de deux heures. Enfin, un projet de groupe ou une étude de cas (30%) demande de concevoir l'architecture réseau sécurisée d'une entreprise fictive, incluant la gestion des pare-feu (Firewalls) et des accès distants (VPN).
        </p>

        <h3>Conseils stratégiques pour l'excellence académique</h3>
        <p>
            La clé du succès en Réseaux est la rigueur mathématique alliée à une vision systémique. L'étudiant doit impérativement maîtriser le binaire et les puissances de 2, car tout l'adressage mondial repose sur ces bases. Une autre clé est la curiosité : il ne suffit pas de savoir qu'un site s'affiche, il faut chercher à comprendre le chemin parcouru. Utiliser quotidiennement les outils de diagnostic de base (ping, traceroute, nslookup) permet de transformer des concepts abstraits en réflexes professionnels. Enfin, il est conseillé de travailler en groupe, car le réseau est par définition une matière de collaboration où l'on apprend beaucoup en tentant de résoudre les problèmes de connectivité de ses pairs.
        </p>

        <h3>Impact et utilité dans la société technologique</h3>
        <p>
            Le réseau est le système nerveux du monde moderne. Sans ingénieurs réseaux, il n'y aurait ni Cloud, ni streaming, ni transactions bancaires sécurisées. Cette matière prépare aux métiers de l'administration système, de l'architecture Cloud (AWS, Azure) et de la cybersécurité. Dans un monde où la souveraineté numérique est devenue un enjeu politique majeur, savoir maîtriser ses propres infrastructures réseaux est une compétence stratégique. Que ce soit pour déployer la 5G, gérer les serveurs de jeux vidéo mondiaux ou protéger les données sensibles d'un hôpital, les principes appris dans ce cours sont les fondations de notre liberté de communiquer.
        </p>
    </div>

</body>

<?php include '../php/footer.php'; ?>
</html>