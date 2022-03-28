<?php
class Application {
    public static function run(){
        if (isset($_SERVER['PATH_INFO']) == false || ($_SERVER['PATH_INFO']) == "/home") {
            include __DIR__ . '/Controller/HomeController.php';
            $controller = new HomeController();
            $controller->accueil(); 


         } else if ($_SERVER['PATH_INFO'] == "/ajout") {
            include __DIR__ . '/Controller/HomeController.php';
            $annonce = new HomeController();
            $annonce->ajoutArticles();


        } else if ($_SERVER['PATH_INFO'] == "/articles") {
            include __DIR__ . '/Controller/HomeController.php';
            $annonce = new HomeController();
            $annonce->articles();
        
        } else if ($_SERVER['PATH_INFO'] == "/supprimer") {
            include __DIR__ . '/Controller/HomeController.php';
            $annonce = new HomeController();
            $annonce->supprimer();
        
    }
}

}