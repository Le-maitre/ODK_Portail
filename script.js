document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    // Validate form fields
    var matricule = document.getElementById('matricule').value;
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var age = document.getElementById('age').value;
    var dateNaissance = document.getElementById('dateNaissance').value;
    var email = document.getElementById('email').value;
    var telephone = document.getElementById('telephone').value;
    var photo = document.getElementById('photo').value;
    var promotion = document.getElementById('promotion').value;
    var anneeCertification = document.getElementById('anneeCertification').value;
  
    var errorMessages = [];
  
    if (matricule === '') {
      errorMessages.push('Le champ Matricule est requis.');
    }
  
    if (nom === '') {
      errorMessages.push('Le champ Nom est requis.');
    }
  
    if (prenom === '') {
      errorMessages.push('Le champ Prénom est requis.');
    }
  
    if (age === '' || isNaN(age)) {
      errorMessages.push('Le champ Âge est invalide.');
    }
  
    // Add validations for other fields here...
  
  });
  