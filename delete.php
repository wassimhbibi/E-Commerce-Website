   <?php
include("conect4.php");

   if(isset($_GET['delete']))
{
    $id=$_GET['delete'];


    $sql1="DELETE FROM `registrants` WHERE id='$id'";
    $row= mysqli_query($conect,$sql1);
     
}
?>
<!DOCTYPE html>
<html>
<head>
	<nav class="navbar navbar-light bg-light" style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="liste.php" >
      <img src="l2.jpg" alt="" width="90" height="90" class="d-inline-block align-text-top">
     
    </a>
  </div>
</nav> 
</head>
	
	
	<title>DELETE PAGE</title>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body background="k.jpg" >
<form>
<table   align="center" border=5  class="table table-bordered border-primary" >
<td>ID</td>
<td> NAME </td>
<td>FIRST NAME</td>
<td>DATE</td>
<td>AGE</td>
<td>ADRESSE</td>
<td>TELAPHONE NUMBER</td>
<td>EMAIL</td>
<td>PASS WORD</td>  
</tr>
</body>
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
echo "</tr>";
}
echo "</table>";
?>