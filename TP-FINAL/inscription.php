<?php
// Liaison avec la bdd, declaration des variables et gestion des erreurs 
// Variable : conteneur qui va nous permettre de stocker des informations de différents types (texte, entier, booléen, etc.).
// Elles ne servent qu'à stocker des informations temporairement.
// Fonction : sous-programme qui permet d'effectuer un ensemble d'instructions par simple appel de la fonction dans le corps du programme principal.

include('db.php'); //inclure la page db.php
if(isset($_POST['enregistrer'])){  // si toute les valeurs sont fourni, isset valide le form 
  $nom = $_POST['nom']; // déclaration de la variable nom en fonction des données rentrées dans le form
  $prenom = $_POST['prenom']; // déclaration de la variable prenom en fonction des données rentrées dans le form 
  $email = $_POST['email']; // déclaration de la variable email en fonction des données rentrées dans le form
  $password = $_POST['password']; // déclaration de la variable  password en fonction des données rentrées dans le form
  

$req = "INSERT INTO users(nom, prenom, email, password) VALUES(?,?,?,?)"; // requete pour insérer un nouvel utilisateur en fonction des valeurs saisient dans le form
$execute = $pdo->prepare($req); // prépare la requete à la bdd
$stm = $execute->execute([$nom, $prenom, $email, $password]); // envoi la requete 
echo "<center>Bravo BG t'es inscrit !</center>"; //echo sert à afficher des données

// INSERER UN NEW USER : $requete = $bdd->exec('INSERT INTO users(nom, prenom, profession) VALUES("Aumont","Guillaume","Punk a Chien")');
// MODIFIER UN USER : $requete = $bdd->exec('UPDATE users SET profession = "pecheur" WHERE prenom = "mathys"');
// SUPPRIMER UN USER : $requete = $bdd->exec('DELETE FROM users WHERE prenom = "Guillaume"');
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
     <link rel="stylesheet" href="assets/bootstrap.min.css">
     <link rel="stylesheet" href="assets/all.min.css">
	<title>Home</title>
</head>
<body background="">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">société general</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="inscription.php">inscription</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
	<form action="" method="post">
       <div class="container-fluid">
       	  <div class="p-4  mx-auto shadow rounded" style="width:100%; max-width:340px; margin-top: 50px;">
      
       	  	<img src="assets/images/ca.png" class=" =  rounded-circle mx-auto d-block" style="width: 140px;">
       	  	<h3>creation de compte</h3>
             <p><font color="red" span class="error">* champ obligatoire</span></p>
       	  	 <input type="text" class="my-2 form-control" placeholder="Nom *" name="nom" required>
       	  	 <input type="text" class="my-2 form-control" placeholder="Prénom *" name="prenom" required>
				     <input type="email" class="my-2 form-control" placeholder="Email *" name="email" required>
				     <input type="password" class="my-2 form-control" placeholder="Mot de passe *" name="password" required>
				
       	   
       	  	 <button class=" btn btn-primary" type="submit" name="enregistrer">Enregistrer</button>
       	  </div>
		
       </div>
	   </form>
	   <script src="assets/bootstrap.bundle.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
</body>
</html> 