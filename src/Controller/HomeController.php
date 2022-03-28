<?php

class HomeController
{
    public function accueil()
    {
        include __DIR__ . './../../templates/accueil.php';
    }

    public function ajoutArticles(){
        include __DIR__. '/../Entity/Modele.php';
        include __DIR__ . '/../Entity/Articles.php';
        include __DIR__ . '/../Entity/Categorie.php';
        include __DIR__ . '/../Entity/Utilisateurs.php';
        $n = new Utilisateurs();
        $c=new Categorie();
        $a=new Articles();
        $n->ajouterUtilisateur();
        $c->ajouterCategorie();
        $a->ajouterArticle();
        include __DIR__ . './../../templates/accueil.php';
    }

    public function articles(){
        include __DIR__ . '/../Entity/Modele.php';
        include __DIR__ . '/../Entity/Articles.php';
      $affiche=new Articles();
      $chat=$affiche->afficher();
      include __DIR__. '/../../templates/articles.php';
    }

    public function supprimer(){
    include __DIR__ . '/../Entity/Modele.php';
     include __DIR__ . '/../Entity/Articles.php';
     $supp=new Articles();
     $supp->supprimer(1);
     include __DIR__.'/../../templates/supprimer.php';
    }
}
