<?php
try
{
    $assecc=new PDO("mysql:host=localhost;dbname=utilisateur", "root","");

$assecc->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
   }   catch(Exception $e)
{
   $e-> getMessage();
}




?>