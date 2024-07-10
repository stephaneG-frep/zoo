<?php
// charge le bon controlleur 
namespace App\Controller;

Class Controller
{
    public function route(): void
    {
        try {
            if (isset($_GET['controller'])) {
                switch ($_GET['controller']) {
                    case 'page':
                        //charger le controleur (enfant)
                        $pageController = new PageController();
                        $pageController->route();
                        break;
                    case 'animaux':
                        // controleur animal
                        $pageController = new AnimauxController();
                        $pageController->route();
                        break;
                /*    case 'employer':
                        // controleur employer
                        $pageController = new EmployerController();
                        $pageController->route();
                        break; */
                    default: 
                        throw new \Exception("Controlleur introuvable !");                       
                        break;   
                }
            } else {
                // charger la page d'accueil
                $pageController = new PageController();
                $pageController->home();
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage(),
            ]);
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
                // Extrait chaque ligne du tableau ($params) en variable
                extract($params);
                require_once $filePath;
                //require_once _ROOTPAPH_."/templates/page/a_propos.php";
            }

        } catch(\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage(),
            ]);
        }

        
       
    }
}