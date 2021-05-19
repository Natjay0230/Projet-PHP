<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/Formulaire_etudiant.css">
    <title>Inscription</title>
</head>
<body>
    <div class="FE">
            <h1>Inscrire nouveaux éleves</h1>

            <form method = "post" action="">
        
            <input type = "text" class = "input" name = "nom_e" placeholder = "Nom"> </br></br>
        
            <input type = "text" class = "input" name = "prenom_e" placeholder = "Prenom"> </br></br>
            
            Sexe: H<input class="sexe" type = "radio" name ="sexe_e" value = "homme"> 
                  F<input class="sexe" type = "radio" name = "sexe_e" value = "femme"> 
                  </br></br>
            
            <input type = "date" name = "date_naissance" placeholder = "Date de Naissance"> </br></br>
            
            <input type = "email" name = "email_e" placeholder = "Email"> </br></br>
            
            <input type = "text" name = "tel_e" placeholder = "Telephone"> </br></br>

            <input type = "password" class = "input" name = "mot_de_passe_e" placeholder = "Mot de Passe"> </br></br>
            
            Image: <input class="b-b" type = "file" name = "photo_e">  

            <input class="b-b" type = "submit" value ="Enregistrez">
            </form>
    </div>
</body>
</html>