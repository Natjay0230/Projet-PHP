<?php
class M_module{
    
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


    public function insertion_cours($nom_module,$id_categorie,$id_professeur){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("INSERT INTO module(nom_module,id_categorie,id_professeur) VALUES(?,?,?)");
        $requete -> execute(array($nom_module,$id_categorie,$id_professeur));
    }


    public function liste_prof(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM professeur");
        $requete -> execute();
        $resultat = $requete->fetchall();
        return $resultat;
    }


    public function liste_categorie(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM categorie");
        $requete -> execute();
        $categorie = $requete->fetchall();
        return $categorie;
    }


    public function affichage_cours(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT * FROM module");
        $requete -> execute();
        $resultat = $requete->fetchall();
        return $resultat;
    }


    public function effacer_cours($id_module){        
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("DELETE FROM module WHERE id_module='".$id_module."'");
        $requete -> execute();
    }

    //Selectionner dans la base de donnée la liste des cours  avec le nom du professeur et le nom du categorie du module
    public function cours_prof(){
        $connexion = $this -> connexion_bdd();
        $requete = $connexion -> prepare("SELECT id_module,Nom_module,Nom_p,Nom_categorie FROM module 
        NATURAL JOIN professeur NATURAL JOIN categorie");
        $requete -> execute();
        $resultat = $requete->fetchall(); 
        return $resultat;    
    }
}

?>