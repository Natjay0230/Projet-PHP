<?php
class M_etudiant{
    
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

    //Inserer une ligne dans la table etudiant de la base de donnée 
    public function insertion_etudiant ($nom, $prenom, $sexe, $date, $email, $tel, $mot_de_passe, $photo){
        
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("INSERT INTO etudiant(nom_e,prenom_e,sexe_e,
        date_naissance,email_e,tel_e,mot_de_passe_e,photo_e) VALUES(?,?,?,?,?,?,?,?)");
        $requete -> execute(array($nom,$prenom,$sexe,$date,$email,$tel,$mot_de_passe,$photo));
    
    }

    //Selection de la liste des étudiants dans la base de donnée
    public function liste_etudiant(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM etudiant");
        $requete -> execute();
        $resultat = $requete->fetchall();
        return $resultat;
    }

    //Effacer etudiant dans la base donnée
    public function effacer_etudiant($id){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("DELETE FROM etudiant WHERE id_etudiant='".$id."'");
        $requete -> execute();
    }

    //Mise a jour ou modification d'un etudiant dans la base de donnée
    public function modifier_etudiant($id_e,$nom,$prenom,$email,$tel,$mot_de_passe){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("UPDATE etudiant SET nom_e=?,prenom_e =?,
        email_e=?,tel_e=?,mot_de_passe_e=? WHERE id_etudiant='".$id_e."'");
        $requete -> execute(array($nom,$prenom,$email,$tel,$mot_de_passe));        

    }

}
?>