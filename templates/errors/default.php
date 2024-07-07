<?php 
   require_once _ROOTPAPH_. "/templates/header.php";
   require_once _ROOTPAPH_. "/templates/body_pages.php";
?>

<?php if ($error) { ?>
    <div class="alert alert-danger text-center">
       <h1 style="color: #D04848;"><?=$error; ?></h1>
    </div>
<?php }?>


<?php
    require_once _ROOTPAPH_. "/templates/footer.php";
?>