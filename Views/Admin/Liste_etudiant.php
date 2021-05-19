<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style_liste.css">
    <title>Liste Etudiants</title>
</head>
<h1 class="titre">Liste des éleves</h1>
<body>
    <table>
    <thead>
    <th>id</th>
    <th>Nom</th>
    <th>Prenom</th>
    <th>Sexe</th>
    <th>Date de naissance</th>
    <th>Email</th>
    <th>Telephone</th>
    <th>Mot de Passe</th>
    <th colspan="2">Action</th>
    </thead>
    <tbody class="body_liste">
    <?php 
    foreach($resultat as $ligne){
            echo '<tr class ="liste">';
            echo '<td>'.$ligne['id_etudiant'].'</td>';
            echo '<td>'.$ligne['Nom_e'].'</td>';
            echo '<td>'.$ligne['Prenom_e'].'</td>';
            echo '<td>'.$ligne['sexe_e'].'</td>';
            echo '<td>'.$ligne['Date_naissance'].'</td>';
            echo '<td>'.$ligne['Email_e'].'</td>';
            echo '<td>'.$ligne['Tel_e'].'</td>';
            echo '<td>'.$ligne['Mot_de_passe_e'].'</td>';
            echo '<td class="lien"><a class="suppr action" href = "AdminEtudiant.php?action_suppr&id='.$ligne['id_etudiant'].'"> Supprimer </td>';
            echo '<td class="lien"><a class="modif action" href = "Views/Admin/Modification_etudiant.php?id='.$ligne['id_etudiant'].'
                                                                        &nom='.$ligne['Nom_e'].'
                                                                        &prenom='.$ligne['Prenom_e'].'
                                                                        &email='.$ligne['Email_e'].'
                                                                        &tel='.$ligne['Tel_e'].'
                                                                        &mot_de_passe='.$ligne['Mot_de_passe_e'].'">Modifier</td>';
            echo '</tr>';
    }
    ?>
    </tbody>
    </table>
</body>
</html>