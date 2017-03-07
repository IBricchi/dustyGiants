<!DOCTYPE html>
<html>
<head>
	<title>Dusty Giants Appreciaton Society</title>
	<meta charset="utf-8">
	<link rel="icon" href="img/logo.png" type="image/jpg" />
	<!-- js -->
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>

	<script type="text/javascript">
		<?php
			$mydate=getdate(date("U"));
			$hour = $mydate[hours] + 6;
			$min = $mydate[minutes];

			$yourArray1 = file("students.txt", FILE_IGNORE_NEW_LINES);
			$code_array1 = json_encode($yourArray1);
			echo "var students = ". $code_array1 . ";\n";
		?>
	</script>

	<script src="sweetalert/dist/sweetalert.min.js"></script> 
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<script type="text/javascript">
		<?php
			$yourArray = file("quotes.txt", FILE_IGNORE_NEW_LINES);
			$code_array = json_encode($yourArray);
			echo "var quotes = ". $code_array . ";\n";
		?>
		quotes.push(<?php echo $students[count($students)] ?>);
		var quoteNum=quotes.length;
		var randomNumber;
		function createQuote(){
			randomNumber = ~~ (Math.random() * quoteNum);
			document.write(quotes[randomNumber]);
		}
	</script>
	<nav>
		<h1>Dusty Giants Appreciation Society</h1>
		<ul>
			<li><a class="noa" href="#">Home</a></li>
			<li><a class="noa" href="course">Course Description</a></li>
			<li><a class="noa" href="text">Main Texts</a></li>
			<li><a class="noa" href="students">Students</a></li>
			<li><a class="noa" href="forum">Forum</a></li>
			<li class='noa' onclick="logout()">Logout</li>
			<li class='noa' onclick="changePass()">Change Password</li>
		</ul>
	</nav>
	<div id="mainContent">
		<?php 
			if(($hour == 16 and $min >= 20) or ($hour == 17 and $min <= 40)){
				echo "<img src='img/ill.jpeg'>";
			}else{
				echo "<img src='img/logo.png'>";

			}
		?>
		<blockquote>
			<script type="text/javascript">createQuote()</script>
		</blockquote>
		<span onclick="newQuote()">Add Quote</span>
	</div>
</body>
</html>