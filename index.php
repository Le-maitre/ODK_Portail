<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portail ODK</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    header {
      height: 100vh;
      width: 100vw; 
      background-image: url(img/220628_S_BERNARDO_03-2.png);
      background-size: cover; 
      
      .navbar .nav-links ul li ul{
  display: none;
  position: absolute;
  float: none;
  left: 0;
  width: 200px;
  background-color: black;
  color: white;
}

.navbar .nav-links ul li:hover ul {
  display: block;
}
table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    tr:hover {
      background-color: #f5f5f5;
      cursor: pointer;
    }
  }
  
  </style>
</head>
<body>
  <header>
    <nav class="navbar">
      <img src="img/logo_orange_blanco-2.png" alt="Logo">
      <div class="nav-links">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li>
            <a href="#">Promotion +</a>
            <ul>
              <li><a href="?promotion=P1">Promotion 1</a></li>
              <li><a href="?promotion=P2">Promotion 2</a></li>
              <li><a href="?promotion=P3">Promotion 3</a></li>
            </ul>
          </li>
          <li><a href="inscription.php">Add +</a></li>
          <li><a href="#">Contact</a></li>
          <li><a href="#"><i class='bx bx-user'></i></a></li>
        </ul>
      </div>
    </nav>

</header>
  <?php
    $conn= new mysqli('localhost','root','','portail_odk');
    $req = "";
    if(isset($_GET['promotion']) && !empty($_GET['promotion'])){
      $req = " Where promotion  = '".$_GET['promotion']."'";
    }
    $select_query = "SELECT * FROM apprenants".$req;
   
    $result_query = mysqli_query($conn, $select_query);
    
    if (mysqli_num_rows($result_query) > 0) {
      echo "<table>";
      echo "<tr><th>Matricule</th><th>Nom</th><th>Prénom</th><th>Âge</th><th>Date de naissance</th><th>Email</th><th>Téléphone</th><th>Photo</th><th>Promotion</th><th>Année de certification</th></tr>";
    
      while ($row = mysqli_fetch_assoc($result_query)) {
        echo "<tr>";
        echo "<td>" . $row['matricule'] . "</td>";
        echo "<td>" . $row['nom'] . "</td>";
        echo "<td>" . $row['prenom'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['date_naissance'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telephone'] . "</td>";
        echo "<td><img src=photos/" . $row['photo']." width=30px></td>";
        echo "<td>" . $row['promotion'] . "</td>";
        echo "<td>" . $row['annee_certification'] . "</td>";
        echo "</tr>";
      }
    
      echo "</table>";
    } else {
      echo "Aucun apprenant trouvé.";
    }    
  ?>
  <footer>
    <div class="footer-content">
      <div class="footer-logo">
        <img src="img/logo_orange_blanco-2.png" alt="Logo">
      </div>
      <div class="footer-links">
        <a href="#">© 2023 ODK. Tous droits réservés</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">Politique de cookie</a>
        <a href="#">Mentions légales</a>
      </div>
    </div>
  </footer>
</body>
</html>
