<?php
include('Models/M_publication.php');
class C_publication{

    //Fonction pour publier un message dans un cours
    public function publier(){
        if(isset($_POST['titre'],$_POST['contenu'],$_GET['id_module'])){
            
            $expediteur = htmlspecialchars($_SESSION['email']);
            $titre = $_POST['titre'];
            $contenu = $_POST['contenu'];
            $date = date('y-m-d h:i:s',time());
            $id_module = $_GET['id_module'];
        
            $professeur = new M_publication();
            $professeur -> publier_message($expediteur,$titre,$contenu,$date,$id_module);
        
        }
    include('Views/Public/V_publication_professeur.php');
    }

    //Fonction pour afficher une publication dans une cours
    public function affichage_publication(){
        if(isset($_GET['id_module'])){
            $id_module = $_GET['id_module'];
            $professeur = new M_publication();
            $resultat = $professeur -> afficher_publication_p($id_module);
            include('Views/Public/V_message_publier.php');
        }
    }

} 
?>