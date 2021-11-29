<html>
<head>
	<head>
	<nav class="navbar navbar-light bg-light" style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="produit2.php" >
      <img src="lx.jpg" alt="" width="90" height="90" class="d-inline-block align-text-top">
     
    </a>
  </div>
</nav> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body >
<table <  border ="7" class="table table-success table-striped">
<td>ID</td>
<td> NAME PRODUCT </td>
<td> NAME</td>
<td>FURST NAME</td>
<td>CIN</td>
<td>BANK CARD NUMBER OR POSTAL CARD NUMBER</td>
</tr>
</html>
<?php
include("conect4.php");
$query="select * from byxbox";
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
echo "</tr>";
}
?>