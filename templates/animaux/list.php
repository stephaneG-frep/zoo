<?php 
   require_once _ROOTPAPH_. "/templates/header.php";
   //require_once _ROOTPAPH_. "/templates/body_home.php";
      /* @var $animal \App\Entity\Animaux */ 

   
   var_dump($animaux);
    
?>
<div class="container px-4 py-5">

    <div class="row text-center">
        <h1>Nos amis les animaux</h1>
    <?php foreach ($animaux as $animal) {?>
       
        <div class="col-md-4 my-2 d-flex">         
            <div class="card">
                <div class="card-header" style="background: #3A8891;">
                    <img src="<#" alt="image de peroquet" width="300" height="400"
                        class="card-img-bottom rounded rounded-4 ">
                </div>
                <div class="card-body" style="background: #799351;">
                    <h2 class="card-title" style="color: #EAECCC ;"><?=$animal->getRace(); ?></h2>
                    <hr>
                    <h3 class="card-title" style="color: #EAECCC ;"><?=$animaux->getName() ?></h3>
                    <hr>
                    <h3 class="card-title" style="color: #EAECCC ;"><?=$animaux->getAge() ?></h3>                    
                    <hr>
                    <p class="card-text" style="color: #EAECCC ;"><?= $animaux->getDescription() ?></p>
                    <hr>
                    <a href="/zoo/index.php?controller=animaux&action=show&id=<?=$animal['id'];?>" class="btn btn-primary">Voir</a>
                </div>
            </div>
           
        </div>
    <?php }?>
     <!--   <div class="col-md-4 my-2 d-flex">
            <div class="card">
                <div class="card-header" style="background: #3A8891;">
                    <img src="uploads/books/coco.jpg" alt="image de peroquet" width="300" height="400"
                        class=" card-img-bottom rounded rounded-4">
                </div>
                <div class="card-body" style="background: #799351;">
                    <h3 class="card-title" style="color: #EAECCC ;">Titre</h3>
                    <hr>
                    <p class="card-text" style="color: #EAECCC ;">orem ipsum dolor sit amet consectetur adipisicing
                        elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                        nihil, eveniet aliquid culpa officia aut! </p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 my-2 d-flex">
            <div class="card">
                <div class="card-header" style="background: #3A8891;">
                    <img src="uploads/books/coco.jpg" alt="image de peroquet" width="300" height="400"
                        class=" card-img-bottom rounded rounded-4">
                </div>
                <div class="card-body" style="background: #799351;">
                    <h3 class="card-title" style="color: #EAECCC ;">Titre</h3>
                    <hr>
                    <p class="card-text" style="color: #EAECCC ;">orem ipsum dolor sit amet consectetur adipisicing
                        elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                        obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                        nihil, eveniet aliquid culpa officia aut! </p>
                    <a href="#" class="btn btn-primary">Voir</a>
                </div>
            </div>
        </div>
    </div> -->
</div>



<?php
    require_once _ROOTPAPH_. "/templates/footer.php";
?>