<?php
$host = "localhost";
$user = "root";
$database = "birthdaywebsite";
$password = "";

$connection = new mysqli($host, $user, $password, $database);

// Vérifier la connexion
if ($connection->connect_error) {
    die("Erreur de connexion à la base de données : " . $connection->connect_error);
}

// Requête pour récupérer le nombre total d'invités
$sql = "SELECT SUM(Nombre) as totalGuests FROM birthday";
$resultat = $connection->query($sql);

// Vérifier si la requête a réussi
if ($resultat) {
    $donnees = $resultat->fetch_assoc();
    $nombreTotal = $donnees['totalGuests'];
    echo $nombreTotal;
} else {
    echo "Erreur lors de la récupération du nombre total d'invités : " . $connection->error;
}

// Fermer la connexion à la base de données
$connection->close();


?>
