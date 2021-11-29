<html>
<head>  
<title> FORM </title>
<nav class="navbar navbar-light bg-light" style="background-color: black;">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.php" >
      <img src="0200.png" alt="" width="60" height="60" class="d-inline-block align-text-top">
     
    </a>
  </div>
</nav>
<link rel="stylesheet"  href="style3.css"> 
</head>
<body >
<img src="thumbbig-1064204.jpg" alt="" width="100%">
<form  class ="box"  action="menuu.php" method="POST" >
<table cellpadding="9" align="center" border="7">
<tr> 
<th > <font   width="15" face="kristen itc" color="white">Name</font></th>
<td><input   type="text"  placeholder="Text" name="n1" required></td>
</tr>
<tr> 
<th > <font   width="15" face="kristen itc" color="white">First Name</font></th>
<td><input   type="text"  placeholder="Text" name="n2" required></td>
</tr>
<tr>
<th>  <font width="15" face="kristen itc" color="white">Date of birth</font></th>
<td> <input type="Date" placeholder="Date" name="n3" required></td>
</tr>
<tr> 
<th>  <font width="15" face="kristen itc" color="white"> AGE</font></th>
<td> <input  type="number" placeholder="number" name="n4" required></td>
</tr>
<tr> 
<th>  <font width="15" face="kristen itc" color="white"> ADRESSE</font></th>
<td> <input  type="text" placeholder="text" name="n5" required></td>
</tr>
<tr>
<th > <font   width="15" face="kristen itc" color="white">Telephone Number</font></th>
<td><input   type="number" placeholder="number" name=" n6" required></td>
</tr>
<tr>
<th > <font   width="15" face="kristen itc" color="white">Email</font></th>
<td><input   type="email" placeholder="Email" name="n7" required></td>
</tr>

<tr>
<th>  <font width="15" face="kristen itc" color="white">Passe word</font></th>
<td> <input  type="password" name="n8" required></td>
</tr>
<tr>
<td><input  type="submit" name="login" value="LOGIN"></td>
</tr>
</table>
</form>
</body>
</html>