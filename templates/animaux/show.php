<?php 
   require_once _ROOTPAPH_. "/templates/header.php";
   require_once _ROOTPAPH_. "/templates/body_pages.php";
   /* @var $animal \App\Entity\Animaux */ 
?>

<div class="container  px-4 py-5">
    <div class="row text-center">
        <h1>Déscription du : <?=$animal->getRace() ?> </h1>

        <div class="col-md-12 px-5 py-5 text-center" style="background-color: blanchedalmond;">
            <h2><?=$animal->getName(); ?></h2>
            <h2><?=$animal->getAge()."ans"?></h2>
            <p><?=$animal->getDescription(); ?></p>
        </div>

        <div class="col-md-12 px-5 py-5 text-center" style="background-color: blanchedalmond;">
           <img src="/uploads/books/<?=$animal->getImage(); ?>" alt="" width="600" height="500">
        </div>
    </div>

</div>

<?php
    require_once _ROOTPAPH_. "/templates/footer.php";
?>