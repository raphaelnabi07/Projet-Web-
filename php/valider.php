<?php
require_once 'db_config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //Securité passage indirect
    $stmt = $pdo->prepare("UPDATE permanences SET statut = '✓ Validé' WHERE id = ?");
    $stmt->execute([$id]);
    
}
?>