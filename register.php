<?php
$db = new PDO('mysql:host=localhost;dbname=paladi', 'root', '');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

    $req = $db->prepare('INSERT INTO utilisateurs(pseudo, mdp) VALUES(?, ?)');
    if ($req->execute([$pseudo, $mdp])) {
        echo "Compte créé ! <a href='index.php'>Retour</a>";
    }
}
?>
