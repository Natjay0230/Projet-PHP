<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style_cours.css">
    <title>Cours</title>
</head>
<body>
    <?php foreach($resultat as $cours):?>
    
    <div class="cours">
        <a href ="Message_public.php?id_module=<?php echo $cours['id_module'];?>">
    Module: <?php echo $cours['Nom_module'];?></br>
    Professeur: <?php echo $cours['Nom_p'];?></br>
    Categorie: <?php echo $cours['Nom_categorie'];?></br>
    </a>

    </div>
    <?php endforeach; ?>
</body>
</html>