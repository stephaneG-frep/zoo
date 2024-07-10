<?php
// analise l'action
namespace App\Controller;

use App\Repository\AnimauxRepository;

class AnimauxController extends Controller
{
    public function route(): void
    {

        try {
            if (isset($_GET['action'])) {
                switch ($_GET['action']) {
                    case 'show':
                        //afficher un animal
                        $this->show();
                        break;
                    case 'list':
                        // afficher tous les animaux
                        $this->list();
                        break;
                    case 'edit':
                        // appeler la méthode edit
                        //$this->edit();
                        break;
                    case 'add':
                        // appeler la méthode add
                        //$this->add();
                        break;
                    case 'delete':
                        // appeler la méthode delete
                        //$this->delete();
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
    
    protected function show()
    {
        try {
            if (isset($_GET['id'])) {

                $id = (int)$_GET['id'];
                // charger l'animal par l'appel au repository
                $animauxRepository = new AnimauxRepository();
                $animal = $animauxRepository->findOneById($id);


                $this->render('animaux/show', [
                    'animal' => $animal,
                ]);
            } else {
                throw new \Exception("ID manquant en parametre :");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage(),
            ]);
        }
        
    }

    
    protected function list()
    {
        try {
            // Récupérer tous les films
            $animauxRepository = new AnimauxRepository();
            $animaux = $animauxRepository->findAll();

            $this->render('animaux/list', [
                'animaux' => $animaux,
            ]);



        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        } 
    }
        
    
}