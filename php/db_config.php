<?php
$host = '127.0.0.1';
$user = 'root';
$pass = 'root'; 
$port = 3307;
$dbname = 'ecole_db';

$pdo = new PDO("mysql:host=$host;port=$port;charset=utf8", $user, $pass);

$pdo->exec("CREATE DATABASE IF NOT EXISTS `$dbname` CHARACTER SET utf8");

$pdo->exec("USE `$dbname`");

$sql = "CREATE TABLE IF NOT EXISTS permanences (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom_eleve VARCHAR(100) NOT NULL,
    matiere VARCHAR(100) NOT NULL,
    date_permanence DATE NOT NULL,
    heure_souhaitee TIME NOT NULL,
    format_seance VARCHAR(50) NOT NULL,
    statut VARCHAR(20) DEFAULT 'En attente',
    date_demande TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

$pdo->exec($sql);

?>