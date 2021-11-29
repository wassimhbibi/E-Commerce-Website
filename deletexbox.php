<?php
require("../config2/commande1.php");
$produit=afficher();
?>
<html>
<head>
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
</head>
<body>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
	<form method="POST">
  
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> ID </label>
    <input type="number" class="form-control" name="id1"required>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">DELETE PC</button>
</form>
</div>
 <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
 <?php foreach ($produit as $p): ?>
        <div class="col">
          <div class="card shadow-sm">
           <img src="<?= $p->picture1 ?>">
<h3><?= $p->id1 ?></h3>
            <div class="card-body">
              <p class="card-text"><?=substr($p->description1, 0,200)?></p>
              
            </div>
          </div>
        </div>
<?php endforeach; ?>
</div></div>
</div>
</body>
</html>
<?php
if(isset($_POST['valider']))
{
	if( isset($_POST['id1']))
{
	if(!empty($_POST['id1']) AND is_numeric($_POST['id1']))
     {
     	
     	$id=htmlspecialchars(strip_tags($_POST['id1']));
     
try {
	
 supprimet($id);
} catch (Exception $e) {
	$e->getMessage();
}
     }

}



}
?>


