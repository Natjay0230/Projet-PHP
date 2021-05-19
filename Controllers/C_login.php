<?php
include('Models/M_login.php');
class C_login{

    //Fonction pour verifier si l'email et mot de passe saisi par l'utilisateur est correcte
    public function connexion(){
    include('Views/Public/V_login.php');

    if(isset($_POST["email"]) && isset($_POST["password"])){  //  Verifier si les variables POST existe
        $email = $_POST["email"];
        $pass = $_POST["password"];

        $login = new M_login();
        $utilisateur_e = $login -> verification_etudiant($email,$pass);
        $utilisateur_p = $login -> verification_professeur($email,$pass);
        
        //Verifier si les resultats retourne quelques choses
        if(count($utilisateur_e) > 0){ 
            session_start();
            $_SESSION['utilisateur'] = 'etudiant';
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['pasword'];
            header("Location: AcceuilPublic.php");
        
        }else if(count($utilisateur_p) > 0){
            session_start();
            $_SESSION['utilisateur'] = 'professeur';
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['password'] = $_POST['pasword'];
            header("Location: AcceuilPublic.php");
                      
        }else{
                header("Location: index.php");
        }
    }

    }
}

?>