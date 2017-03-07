<!DOCTYPE html>
<html>
<head>
	<title>Couses</title>
	<meta charset="utf-8">
	<link rel="icon" href="../img/logo.png" type="image/jpg" />
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>

	<script type="text/javascript">
		<?php
			$yourArray1 = file("students.txt", FILE_IGNORE_NEW_LINES);
			$code_array1 = json_encode($yourArray1);
			echo "var students = ". $code_array1 . ";\n";
		?>
		students.pop();
	</script>

	<script src="../sweetalert/dist/sweetalert.min.js"></script> 
	<script type="text/javascript" src="../js/all.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
</head>
<body>
	<nav>
		<h1>Dusty Giants Appreciation Society</h1>
		<ul>
			<li><a class="noa" href="../">Home</a></li>
			<li><a class="noa" href="#">Course Description</a></li>
			<li><a class="noa" href="../text">Main Texts</a></li>
			<li><a class="noa" href="../students">Students</a></li>
			<li><a class="noa" href="../forum">Forum</a></li>
			<li class='noa' onclick="logout()">Logout</li>
		</ul>
	</nav>
</body>
</html>