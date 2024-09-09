<?php 
	session_start();
	require("../aovis/connect.php");
	$IDLichTrinh = $_GET["IDLichTrinh"];
	$sql = "delete from phim_order where IDLichTrinh=$IDLichTrinh";
	$conn->query($sql) or die($conn->error);
	$conn->close();
	$_SESSION["lichtrinh"]="Delete success!";
	//echo "test";
	header("Location:lichtrinh.php");
?>

<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
	</body>
</html>