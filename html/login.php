<?php include '../php/session.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Mon Portail Scolaire</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<?php include '../php/header.php'; ?>

<body>
    <main class="login-container">
        <div class="login-card">
            <h2>Identification</h2>
            
            <?php if($erreur): ?>
                <div class="error-msg">
                    <?php echo $erreur; ?>
                </div>
            <?php endif; ?>

            <form action="login.php" method="POST">
                <label for="username">Utilisateur</label>
                <input type="text" id="username" name="username" placeholder="Ex: Bimen" required>
                
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="••••••••" required>
                
                <button type="submit">Se connecter</button>
            </form>
        </div>
    </main>
</body>

<?php include '../php/footer.php'; ?>

</html>