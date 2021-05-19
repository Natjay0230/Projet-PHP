<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envoye message</title>
</head>
<body>
<form method = "post" action="">
<a href="Message_recu.php">Boite de reception</a>
</br></br>

Nouveau message:</br><input type = "text" class = "input" name = "objet_m" placeholder = "Objet">
</br></br>

<textarea name="contenu_m" placeholder = "Votre message ici" rows="10" cols="40"></textarea>     
</br></br>

Destinataire:</br>
<?php foreach($destinataire as $dest): ?>
<input type ="checkbox" name = "email_dest[]" value = "<?php echo $dest['Email_e']; ?>">
<?php echo $dest['Nom_e'].' '.$dest['Prenom_e']; ?></br>
<?php endforeach;  ?>
</br>

<input type = "submit" class = "input" value = "Envoyer">
</br></br>

</form>
</body>
</html>