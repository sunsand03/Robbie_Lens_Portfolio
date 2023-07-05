<?php 

// Vérification si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Récupération des données du formulaire
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Affichage des données
    echo "Nom : " . $nom . "<br>";
    echo "Email : " . $email . "<br>";
    echo "Message : " . $message . "<br>";
}

?>
