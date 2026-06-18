<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=paladi', 'root', '');

$pseudo = $_POST['pseudo'];
$mdp = $_POST['mdp'];

$req = $db->prepare('SELECT * FROM utilisateurs WHERE pseudo = ?');
$req->execute([$pseudo]);
$user = $req->fetch();

if ($user && password_verify($mdp, $user['mdp'])) {
    $_SESSION['pseudo'] = $pseudo;
    echo "Bienvenue " . $pseudo . " sur Paladi !";
} else {
    echo "Identifiants incorrects.";
}
?>
