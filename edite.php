
<?php
include('liste.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>modif</title>
</head>
<body>

</table>
<form    action="liste.php" method="POST" >
<table cellpadding="9" align="center" border="7">
<tr> 
<th > code</th>
<td><input   type="text"  placeholder="Text" name="n1" value="<?php  echo $code; ?>"></td>
</tr>
<tr> 
<th > Name</th>
<td><input   type="text"  placeholder="Text" name="n2" value="<?php   echo $name; ?>"></td>
</tr>
<tr> 
<th>  First Name</th>
<td> <input  type="text" placeholder="Text" name="n3" value="<?php   echo $first; ?>"></td>
</tr>
<tr> 
    <th>  Date of birth</th>
<td> <input type="Date" placeholder="Date" name="n6" value="<?php  echo $date; ?>"></td>
</tr>
<th>   AGE</th>
<td> <input  type="number" placeholder="number" name="n4" value="<?php   echo $age; ?>"></td>
</tr>
<tr> 
<th> ADRESSE</th>
<td> <input  type="text" placeholder="text" name="n5" value="<?php  echo $adres; ?>"></td>
</tr>
<tr>
<tr>
<th > Telephone Number</th>
<td><input   type="number" placeholder="number" name=" n8"  value="<?php  echo $tn; ?>"></td>
</tr>
<tr>
<tr>
<th > Email</th>
<td><input   type="email" placeholder="Email" name="n7" value="<?php   echo $email; ?>" ></td>
</tr>
<th> Passe word </th>
<td> <input  type="password" name="n9"value="<?php  echo $pas; ?>"></td>
</tr>
<tr>
<td><input  type="submit" name="EDITE" value="EDITE"></td>
</tr>
</table>
</form>

</body>
</html>