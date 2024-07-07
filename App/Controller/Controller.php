<?php
// charge le bon controlleur
namespace App\Controller;

Class Controller
{
    public function route(): void
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    //charger le controller (enfant)
                    $pageController = new PageController();
                    $pageController->route();
                    break;
                case 'animaux':
                    // controller animal
                    var_dump("on charge la page AnimauxController");
                    break;
                default: 
                    // erreur
                    break;   
            }
        } else {
            // charger la page d'accueil
        }
    }
}