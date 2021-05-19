<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message recue</title>
</head>
<body>
<a href="Envoye_message.php">Envoyer nouveau message</a>
<h2>Messages recues:</h2>
    <?php foreach($resultat as $res): ?>
    Objet message: <?php echo $res['Objet_m']; ?>
    </br>
    Expediteur: <?php echo $res['Nom_e'].' '.$res['Prenom_e']; ?>
    </br>
    Date et heure: <?php echo $res['Date_m']; ?>
    </br>
    Contenu:</br>
    <?php echo $res ['Contenu_m']; ?>
    </br></br>
    <?php endforeach; ?>

</body>
</html>