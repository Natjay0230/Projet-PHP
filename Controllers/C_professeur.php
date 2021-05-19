<?php
include('Models/M_professeur.php');

class C_professeur{

    // Fonction pour inserer les données d'un professeur obtenu apartir du formulaire
    public function inserer_prof(){ 
        if(isset($_POST['nom_p'],$_POST['prenom_p'],$_POST['email_p'],$_POST['tel_p'],$_POST['mot_de_passe_p'],$_POST['photo_p'])){
        
            $nom = $_POST['nom_p'];
            $prenom = $_POST['prenom_p'];
            $email = $_POST['email_p'];
            $tel = $_POST['tel_p'];
            $mot_de_passe = $_POST['mot_de_passe_p'];
            $photo = $_POST['photo_p'];

            $professeur = new M_professeur();
            $professeur -> insertion_professeur($nom, $prenom, $email, $tel, $mot_de_passe, $photo);

            header('Location: AdminProfesseur.php');

    
        }
    include('Views/Admin/Formulaire_professeur.php');
    }

    // Fonction pour afficher la liste des professeurs
    public function affichage_prof(){
        
        $professeur = new M_professeur();
        $resultat = $professeur -> liste_professeur();
        include('Views/Admin/Liste_professeur.php');


    }
    
    // Fonction pour supprimer une ligne dans la liste des professeurs
    public function effacer_prof(){
        if(isset($_GET['action_suppr'])){
            $id = $_GET['id'];
            $professeur = new M_professeur();
            $professeur -> effacer_professeur($id);
            header("location: AdminProfesseur.php");
        
        }

    }

    // Fonction pour modifier une ligne dans la liste des professeurs
    public function modifier_prof(){
        if(isset($_POST['id'],$_POST['n_nom'],$_POST['n_prenom'],$_POST['n_email'],$_POST['n_tel'],$_POST['n_mot_de_passe'])){
            $professeur = new M_professeur();
            $professeur -> modifier_professeur($_POST['id'],$_POST['n_nom'],$_POST['n_prenom'],$_POST['n_email'],$_POST['n_tel'],$_POST['n_mot_de_passe']);
            header("Location: AdminProfesseur.php");
        }
    }
}
?>
