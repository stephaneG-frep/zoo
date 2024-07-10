<?php
// analise l'action
namespace App\Controller;

class PageController extends Controller
{
    public function route(): void
    {

        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'a_propos':
                        //appeler la méthode a_propos 
                        $this->a_propos();
                        break;
                    case 'home':
                        // appeler la méthode home
                        $this->home();
                        break;
                   /* case 'animaux':
                        // appeler la méthode animaux
                        //$this->animaux();
                        break; */
                    case 'employer':
                        // appeler la méthode soignant
                        $this->employer();
                        break;
                    default: 
                        throw new \Exception("Cette action n'existe pas :".$_GET['action']);                       
                        break;   
                }
            } else {
                throw new \Exception("Aucune action détectée");
                
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage(),
            ]);
        }

        
    }

    protected function a_propos()
    {
        $params = [
           'titre' => 'Notre zoo est un histoire de famille',
           'texte' => 'Maxime mollitia,
                       molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                       numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                       optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                       obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                       nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                       tenetur error, harum nesciunt ipsum debitis quas aliquid.',
        ];
        // recuperation de la page a_propos
        $this->render('page/a_propos', $params);
    }

    protected function home()
    {
        $params = [

        ];
        $this->render('page/home', $params);
    }

    /*
    protected function animaux()
    {
        $params = [

        ];
        $this->render('page/animaux', $params);
    }
    */

    protected function employer()
    {
        $params = [
          'titre' => 'Nous vous présentont tous nos employers'
        ];
        $this->render('page/employer', $params);
    }
}