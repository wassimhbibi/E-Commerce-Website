<?php
include("conect4.php");
 function ajouter($pucture,$name,$price,$description)
{
    if(require("conect4.php"))
    {
    $req=$assecc->prepare("INSERT INTO produit3(picture2,name2,price2,description2) VALUES('$pucture','$name','$price','$description')");
    $req->execute( array( $pucture,$name,$price,$description));
    $req->closeCursor();   

    }
}
 function afficher()
{
    if(require("conect4.php"))
    {
    $req=$assecc->prepare("SELECT * FROM produit3 ORDER BY id2 DESC");
    $req->execute();
    $data=$req->fetchAll(PDO::FETCH_OBJ);
return $data;
$req->closeCursor();


    }
}
function supprimet($id)
 {

    if(require("conect4.php")){
        $req=$assecc->prepare("DELETE  FROM produit3 WHERE id2=? ");
$req->execute( array($id));   

    }
 }
 function modifier($id,$pucture,$name,$price,$description)
 {
    if(require("conect4.php")){
$req=$assecc->prepare("UPDATE  produit3 SET picture2='$pucture',name2='$name',price2='$price',description2='$description' WHERE id2='$id'  ");
 $req->execute( array( $id,$pucture,$name,$price,$description));
$req->closeCursor(); 
        }
 }
?>