<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'a_propos':
                    //appeler la méthode a_propos 
                    var_dump("on appel la methode a_propos");
                    break;
                case 'accueil':
                    // appeler la méthode accueil
                    var_dump("on appel la méthode accueil");
                    break;
                default: 
                    // erreur
                    break;   
            }
        } else {
            // charger la page
        }
    }
}