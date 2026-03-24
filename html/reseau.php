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