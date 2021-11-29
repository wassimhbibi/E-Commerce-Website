<html>
<head>
<title>PANEL PC</title>
</head>
<?php
   include_once("thnx.php");
   ?>
<body >
	<?php
include('conect4.php');
$query ="INSERT INTO `bypc`(`name product`,`name`, `first name`,`cin`, `bank card number or postal card number`) VALUES ('".$_POST['n1']."','".$_POST['n2']."','".$_POST['n3']."','".$_POST['n4']."','".$_POST['n5']."')";
$row= mysqli_query($conect, $query);

?>
</body>
</html>