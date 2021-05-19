<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style_liste.css">
    <title>Liste des cours</title>
</head>
<body>
    <h1 class="titre">Liste des cours</h1>
    <table>
    <thead>
    <th>id</th>
    <th>Nom du module</th>
    <th>id categorie</th>
    <th>id professeur</th>
    <th>Action</th>
    </thead>
    <tbody class="body_liste">
    <?php 
    foreach($resultat as $_ligne){
            echo '<tr class="liste">';
            echo '<td>'.$_ligne['id_module'].'</td>';
            echo '<td>'.$_ligne['Nom_module'].'</td>';
            echo '<td>'.$_ligne['id_categorie'].'</td>';
            echo '<td>'.$_ligne['id_professeur'].'</td>';
            echo '<td class="lien"> <a class="suppr action" href = "AdminCours.php?action_suppr&id_c='.$_ligne['id_module'].'"> Supprimer </td>';
            echo '</tr>';
    }
    ?>
    </tbody>
    </table>
</body>
</html>