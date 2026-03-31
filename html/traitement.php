<?php
session_start();
require_once '../php/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $nom = $_SESSION['auth'];
    $matiere = $_POST['matiere'];
    $date = $_POST['date_permanence'];
    $heure = $_POST['heure'];
    $format = $_POST['format'];

    $sql = "INSERT INTO permanences (nom_eleve, matiere, date_permanence, heure_souhaitee, format_seance, statut) VALUES (?, ?, ?, ?, ?, 'En attente')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $matiere, $date, $heure, $format]);
}
?>
<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EFREI Informatique</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>

<style>

    .traitement {
        font-family: Arial, sans-serif;
        flex: 1; 
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 20px;
    }

    .mess-validation {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        text-align: center;
        max-width: 400px;
        width: 100%;
    }

    .traitement-resum {
        background: #f8f9fa;
        padding: 15px;
        border-radius: 5px;
        text-align: left;
        margin: 20px 0;
        border-left: 4px solid #28a745;
    }

    .btn-retour{
        color: #007bff;
        text-decoration: none;
        font-weight: bold;
    }
</style>

</head>

<?php include '../php/header.php'; ?>

<body>
    <main class="traitement">
        <div class="mess-validation">
            <span style="font-size: 40px;">✅</span>
            <h2>Demande enregistrée !</h2>
            
            <div class="traitement-resum">
                <strong>Récapitulatif :</strong><br>
                Matière : <?php echo ($_POST['matiere']); ?><br>
                Date : <?php echo ($_POST['date_permanence']); ?><br>
                Heure : <?php echo ($_POST['heure']); ?><br>
                Format : <?php echo ($_POST['format']); ?>
            </div>

            <p>Votre demande à bien été enregistrée.</p>
            <a href="../html/accueil.php" class="btn-retour">Retourner à l'accueil</a>
        </div>
    </main>
</body>
<?php include '../php/footer.php'; ?>

</html>