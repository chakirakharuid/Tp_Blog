<?php

abstract class Modele{
    protected $co;
   protected $table;
  

    public function __construct(){    
        include_once __DIR__ . '/../DataBase.php';
        $this->co = DataBase::bdd();   
    }

    public function afficher(){
    $sql="SELECT * FROM $this->table ";
        $resultat = $this->co->query($sql);
        $tab = $resultat->fetchAll();
        return $tab;
    }
public function ajouterArticle(){    
    $titre= htmlspecialchars($_POST['titre']);
    $art= htmlspecialchars($_POST['contenu']);
    $sql2 = "INSERT INTO articles  (titre,contenu) VALUES('$titre','$art')";
    $this->co->query($sql2);
    }
public function ajouterUtilisateur(){
    $nom=htmlspecialchars($_POST['nom']);
    $sql="INSERT INTO utilisateurs (nom)VALUES ('$nom')";
    $this->co->query($sql);
}
public function ajouterCategorie(){
$cate= htmlspecialchars($_POST['categorie']);   
$sql1 = "INSERT INTO categorie  (nom) VALUES ('$cate')";
$this->co->query($sql1); 
}
public function supprimer($id){
    $id=$_GET['id'];
      $sql = "DELETE FROM $this->table  WHERE id='$id' ";
        $resultat = $this->co->query($sql);
        $tab = $resultat->fetchAll();
        return $tab;
}
}