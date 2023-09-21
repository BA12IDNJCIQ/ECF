<?php
// filtrer.php

$host = 'localhost';
$db   = 'nom_base';
$user = 'utilisateur';
$pass = 'mot_de_passe';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);

$marque = $_GET['marque'];
$prixMax = $_GET['prixMax'];

$query = "SELECT * FROM voitures WHERE 1=1"; 

if ($marque !== 'toutes') {
    $query .= " AND marque = :marque";
}
if ($prixMax !== '') {
    $query .= " AND prix <= :prixMax";
}

$stmt = $pdo->prepare($query);

if ($marque !== 'toutes') {
    $stmt->bindParam(':marque', $marque);
}
if ($prixMax !== '') {
    $stmt->bindParam(':prixMax', $prixMax);
}

$stmt->execute();

$resultats = $stmt->fetchAll();

foreach ($resultats as $voiture) {
    echo $voiture['marque'] . " - " . $voiture['prix'] . "<br>";
}
?>