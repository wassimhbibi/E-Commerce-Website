
<?php
require("../config2/commande1.php");
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
    <input type="file" class="form-control"  name="pucture1"required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRODUCT NAME </label>
    <input type="text" class="form-control"  name="name1" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> PRICE </label>
    <input type="number" class="form-control" name="price1" required>
  </div>
   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label"> DESCRIPTION </label>
    <textarea    class="form-control"  name="description1" required  >   </textarea>
  </div>
  <button type="submit" name="valider" class="btn btn-primary">ADD NEW XBOX</button>
</form>

</body>
</html>
<?php
if(isset($_POST['valider']))
{
	if(isset($_POST['pucture1']) AND isset($_POST['name1']) AND isset($_POST['price1']) AND isset($_POST['description1']))

{
	if(!empty($_POST['pucture1']) AND !empty($_POST['name1']) AND !empty($_POST['price1']) AND !empty($_POST['description1']))
     {
     	$pucture=htmlspecialchars(strip_tags($_POST['pucture1']));
     	$name=htmlspecialchars(strip_tags($_POST['name1']));
     	$price=htmlspecialchars(strip_tags($_POST['price1']));
     	$description=htmlspecialchars(strip_tags($_POST['description1']));
try {
	
 ajouter($pucture,$name,$price,$description);	
} catch (Exception $e) {
	$e->getMessage();
}
     }

}








}



?>