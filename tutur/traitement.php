<?php
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "test";
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);
if ($connexion->connect_error) {
    die("Erreur de connexion : " . $connexion->connect_error);
}

// Modification de la requête d'insertion pour exclure l'ID
$marque = $_POST['marque'];
$modele = $_POST['modele'];
$plaque = $_POST['plaque'];
$insert_query = "INSERT INTO test (marque, modele, plaque) VALUES ('$marque', '$modele', '$plaque')";

if ($connexion->query($insert_query) === TRUE) {
    echo "Données insérées avec succès.";
} else {
    echo "Erreur : " . $insert_query . "<br>" . $connexion->error;
}

// Modification de la requête de sélection pour inclure l'ID
$select_query = "SELECT id, marque, modele, plaque FROM test";
$result = $connexion->query($select_query);
$connexion->close();
?>