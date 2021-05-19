<?php
include('Models/M_etudiant.php');

class C_etudiant{    
    
    //Fonction pour inserer etudiant
    public function inserer_etudiant(){
    
        if(isset($_POST['nom_e'],$_POST['prenom_e'],$_POST['sexe_e'],$_POST['date_naissance'],$_POST['email_e'],$_POST['tel_e'],$_POST['mot_de_passe_e'])){
            
            $nom = $_POST['nom_e'];
            $prenom = $_POST['prenom_e'];
            $sexe = $_POST['sexe_e'];
            $date = $_POST['date_naissance'];
            $email = $_POST['email_e'];
            $tel = $_POST['tel_e'];
            $mot_de_passe = $_POST['mot_de_passe_e'];
            $photo = $_POST['photo_e'];
            
            $etudiant = new M_etudiant();
            $etudiant -> insertion_etudiant($nom, $prenom,$sexe,$date,$email,$tel,$mot_de_passe,$photo);
            
            header("Location: AdminEtudiant.php");
        }

        include('Views/Admin/Formulaire_etudiant.php');
    
    }

    //Fonction pour afficher la liste des etudiants
    public function affichage_etudiant(){
        
        $etudiant = new M_etudiant();  
        $resultat = $etudiant -> liste_etudiant();

        include("Views/Admin/Liste_etudiant.php");
    
    }
    
    //Fonction pour effacer une ligne dans la liste des étudiants
    public function effacer_etudiant(){
        if(isset($_GET['action_suppr'])){            
            $id = $_GET['id'];
            $etudiant = new M_etudiant();  
            $etudiant -> effacer_etudiant($id);   
            
            header("Location: AdminEtudiant.php"); 
        }
    }

    //Fonction pour modifier une ligne dans la liste des étudiants
    public function modifier_etudiant(){
        if(isset($_POST['id'],$_POST['n_nom'],$_POST['n_prenom'],$_POST['n_email'],$_POST['n_tel'],$_POST['n_mot_de_passe'])){
            $etudiant = new M_etudiant();
            $etudiant -> modifier_etudiant($_POST['id'],$_POST['n_nom'],$_POST['n_prenom'],$_POST['n_email'],$_POST['n_tel'],$_POST['n_mot_de_passe']);
            
            header("Location: AdminEtudiant.php");
        }

    }
}
?>