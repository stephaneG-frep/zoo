<?php
   require_once _ROOTPAPH_. "/templates/header.php";
   require_once _ROOTPAPH_. "/templates/body_a_propos.php";
  
?>

<div class="container  px-4 py-5">
    <div class="row text-center">
        <h1>A-propos de nous et de notre zoo</h1>

        <div class="col-md-12 px-5 py-5 text-center" style="background-color: blanchedalmond;">
            <h2><?=$titre ?></h2>
            <p><?=$texte ?></p>
        </div>
    </div>

</div>


<?php 
   require_once _ROOTPAPH_. "/templates/footer.php";
?>