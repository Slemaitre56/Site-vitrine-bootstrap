<?php  ob_start() ?>

<div class="row">
        <div class="col-4">
            <ul class="row">
                <li class="col"><i class="fab fa-facebook-f text-light"></i></li>
                <li class="col"><i class="fab fa-twitter text-light "></i></li>
                <li class="col"><i class="fab fa-instagram text-light"></i></li>
            </ul>
        </div>
          
        <div class="col-8 text-right">
        <h1 class=" text-light ">Livres.com</h1>
        <a class=" mentions text-light ">Mentions légales 2021</a>
    </div>
</div>


<?php 
    $footer = ob_get_clean();
    require "template.php";
?>