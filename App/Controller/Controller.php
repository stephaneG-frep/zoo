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
    
    // fonction de redue des pages
    protected function render(string $path, array $params = []):void
    {

        $filePath = _ROOTPAPH_.'/templates/'.$path.'.php';

        // gestion d'erreurs
        try {
            if (!file_exists($filePath)) {
               throw new \Exception("Fichier non trouvé : ".$filePath);
               
            } else {
                require_once $filePath;
                //require_once _ROOTPAPH_."/templates/page/a_propos.php";
            }

        } catch(\Exception $e) {
            echo $e->getMessage();
        }

        
       
    }
}