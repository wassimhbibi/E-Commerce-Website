
<html>
<head>
<title>MENU</title>
</head>
<?php
   include_once("menu.php");
   ?>
<body >
	<?php
include('conect4.php');
$query ="INSERT INTO `registrants`(`name`,`first name`, `date`,`age`, `adresse`,  `telephone`,`email`, `password`) VALUES ('".$_POST['n1']."','".$_POST['n2']."','".$_POST['n3']."','".$_POST['n4']."','".$_POST['n5']."','".$_POST['n6']."','".$_POST['n7']."','".$_POST['n8']."')";
$row= mysqli_query($conect, $query);

?>
</body>
</html>