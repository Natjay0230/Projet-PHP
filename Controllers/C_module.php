<?php
include('Models/M_Module.php');

class C_module{

    //Fonction pour inserer nouveau module avec le professeur qui l'enseigne est le categorie
    public function inserer_module(){
        $module = new M_module();
        $resultat = $module -> liste_prof();
        $categorie = $module  -> liste_categorie();

        include('Views/Admin/Formulaire_cours.php');
        if(isset($_POST['nom_module'],$_POST['id_categorie'],$_POST['id_professeur'])){
            
            $nom_cours = $_POST['nom_module'];
            $id_categorie = $_POST['id_categorie'];
            $id_professeur = $_POST['id_professeur'];


            $module -> insertion_cours($nom_cours,$id_categorie,$id_professeur);
            
            header("Location: AdminCours.php");
        }
    }
    
    // Fonction pour afficher la liste des modules
    public function afficher_module(){
        $module = new M_module();
        $resultat = $module -> affichage_cours();
        include("Views/Admin/Liste_cours.php");
    
    }

    //Fonction pour supprimer une ligne dans la liste des modules
    public function supprimer_module(){
        if(isset($_GET['action_suppr'])){
            $id_module = $_GET['id_c'];
            $module = new M_module();
            $module -> effacer_cours($id_module);
            header('Location: AdminCours.php');
        }

    }

    //Affichage de la liste de module avec le nom du professeur et le categorie du cours
    public function cours_professeur(){
        $professeur = new M_module();
        $resultat = $professeur -> cours_prof();
        include('Views/Public/V_cours.php');
        }
    }
?>