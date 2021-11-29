<?php
include("conect3.php");
 function ajouter($pucture,$name,$price,$description)
{
    if(require("conect3.php"))
    {
    $req=$assecc->prepare("INSERT INTO produit2(picture1,name1,price1,description1) VALUES('$pucture','$name','$price','$description')");
    $req->execute( array( $pucture,$name,$price,$description));
    $req->closeCursor();   

    }
}
 function afficher()
{
    if(require("conect3.php"))
    {
    $req=$assecc->prepare("SELECT * FROM produit2 ORDER BY id1 DESC");
    $req->execute();
    $data=$req->fetchAll(PDO::FETCH_OBJ);
return $data;
$req->closeCursor();


    }
}
function supprimet($id)
 {

    if(require("conect3.php")){
        $req=$assecc->prepare("DELETE  FROM produit2 WHERE id1=? ");
$req->execute( array($id));   

    }
 }
 function modifier($id,$pucture,$name,$price,$description)
 {
    if(require("conect3.php")){
$req=$assecc->prepare("UPDATE  produit2 SET picture1='$pucture',name1='$name',price1='$price',description1='$description' WHERE id1='$id'  ");
 $req->execute( array( $id,$pucture,$name,$price,$description));
$req->closeCursor(); 
        }
 }
?>