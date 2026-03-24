<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EFREI Informatique</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<body>

<?php include '../php/header.php'; ?>    

<main>
    <section class="equipe-enseignante">
        <h1>Équipe enseignante :</h1>

        <div class="caroussel">
            <div class="caroussel-rail">
                <div class="card">
                    <h2>Langage de programmation C</h2>
                    <div class="prof">
                        <img src="../Photo Profs/Mourad.jpg" width="200" height="200" alt="Mourad KMIMECH">
                        <div>
                            <h3>Mourad KMIMECH</h3>
                            <p><strong>Professeur de programmation en C</strong></p>
                            <p><strong>Email :</strong> mourad.kmimech@efrei.fr</p>
                        </div>
                    </div>

                    <div class="prof">
                        <img src="../Photo Profs/unknown.jpg" width="200" height="200" alt="Kamel Chabchoub">
                        <div>
                            <h3>Kamel CHABCHOUB</h3>
                            <p><strong>Professeur de Programmation en C</strong></p>
                            <p><strong>Email :</strong> kamel.chabchoub@efrei.fr</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h2>Réseaux</h2>
                    <div class="prof">
                        <img src="../Photo Profs/Yaovi.jpg" width="200" height="200" alt="Yaovi SOGLO">
                        <div>
                            <h3>Yaovi SOGLO</h3>
                            <p><strong>Professeur de Réseaux</strong></p>
                            <p><strong>Email :</strong> yaovi.soglo@efrei.fr</p>
                        </div>
                    </div>

                    <div class="prof">
                        <img src="../Photo Profs/GUIFO.jpg" width="200" height="200" alt="Yvan Guifo">
                        <div>
                            <h3>Yvan Guifo</h3>
                            <p><strong>Professeur de Réseaux</strong></p>
                            <p><strong>Email :</strong> yvan.guifo-fodjo@efrei.fr</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h2>Web Dynamique</h2>
                    <div class="prof">
                        <img src="../Photo Profs/Mohamed.jpg" width="200" height="200" alt="Mohamed HAMIDI">
                        <div>
                            <h3>Mohamed HAMIDI</h3>
                            <p><strong>Professeur de Web Dynamique</strong></p>
                            <p><strong> Email :</strong> mohamed.hamidi@efrei.fr</p>
                        </div>
                        
                    </div>
                    <div class="prof">
                        <img src="../Photo Profs/Rado.jpg" width="200" height="200" alt="Rado Rakotonarivo Rado">
                        <div>
                            <h3>Rakotonarivo Rado</h3>
                            <p><strong>Professeur de Web Dynamique</strong></p>
                            <p><strong>Email :</strong> rado.rakotonarivo@efrei.fr</p>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <h2>Bases de Données</h2>
                    <div class="prof">
                        <img src="../Photo Profs/Lena.jpg" width="200" height="200" alt="Lena TREBAUL">
                        <div>
                            <h3>Lena TREBAUL</h3>
                            <p><strong>Professeur de Bases de Données</strong></p>
                            <p><strong> Email :</strong> lena.trebaul@efrei.fr</p>
                        </div>
                    </div>
                    <div class="prof">
                        <img src="../Photo Profs/Cherifa.jpg" width="200" height="200" alt="Cherifa Ben Khelil">
                        <div>
                            <h3>Cherifa Ben Khelil</h3>
                            <p><strong>Professeur de Bases de Données</strong></p>
                            <p><strong>Email :</strong> cherifa.ben-khelil@efrei.fr</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn prev" onclick="move(-1)"> < </button>
            <button class="btn next" onclick="move(1)"> > </button>
        </div>
    </section>
</main>

<?php include '../php/footer.php'; ?>

</body>
</html>