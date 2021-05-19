<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Formulaire_etudiant.css">
    <title>Document</title>
</head>
<body>
    <div class="FE" >
<form method = "post" action="../../AdminEtudiant.php">
    
    Id:<input type = "text" class = "input" name="id" value="<?php echo $_GET['id']; ?>" readonly >
    </br></br>
    
    Nom:<input type = "text" class = "input" name = "n_nom" value = "<?php echo $_GET['nom']; ?>" >
    </br></br>
    
    Prenom:<input type = "text" class = "input" name = "n_prenom" value = "<?php echo $_GET['prenom']; ?>">
    </br></br>
    
    Email:<input type = "email" name = "n_email" value = "<?php echo $_GET['email']; ?>">
    </br></br>
    
    Telephone:<input type = "text" name = "n_tel" value = "<?php echo $_GET['tel']; ?>">
    </br></br>

    Mot de passe:<input type = "password" class = "input" name = "n_mot_de_passe" value = "<?php echo $_GET['mot_de_passe']; ?>">
    </br></br>

    <input type = "submit" value ="Modifier">
    
    </form>
    <a href="../../AdminEtudiant.php">Annuler la modification</a>

    </div>
</body>
</html>