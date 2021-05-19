<?php
class M_message{
    
    private $host = 'localhost';
    private $db_name = 'info_253';
    private $user = 'root';
    private $pass = '';
    
    //Fonction connexion a la base de donnée
    private function connexion_bdd(){
            try {
                $connexion = new PDO("mysql:host=" .$this->host. ";dbname=" . $this -> db_name,$this -> user,$this -> pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch(PDOException $e) {
                echo 'Echec de connexion :'.$e->getMessage();
            }
            return $connexion;
    }

    public function envoyer_message($objet,$date,$contenu,$email_expediteur,$email_destinataire){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion->prepare("INSERT INTO messages(objet_m,date_m,contenu_m,email_expediteur,email_destinataire) VALUES(?,?,?,?,?)");
        $requete->execute(array($objet,$date,$contenu,$email_expediteur,$email_destinataire));
    }

    public function liste_destinataire($email_expediteur){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT Nom_e,Prenom_e,Email_e FROM etudiant WHERE Email_e NOT LIKE ?");
        $requete -> execute(array($email_expediteur));
        $resultat = $requete->fetchall();
        return $resultat;
    }


    public function message_recue($email_destinataire){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT Objet_m,Contenu_m,Date_m,Nom_e,Prenom_e FROM messages JOIN etudiant ON Email_e=email_expediteur WHERE email_destinataire=? ORDER BY Date_m");
        $requete -> execute(array($email_destinataire));
        $resultat = $requete->fetchall();
        return $resultat;
    }

    public function liste_message(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM messages");
        $requete -> execute();
        $resultat = $requete -> fetchall();
        return $resultat;
    }

    public function effacer_message($id){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("DELETE FROM messages WHERE id_message=?");
        $requete -> execute(array($id));
    }

}
?>