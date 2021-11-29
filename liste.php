<html>
<head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body background="g.jpg">
<table <  border ="7" class="table table-bordered border-primary" >
<td>ID</td>
<td> NAME </td>
<td>FIRST NAME</td>
<td>DATE</td>
<td>AGE</td>
<td>ADRESSE</td>
<td>TELAPHONE NUMBER</td>
<td>EMAIL</td>
<td>PASS WORD</td>
<td>ACTION1</td>
<td>ACTION2</td> 
<td>ACTION3</td>  
</tr>

</html>
<?php
include("conect4.php");
$query="select * from registrants";
$result=mysqli_query($conect,$query);
while($row=mysqli_fetch_row($result))
{
echo "<tr>";
echo "<td>".$row[0]."</td>";
echo "<td>".$row[1]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[3]."</td>";
echo "<td>".$row[4]."</td>";
echo "<td>".$row[5]."</td>";
echo "<td>".$row[6]."</td>";
echo "<td>".$row[7]."</td>";
echo "<td>".$row[8]."</td>";
echo "<td><a href='form.php'><input type= 'submit' class='btn btn-primary btn-lg' value='ADD'></td>";
echo "<td><a href='edite.php?EDITE=".$row[0]."'><input type= 'submit' class='btn btn-primary btn-lg' value='EDITE'></a></td>";
echo "<td><a href='delete.php?delete=".$row[0]."'><input type= 'submit' class='btn btn-primary btn-lg' value='DELETE'></a></td>";
echo "</tr>";
}
?>
<?php
$code="";
$name="";
$first="";
$date="";
$age="";
$adres="";
$tn="";
$email="";

$pas="";

if(isset($_GET['EDITE']))
{
    $code=$_GET['EDITE'];


$sql2="SELECT * FROM `registrants` WHERE id='$code'";
$row= mysqli_query($conect,$sql2);
$query=mysqli_fetch_array($row);
$code=$query['id'];
$name=$query['name'];
$first=$query['first name'];
$date=$query['date'];
$age=$query['age'];
$adres=$query['adresse'];
$tn=$query['telephone'];
$email=$query['email'];

$pas=$query['password'];



}

if(isset($_POST['EDITE']))
{
    $code=$_POST['n1'];
    $name=$_POST['n2'];
    $first=$_POST['n3'];
  $date=$_POST['n4'];
    $age=$_POST['n5'];
    $adres=$_POST['n6'];
     $tn=$_POST['n7'];
     $email=$_POST['n8'];
     $pas=$_POST['n9'];
$sql3="UPDATE `registrants` SET `name`=$name,`first name`=$first,`date`=$date,`age`=$age,`adresse`=$adres,`telephone`=$tn,`email`=$email,`password`=$pas WHERE 'id'=$code";
$row= mysqli_query($conect,$sql3);
    }
    if($row)
    {
        echo "modifier vrai";}
        else
        {
            echo "modifier non";   
        }
      
    


?>