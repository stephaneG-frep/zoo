
<?php
   //require_once __DIR__. "/templates/header.php";
   //require_once __DIR__. "/templates/body_home.php";
   //require_once __DIR__. "/templates/carroussel.php";
   //require_once __DIR__. "/templates/home.php";
  
   // constante du chemin racine
   define("_ROOTPAPH_", __DIR__);

   spl_autoload_register();

   use App\Controller\Controller;

   $controller = new Controller();
   $controller->route();

?>





    





<?php 
    //require_once __DIR__. "/templates/footer.php";
?>