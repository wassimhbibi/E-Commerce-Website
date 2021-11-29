
<?php
require("../config/commande.php");
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
    <label for="exampleInputEmail1" class="form-label">PUCTURE TITLE</label>
    <input type="file" class="form-control"  name="pucture"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRODUCT NAME </label>
    <input type="text" class="form-control"  name="name" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRICE </label>
    <input type="number" class="form-control" name="price" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> DESCRIPTION </label>
    <textarea    class="form-control"  name="description" required  >   </textarea>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">ADD NEW PC</button>
</form>

</body>
</html>
<?php
if(isset($_POST['valider']))
{
	if(isset($_POST['pucture']) AND isset($_POST['name']) AND isset($_POST['price']) AND isset($_POST['description']))

{
	if(!empty($_POST['pucture']) AND !empty($_POST['name']) AND !empty($_POST['price']) AND !empty($_POST['description']))
     {
     	$pucture=htmlspecialchars(strip_tags($_POST['pucture']));
     	$name=htmlspecialchars(strip_tags($_POST['name']));
     	$price=htmlspecialchars(strip_tags($_POST['price']));
     	$description=htmlspecialchars(strip_tags($_POST['description']));
try {
	
 ajouter($pucture,$name,$price,$description);	
} catch (Exception $e) {
	$e->getMessage();
}
     }

}








}



?>