<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/style_liste.css">
    <link rel="stylesheet" href="Assets/style_message.css">
    <title>Liste des messages</title>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Objet</th>
            <th>Date</th>
            <th>Contenu</th>
            <th>Email expediteur</th>
            <th>Email destinataire</th>
            <th colspan="1">Action</th>
        </tr>
        </thead>
        <tbody class="body_liste">
        <?php 
        foreach($resultat as $message){
            echo '<tr class="liste">';
            echo '<td>'.$message['id_message'].'</td>';
            echo '<td>'.$message['Objet_m'].'</td>';
            echo '<td>'.$message['Date_m'].'</td>';
            echo '<td>'.$message['Contenu_m'].'</td>';
            echo '<td>'.$message['email_expediteur'].'</td>';
            echo '<td>'.$message['email_destinataire'].'</td>';
            echo '<td class="lien"> <a class="suppr action" href = "AdminMessage.php?action_effacer&id_m='.$message['id_message'].'"> Supprimer </td>';
            echo '</tr>';
        }
    ?>
        </tbody>
    </table>
</body>
</html>