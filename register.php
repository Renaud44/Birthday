<?php
$host = "localhost";
$user = "root";
$database = "birthdaywebsite";
$password = "";

$connection = new mysqli($host, $user, $password, $database);

//Code pour vérifier si on est bien connecté à la base de donnée
if($connection->connect_error){

    echo("ERROR");

}
else{
    echo("Vous êtes connecté à la base de donnée");
}

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nom = $_POST['nom'];
    $nombre = $_POST['nombre'];

    $requete = "INSERT INTO birthday (Nom, Nombre) VALUES 
                                          ('$nom', '$nombre')";
    $connection->query($requete);

    

    // Rediriger vers la page principale après l'inscription
    header("Location: index.php");
    exit();
}


?>