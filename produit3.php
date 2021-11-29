
<?php
require("config3/commande2.php");
$produit=afficher();
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>WASSIM STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
           <h4 class="text-white">An Explanation Of This Page:</h4>
          <p class="text-muted">On this page there are a number of types play station If you like one of our products, you only have to click to buy under each product.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white"></h4>
          <ul class="list-unstyled">
            <li><a href="home.php" class="text-white">HOME</a></li>
            <li><a href="menu.php" class="text-white">MENU</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="produit3.php" class="navbar-brand d-flex align-items-center">
       <circle cx="12" cy="13" r="4"/></svg>
        <strong>PLAY STATION</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

  

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
    <?php foreach ($produit as $p): ?>
        <div class="col">
          <div class="card shadow-sm">
           <title><?= $p->name2?></title><img src="<?= $p->picture2 ?>">

            <div class="card-body">
              <p class="card-text"><?=substr($p->description2, 0,200)?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="byplaystion.php"  >
                  <button type="button" class="btn btn-sm btn-outline-secondary">BUY</a></button>
                  
                </div>
                <small class="text-muted"><?= $p->name2 ?></small>
                <small class="text-muted"><?= $p->price2 ?> TND</small>
              </div>
            </div>
          </div>
        </div>
<?php endforeach; ?>    
    
</div>
          </div>
        </div>
        

       
       

</main>




    

      
  </body>
</html>
