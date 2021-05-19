<?php
include('Models/M_message.php');
class C_message{

    //Fonction pour envoyer message privé entre étudiant 
    public function envoye_message(){
        $message = new M_message();
        $destinataire = $message -> liste_destinataire($_SESSION['email']);
        
        if(isset($_POST['objet_m'],$_POST['contenu_m'],$_POST['email_dest'])){
            $objet_m = $_POST['objet_m'];
            $contenu_m = $_POST['contenu_m'];
            $email_dest = $_POST['email_dest'];
            $email_expediteur =htmlspecialchars($_SESSION['email']);
            $date = date('y-m-d h:i:s',time());
            
            foreach($email_dest as $email_destinataire){
            $message -> envoyer_message($objet_m,$date,$contenu_m,$email_expediteur,$email_destinataire);
            }

        }
        include('Views/Public/V_formulaire_message.php');
    }

    //Fonction pour recevoir message privé venant d'un étudiant
    public function message_recu(){
        $message = new M_message();
        if(isset($_SESSION['email'])){
            $email_destinataire = $_SESSION['email'];
            $resultat = $message -> message_recue($email_destinataire);
            include('Views/Public/V_message_recu.php');
        }

    }

    //Affichage de la liste des messages pour la page administrateur
    public function affichage_message(){
        $message = new M_message();
        $resultat = $message -> liste_message();
        include('Views/Admin/Liste_message.php');
    }

    //Effacer une ligne de message dan la page administrateur
    public function effacer(){
        if(isset($_GET['action_effacer'])){
            $message = new  M_message();
            $message -> effacer_message($_GET['id_m']);
            header('Location: AdminMessage.php');
        }
    }
}
?>