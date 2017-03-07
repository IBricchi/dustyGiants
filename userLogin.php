<html>
<body>
	<?php
	$login = $_POST["login"];
	$pass = $_POST["pass"];
	$loginArray = file("students.txt", FILE_IGNORE_NEW_LINES);
	if($login == "Prowse"){
		$passArray = file("prowsePass.txt", FILE_IGNORE_NEW_LINES);
	}else{
		$passArray = file("pass.txt", FILE_IGNORE_NEW_LINES);
	}
	$userID = array_search($login, $loginArray);
	if($passArray[$userID]==$pass){
		echo '<script type="text/javascript">
		localStorage.setItem("visit", 1);
		localStorage.setItem("name", "'.$login.'");
		window.location.href = "index.php"
		</script>';
	}else{ 
		echo '<script>
		window.location.href = "index.php"
		</script>';
	}
	?>
</body>	
</html>