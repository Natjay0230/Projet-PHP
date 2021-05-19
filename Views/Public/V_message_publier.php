<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message publier</title>
</head>
<body>
<h2>Publications récentes</h2> 
    <?php foreach($resultat as $res): ?>
    Titre du post: <?php echo $res['Titre_post']; ?>
    </br>
    Expediteur: <?php echo $res['Nom_p'].' '.$res['Prenom_p']; ?>
    </br>
    Date et heure: <?php echo $res['Date_post']; ?>
    </br>
    Contenu:</br>
    <?php echo $res ['Contenu_post']; ?>
    </br></br>
    <?php endforeach; ?>
</body>
</html>