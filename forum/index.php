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
			$yourArray1 = file("stuff.txt", FILE_IGNORE_NEW_LINES);
			$code_array1 = json_encode($yourArray1);
			echo "var text = ". $code_array1 . ";\n";

			$yourArray2 = file("stuffOwn.txt", FILE_IGNORE_NEW_LINES);
			$code_array2 = json_encode($yourArray2);
			echo "var text = ". $code_array2 . ";\n";

			$yourArray3 = file("stuffTitle.txt", FILE_IGNORE_NEW_LINES);
			$code_array3 = json_encode($yourArray3);
			echo "var text = ". $code_array3 . ";\n";
		?>
	</script>

	<script src="../sweetalert/dist/sweetalert.min.js"></script> 
	<script type="text/javascript" src="../js/all.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/forum.css">
</head>
<body>
	<nav>
		<h1>Dusty Giants Appreciation Society</h1>
		<ul>
			<li><a class="noa" href="../">Home</a></li>
			<li><a class="noa" href="../course">Course Description</a></li>
			<li><a class="noa" href="../text">Main Texts</a></li>
			<li><a class="noa" href="../students">Students</a></li>
			<li><a class="noa" href="#">Forum</a></li>
			<li class='noa' onclick="logout()">Logout</li>
		</ul>
	</nav>
	<div id="forumArea">
		<?php 
			for ($i=0; $i < count($yourArray1); $i++) {
				echo "<p>$yourArray2[$i] $yourArray3[$i]</p> <p>$yourArray1[$i]</p>";
			}
		?>
	<div>
	<form action="forum.php" method="post">
		Title:<input type="text" name="title" required><br>
		Text:<textarea type="text" name="stuff" required></textarea><br>
		<input type="hidden" name="u" value="<?php echo $_GET['u'] ?>">
		<input type="submit">
	</form>
</body>
</html>