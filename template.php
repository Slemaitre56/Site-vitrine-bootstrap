<?php 
$path="http://".$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
$current=basename($path);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="contenair-fluid bg-dark">
        <header class="container bg-dark">
            <div class="row">
                <div class="col-5 col-lg-4">
                  <h1 class=" text-light mt-3 mb-3">Livres.com</h1>
                </div>
                <div class="col-7 col-lg-8">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-3">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                      
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <a class="<?php if($current=="index.php"){ echo "active";} ?> nav-link" href="index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link <?php if($current=="about.php"){ echo "active";} ?>" href="about.php">A propos</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link <?php if($current=="contact.php"){ echo "active";} ?>" href="contact.php">Contact</a>
                            </li>
                          </ul>
                          <form action="search.php" method="GET" class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Chercher" aria-label="Search">
                            <button class="btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </nav> 
                </div>
            </div>
            
        </header>
        <main class="container mb-4">
            <?= $content ?>      
        </main>

        <footer class="container bg-dark pb-4">
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
        </footer>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>