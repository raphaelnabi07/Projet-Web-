<?php
    session_start();
    require_once '../php/db_config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Espace Gestion - Visualisation brute</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>
</head>

<?php include '../php/header.php'; ?>

<body class="body-gestion">
    <h2 class="h2-gestion">Interface Enseignant - Validation des Permanences</h2>
    <div class="table-container">
        <div class="user-info">
            Connecté en tant que : <strong><?php echo ($_SESSION['auth']); ?></strong> |<a href="../php/logout.php" class="logout-link">Déconnexion</a>
        </div>        
        <table class="table-gestion">
            <thead>
                <tr class="tr-gestion">
                    <th class="th-gestion">Élève</th>
                    <th class="th-gestion">Matière</th>
                    <th class="th-gestion">Date</th>
                    <th class="th-gestion">Heure</th>
                    <th class="th-gestion">Format</th>
                    <th class="th-gestion">Statut</th>
                    <th class="th-gestion">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                //stocke($stmt) le resultat de l'execution de la commande(query()) 
                $stmt = $pdo->query("SELECT * FROM permanences ORDER BY date_permanence ASC, heure_souhaitee ASC");
                while($row = $stmt->fetch()): ?>
                    <tr id="row-<?php echo $row['id']; ?>">
                        <td class="td-gestion"><?php echo ($row['nom_eleve']); ?></td>
                        <td class="td-gestion"><?php echo ($row['matiere']); ?></td>
                        <td class="td-gestion"><?php echo ($row['date_permanence']); ?></td>
                        <td class="td-gestion"><?php echo ($row['heure_souhaitee']); ?></td>
                        <td class="td-gestion"><?php echo ($row['format_seance']); ?></td>
                        <td class="td-gestion" id="statut-<?php echo $row['id']; ?>">
                            <?php 
                                $etat = isset($row['statut']) ? $row['statut'] : 'En attente';
                                $couleur = ($etat == '✓ Validé') ? '#28a745' : '#ffc107';
                                
                                echo "<span class='status-badge' style='color: $couleur; font-weight: bold;'>";
                                echo ($etat);
                                echo "</span>";
                            ?>
                        </td>
                        <td class="td-gestion">
                            <?php if ($row['statut'] !== '✓ Validé'): ?>
                                <button class="btn-v" onclick="valider(<?php echo $row['id']; ?>)">✓ Valider</button>
                            <?php endif; ?>
                            <button class="btn-s" onclick="supprimer(<?php echo $row['id']; ?>)">✖ Supprimer</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>









    <script>
    function valider(id) {
        fetch('../php/valider.php?id=' + id);
        const cellule = document.getElementById('statut-' + id);
        if (cellule) {
            cellule.innerHTML = '<span style="color: #28a745; font-weight: bold;">✓ Validé</span>';
        }
        const btn = document.querySelector(`#row-${id} .btn-v`);
        if (btn) {
            btn.style.display = 'none';
        }
    }


    function supprimer(id) {
        if(confirm("Supprimer cette demande ?")) {
            fetch('../php/supprimer.php?id=' + id).then(() => {
                document.getElementById('row-' + id).remove();
            });
        }
    }
    </script>









</body>

<?php include '../php/footer.php'; ?>

</html>