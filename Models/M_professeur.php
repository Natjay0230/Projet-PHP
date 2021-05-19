<?php
class M_professeur{
    
    private $host = 'localhost';
    private $db_name = 'info_253';
    private $user = 'root';
    private $pass = '';
    
    private function connexion_bdd(){
        try {
            $connexion = new PDO("mysql:host=" .$this->host. ";dbname=" . $this -> db_name,$this -> user,$this -> pass);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        } catch(PDOException $e) {
            echo 'Echec de connexion :'.$e->getMessage();
        }
            return $connexion;
    }


    public function insertion_professeur ($nom, $prenom, $email, $tel, $mot_de_passe, $photo){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("INSERT INTO professeur(nom_p, prenom_p, email_p, tel_p, mot_de_passe_p, photo_p) VALUES(?,?,?,?,?,?)");
        $requete -> execute(array($nom,$prenom,$email,$tel,$mot_de_passe,$photo));
    }


    public function liste_professeur(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM professeur");
        $requete -> execute();
        $resultat = $requete->fetchall(); 
        return $resultat;
    
    }


    public function effacer_professeur($id){
        $connexion = $this -> connexion_bdd();
        $requete1 = $connexion -> prepare("DELETE FROM module WHERE id_professeur='".$id."'");
        $requete2 = $connexion -> prepare("DELETE FROM professeur WHERE id_professeur='".$id."'");
        $requete1 -> execute();
        $requete2 -> execute();
    }


    public function modifier_professeur($id_p,$nom,$prenom,$email,$tel,$mot_de_passe){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("UPDATE professeur SET nom_p=?,prenom_p =?,email_p=?,tel_p=?,mot_de_passe_p=? 
        WHERE id_professeur='".$id_p."'");
        $requete -> execute(array($nom,$prenom,$email,$tel,$mot_de_passe));  
    }
}
?>