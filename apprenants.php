<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$date_naissance = $_POST['date_naissance'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$photo = $_FILES['photo']['name'];
$promotion = $_POST['promotion'];
$annee_certification = $_POST['annee_certification'];

// Générer le matricule
$promotion = "P" . rand(1, 3);
$caracteres = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
$matricule = $promotion;
for ($i = 0; $i < 4; $i++) {
    $matricule .= $caracteres[rand(0, strlen($caracteres) - 1)];
}

// Vérifier et déplacer le fichier de la photo vers un répertoire de destination
$uploadDir = 'photos/';
$uploadFile = $uploadDir . basename($_FILES['photo']['name']);
if (move_uploaded_file($_FILES['photo']['tmp_name'], $uploadFile)) { 
 // Connexion à la base de données (exemple avec MySQLi)
$conn = new mysqli('localhost', 'root', '', 'portail_odk');

// Vérifier la connexion
if ($conn->connect_error) {
 die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
// Préparer la requête d'insertion des données dans la table
$sql = "INSERT INTO apprenants (matricule, nom, prenom, age, date_naissance, email, telephone, photo, promotion, annee_certification)
VALUES ('$matricule', '$nom', '$prenom', '$age', '$date_naissance', '$email', '$telephone', '$photo', '$promotion', '$annee_certification')";

// Exécuter la requête
if ($conn->query($sql) === TRUE) {
// Redirection vers une page de succès
  header("Location:index.php");
 // Fermer la connexion à la base de données
  $conn->close();
  exit();
} else {
echo "Erreur lors de l'insertion des données : " . $conn->error;
}

} else {
  echo "Une erreur s'est produite lors du téléchargement de la photo.";
}

?>
