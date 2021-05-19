<?php
class M_login{
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
    
    //vérifier si l'etudiant existe dans la base de donnée
    public function verification_etudiant($email,$pass){        
            $pdo = $this -> connexion_bdd();
            $req = $pdo -> prepare("SELECT email_e,mot_de_passe_e FROM etudiant WHERE email_e=? AND mot_de_passe_e=? LIMIT 1");
            $req -> execute(array($email,$pass));
            $resultat_e = $req -> fetchAll();
            
            return $resultat_e;           
    }

    //vérifier si le professeur existe dans la base de donnée
    public function verification_professeur($email,$pass){
            $pdo = $this -> connexion_bdd();
            $req = $pdo -> prepare("SELECT email_p,mot_de_passe_p FROM professeur WHERE email_p=? AND mot_de_passe_p=? LIMIT 1");
            $req -> execute(array($email,$pass));
            $resultat_p = $req -> fetchAll();
            
            return $resultat_p;
    }

}
?>