<!DOCTYPE html>
<html>
<head>
	<title>Students</title>
	<meta charset="utf-8">
	<link rel="icon" href="../img/logo.png" type="img/jpg" />
	<!-- js -->
	<script type="text/javascript" src="../js/jquery-3.1.0.min.js"></script>

	<script type="text/javascript">
		<?php
			$students = file("../students.txt", FILE_IGNORE_NEW_LINES);
			$code_array1 = json_encode($students);
			echo "var students = ". $code_array1 . ";\n";
			echo 'var studentNum = '. count($students) . ";";
			$description = file("desc.txt", FILE_IGNORE_NEW_LINES);
			$name = htmlspecialchars($_GET["u"]);
			$nameloc = array_search($name, $students);
		?>
	</script>

	<script src="../sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="../js/all.js"></script>
	<script type="text/javascript" src="../js/students.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="../sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="../css/all.css">
	<link rel="stylesheet" type="text/css" href="../css/students.css">
</head>
<body>
	<nav>
		<h1>Dusty Giants Appreciation Society</h1>
		<ul>
			<li><a class="noa" href="../">Home</a></li>
			<li><a class="noa" href="../course">Course Description</a></li>
			<li><a class="noa" href="../text">Main Texts</a></li>
			<li><a class="noa" href="#">Students</a></li>
			<li><a class="noa" href="../forum">Forum</a></li>
			<li class='noa' onclick="logout()">Logout</li>
		</ul>
	</nav>
	<div id="studentArea">
		<?php
			$x = 1;
			for ($x = 0; $x < count($students); $x++) {
				if($name == $students[$x] or $name == "Prowse" or $name == "Ignacio"){
					echo '<div class="studentCont"><div class="studentImage" id="studentImage'.$x.'" onclick="editImg('.$x.')"></div><div class="studentName">'.$students[$x].'</div><div class="studentEdit" onclick="editUsers('.$x.')"></div><div class="studentDesc">'.$description[$x].'</div><form action="upload.php" method="post" enctype="multipart/form-data"><input type="hidden" name="num" value="'.$x.'">Select image to upload:<input type="file" name="fileToUpload" id="fileToUpload"><input type="submit" value="Upload Image" name="submit"></form></div>';
				}else{
					if($name!=$students[count($students)]){
						echo '<div class="studentCont"><div class="studentImage" id="studentImage'.$x.'"></div><div class="studentName">'.$students[$x].'</div><div class="studentDesc">'.$description[$x].'</div></div>';
					}
				}
			}
			if($name == "Prowse" or $name == "Ignacio"){
				echo '<div class="studentCont"><div class="studentName">Add new Person</div><form action="newperson.php" method="post" enctype="multipart/form-data"><input type="hidden" name="num" value='.count($students).'>Add this persons name<input type="text" name="name"><input type="submit" name="submit"></form></div>';
			}
		?>
		
	</div>
</body>
</html>