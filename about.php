<?php  ob_start() ?>

<div class="row mt-4">
    <div class="col-4">
        <img class="sizeImgAbout img-fluid rounded" src="image/ecrivain.jpg" alt="about">
    </div>
    <div class="col-8 text-light text-justify">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis cumque molestias 
            beatae ipsam quia, corrupti, aut, tempora nobis magnam vel temporibus officia 
            quibusdam delectus dicta totam quas minima excepturi aspernatur! Lorem ipsum dolor sit, 
            amet consectetur adipisicing elit. Quibusdam inventore aut voluptates non? Aspernatur eum eligendi repudiandae, 
            porro autem delectus ducimus provident saepe aperiam in iste maiores, iure facilis id.
        </p>
        <ul class="list-group ">
            <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
                livres/Romans
                <span class="badge badge-light badge-pill">159</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
                BD/Comics
                <span class="badge badge-light badge-pill">94</span>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center bg-dark">
                Ebook
                <span class="badge badge-light badge-pill">56</span>
            </li>
        </ul>
    </div>
    <div class="col-12 mt-5 mb-5">
        <p class="text-light text-center font-italic"><q>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore quo 
            minima necessitatibus tenetur autem, quidem atque maxime reiciendis doloribus 
            amet numquam et laborum consequuntur rerum facilis possimus sunt provident deserunt.</q>
        </p>
    </div>
</div>


<?php 
    $content = ob_get_clean();
    require "template.php";
?>
