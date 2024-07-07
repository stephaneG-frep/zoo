<?php

namespace App\Controller;

Class Controller
{
    public function route(): void
    {
        if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    //charger le controller
                    break;
                case 'animal':
                    // controller animal
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