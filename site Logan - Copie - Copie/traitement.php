<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Bienvenue dans le club des supporters" . "<br>";
    echo $_POST["nom"] . "<br>";
    echo $_POST["prenom"] . "<br>";
    echo $_POST["email"] . "<br>";
    echo $_POST["telephone"] . "<br>";
    echo $_POST["ville"] . "<br>";
    echo nl2br($_POST["message"]) . "<br>";
}
?>