<?php
    session_start();
    require_once '../php/db_config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande de Permanence - Espace Élève</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/script.js" defer></script>

    <style>
        .form-container {
            max-width: 700px;
            margin: 50px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 12px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.2);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .form-header {
            border-bottom: 2px solid #007bff;
            margin-bottom: 25px;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }

        select, input[type="time"], .btn-submit {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
        }

        .radio-group {
            display: flex;
            gap: 30px;
            padding: 10px 0;
        }

        .radio-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: normal;
        }

        .radio-item input {
            width: auto;
        }
        
        .btn-submit {
            background-color: #007bff;
            color: white;
            border: none;
            font-weight: bold;
            cursor: pointer;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #0056b3;
        }

        .form-group input[type="date"] {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-family: inherit; /* Utilise la même police que le reste */
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s, box-shadow 0.3s;
            background-color: #f9f9f9;
        }
    </style>

</head>
<?php include '../php/header.php'; ?>
<body>

    <main>
        <div class="form-container">
            <div class="user-info">
                Connecté en tant que : <strong><?php echo ($_SESSION['auth']); ?></strong>  |<a href="../php/logout.php" class="logout-link">Déconnexion</a>
            </div>

            <div class="form-header">
                <h2>Planifier une Permanence</h2>
            </div>

            <form action="traitement.php" method="POST">
                
                <div class="form-group">
                    <label for="matiere">Matière à travailler :</label>
                    <select id="matiere" name="matiere" required>
                        <option value="" disabled selected>-- Choisissez un module --</option>
                        <option value="BDD">Bases de Données</option>
                        <option value="Reseaux">Réseaux Informatiques</option>
                        <option value="Langage C">Programmation en Langage C</option>
                        <option value="Web">Développement Web Dynamique</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="date_permanence">Date souhaitée :</label>
                    <input type="date" id="date_permanence" name="date_permanence" required>

                    <label for="heure">Heure de passage souhaitée :</label>
                    <input type="time" id="heure" name="heure" required>
                </div>

                <div class="form-group">
                    <label>Format de la séance :</label>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="format" value="Individuel" checked> Individuelle
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="format" value="Groupé"> Groupé
                        </label>
                    </div>
                </div>

                <button type="submit" class="btn-submit">Valider ma demande</button>

                <div class="suivi-global" style="margin-top: 50px; background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    <h3 style="color: #007bff; border-bottom: 2px solid #f0f0f0; padding-bottom: 10px;">
                        📅 Toutes les permanences enregistrées
                    </h3>
                    <table style="width:100%; border-collapse: collapse; margin-top: 15px;">
                        <thead>
                            <tr style="background: #007bff; color: white;">
                                <th style="padding: 12px; text-align: left;">Élève</th>
                                <th style="padding: 12px; text-align: left;">Matière</th>
                                <th style="padding: 12px; text-align: left;">Date</th>
                                <th style="padding: 12px; text-align: left;">Heure</th>
                                <th style="padding: 12px; text-align: left;">Format</th>
                                <th style="padding: 12px; text-align: left;">Statut</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $stmt = $pdo->query("SELECT * FROM permanences ORDER BY date_permanence ASC, heure_souhaitee ASC");
                            
                            while($row = $stmt->fetch()) {
                                $statusColor = ($row['statut'] == '✓ Validé') ? '#28a745' : '#ffc107';
                                $statusText = ($row['statut'] == '✓ Validé') ? '✅ Validé' : '⏳ En attente';
                                
                                echo "<tr style='border-bottom: 1px solid #eee;'>";
                                echo "<td style='padding: 12px;'><strong>" . ($row['nom_eleve']) . "</strong></td>";
                                echo "<td style='padding: 12px;'>" . ($row['matiere']) . "</td>";
                                echo "<td style='padding: 12px;'>" . ($row['date_permanence']) . "</td>";
                                echo "<td style='padding: 12px;'>" . ($row['heure_souhaitee']) . "</td>";
                                echo "<td style='padding: 12px;'>" . ($row['format_seance']) . "</td>";
                                echo "<td style='padding: 12px; color: $statusColor; font-weight: bold;'>$statusText</td>";
                                echo "</tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>
    </main>
</body>

<?php include '../php/footer.php'; ?>

</html>