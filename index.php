<?php  ob_start() ?>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img class="d-block w-100" src="image/livre-feuille.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="image/lecture-roman.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
            <img class="d-block w-100" src="image/unlivre.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <section class="row">
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top img-fluid" src="image/card1.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark"> + Infos</a>
            </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top" src="image/card2.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">+ Infos</a>
            </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top" src="image/card3.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">+ Infose</a>
            </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top" src="image/Destin-La-Saga-Winx.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">+ Infos</a>
            </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top" src="image/lecture-roman.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title ">Card title</h5>
                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark ">+ Infos</a>
            </div>
            </div>
        </div>
        <div class="col-6 col-lg-4 mt-3">        
            <div class="card">
            <img class="card-img-top" src="image/Roman.jpg" alt="Card image cap">
            <div class="card-body text-center">
                <h5 class="card-title">Card title</h5>
                <p class="card-text text-justify">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-dark">+ Infos</a>
            </div>
            </div>
        </div>
    </section>      


<?php 
    $content = ob_get_clean();
    require "template.php";
?>