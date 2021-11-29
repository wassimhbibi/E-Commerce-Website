<?php
try
{
    $assec=new PDO("mysql:host=localhost;dbname=utilisateur", "root","");

$assec->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
   }   catch(Exception $e)
{
   $e-> getMessage();
}




?>