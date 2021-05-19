<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/menu.css">
    <title>Document</title>

</head>
<body>
<nav>
        <input type="checkbox"  id="check">
        <label for="check" class="checkbtn">
            <img src="Assets/images/pngegg.png" alt="Menu">
        </label>
        <label class="logo"><?php echo $_SESSION['email']; ?></label>
        <ul>

<li><a href="AcceuilPublic.php">Acceuil</a></li>
<li><a href="Cours.php">Cours</a></li>
<li><a href="Envoye_message.php">Message</a></li>
<li><a href="Deconnexion.php">Deconnexion</a></li>
    </ul>
    </nav>
</body>
</html>