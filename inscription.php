<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Inscription - Portail ODK</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Inscription</h2>
    <form id="inscriptionForm" action="apprenants.php" method="post" enctype="multipart/form-data">
      <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
      </div>
      <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required>
      </div>
      <div>
        <label for="age">Âge :</label>
        <input type="number" id="age" name="age" required>
      </div>
      <div>
        <label for="dateNaissance">Date de naissance:</label>
        <input type="date" id="dateNaissance" name="dateNaissance" required>
      </div>
      <div>
        <label for="email">Adresse e-mail :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div>
        <label for="telephone">Numéro de téléphone :</label>
        <input type="tel" id="telephone" name="telephone" required>
      </div>
      <div>
        <label for="photo">Photo :</label>
        <input type="file" id="photo" name="photo" accept="image/*" required>
      </div>
      <div>
        <label for="promotion">Promotion :</label>
        <select id="promotion" name="promotion" required>
          <option value="">Sélectionner une promotion</option>
          <option value="P1">Promotion 1</option>
          <option value="P2">Promotion 2</option>
          <option value="P3">Promotion 3</option>
        </select>
      </div>
      <div>
        <label for="annee_certification">Année de certification :</label>
        <input type="text" id="annee_certification" name="annee_certification" required>
      </div>
      <div>
        <input type="submit" value="Enregistrer">
      </div>
    </form>
  </div>
  <div id="message" style="display: none;"></div>

  <!-- <script src="script.js"></script> -->
</body>
</html>
