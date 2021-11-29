<?php
include("conect2.php");
 function ajouter($pucture,$name,$price,$description)
{
    if(require("conect2.php"))
    {
    $req=$assec->prepare("INSERT INTO produit(picture,name,price,description) VALUES('$pucture','$name','$price','$description')");
    $req->execute(array( $pucture,$name,$price,$description));
    $req->closeCursor();   

    }
}
 function afficher()
{
    if(require("conect2.php"))
    {
    $req=$assec->prepare("SELECT * FROM produit ORDER BY idd DESC");
    $req->execute();
    $data=$req->fetchAll(PDO::FETCH_OBJ);
return $data;
$req->closeCursor();


    }
}
function supprimet($id)
 {

    if(require("conect2.php")){
        $req=$assec->prepare("DELETE  FROM produit WHERE idd=? ");
$req->execute( array ($id));   

    }
 }
 function modifier($id,$pucture,$name,$price,$description)
 {
    if(require("conect2.php")){
$req=$assec->prepare("UPDATE  produit SET picture='$pucture',name='$name',price='$price',description='$description' WHERE idd='$id' ");
 $req->execute( array($id,$pucture,$name,$price,$description));
$req->closeCursor(); 
        }
 }
?>