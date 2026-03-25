<?php
    session_start();

    $utilisateurs = [
        "eleve1" => ["password" => "eleve123", "role" => "eleve"],
        "eleve2" => ["password" => "eleve123", "role" => "eleve"],
        "Test-prof"  => ["password" => "prof123", "role" => "enseignant"]
    ];

    $erreur = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        if (isset($utilisateurs[$user]) && $utilisateurs[$user]['password'] === $pass) {
            $_SESSION['auth'] = $user;
            $_SESSION['role'] = $utilisateurs[$user]['role'];

            if ($_SESSION['role'] === "enseignant") {
                header("Location: ../php/gestion.php");
            } else {
                header("Location: formulaire.php");
            }
            exit();
        } else {
            $erreur = "Identifiants incorrects.";
        }
    }
?>