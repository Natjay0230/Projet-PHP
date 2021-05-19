<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Formulaire_cours.css">
    <title>Formulaire_cours</title>
</head>
<body>

<div class="FC">
    <form method="post">
    
    <h1>Formulaire du cours</h1>
    Nom du cours:<input type="text" name ="nom_module" placeholder ="Entrez le nom du cours ici" >
    
    </br></br>

    <h3>Categorie du cours:</h3>

    <?php foreach($categorie as $cat): ?>
    <?php echo $cat['Nom_categorie']; ?>
    <input type="radio" name ="id_categorie" value ="<?php echo $cat['id_categorie']; ?>" >
    </br>
    <?php endforeach; ?>

    <h3>Nom du Professeur:</h3>
    <?php foreach($resultat as $res): ?>
    <?php echo $res['Nom_p']." ".$res['Prenom_p']; ?>
    <input type="radio" name ="id_professeur" value ="<?php echo $res['id_professeur']; ?>" >
    </br>
    <?php endforeach;  ?>
    </br></br>

    <input type="submit" value="Enregistrez">

    </form>
    </div>
</body>
</html>