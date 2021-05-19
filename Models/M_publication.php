<?php
class M_publication{
    private $host = 'localhost';
    private $db_name = 'info_253';
    private $user = 'root';
    private $pass = '';
    
    //Connexion a la base de donnée
    private function connexion_bdd(){
            try {
                $connexion = new PDO("mysql:host=" .$this->host. ";dbname=" . $this -> db_name,$this -> user,$this -> pass);
                $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            } catch(PDOException $e) {
                echo 'Echec de connexion :'.$e->getMessage();
            }
            return $connexion;
    }

    //Inserer dans la base de donnée le message publier
    public function publier_message($expediteur,$titre,$contenu,$date,$id_module){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("INSERT INTO post(email_expediteur,Titre_post,Contenu_post,Date_post,id_module) 
        VALUES(?,?,?,?,?)");
        $requete -> execute(array($expediteur,$titre,$contenu,$date,$id_module));
    }

    //Selectionner dans la base de donnée la liste des publications selon le cours 
    public function afficher_publication_p($id_module){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT Nom_p,Prenom_p,Titre_post,Contenu_post,Date_post FROM post 
        JOIN professeur ON email_p=email_expediteur WHERE id_module=? ORDER BY Date_post");
        $requete -> execute(array($id_module));
        $resultat = $requete->fetchall(); 
        return $resultat;
    }
}
?>