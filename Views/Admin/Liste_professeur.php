<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style_liste.css">
    <title>liste prof</title>
</head>
<body>
<h1 class="titre">Liste professeur</h1>
<table>
    <thead>
    <th>id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Mot de Passe</th>
    <th colspan="2">Action</th>
    </thead>
    <tbody class="body_liste">
    <?php 
    foreach($resultat as $_ligne){
            echo '<tr class="liste">';
            echo '<td>'.$_ligne['id_professeur'].'</td>';
            echo '<td>'.$_ligne['Nom_p'].'</td>';
            echo '<td>'.$_ligne['Prenom_p'].'</td>';
            echo '<td>'.$_ligne['Email_p'].'</td>';
            echo '<td>'.$_ligne['Tel_p'].'</td>';
            echo '<td>'.$_ligne['Mot_de_passe_p'].'</td>';
            echo '<td class="lien"> <a class="action suppr" href = "AdminProfesseur.php?action_suppr&id='.$_ligne['id_professeur'].'"> Supprimer </td>';
            echo '<td class="lien"> <a class="action modif" href = "Views/Admin/Modification_professeur.php?id='.$_ligne['id_professeur'].'
            &nom='.$_ligne['Nom_p'].'
            &prenom='.$_ligne['Prenom_p'].'
            &email='.$_ligne['Email_p'].'
            &tel='.$_ligne['Tel_p'].'
            &mot_de_passe='.$_ligne['Mot_de_passe_p'].'"> Modifier </td>';
            echo '</tr>';
    }
    ?>
    </tbody>
    </table>
    
</body>
</html>