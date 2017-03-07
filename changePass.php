<html>
<body>
	<?php
	$user = $_POST["user"];
	$newPass = $_POST["newPass"];

	if ($user != "Prowse") {
		$userArray = file("students.txt", FILE_IGNORE_NEW_LINES);
		$passArray = file("pass.txt", FILE_IGNORE_NEW_LINES);
		$userID = array_search($user, $userArray);
		$passArray[$userID]=$newPass;
		$passArray = implode("\n", $passArray);
		fwrite(fopen("pass.txt","w"), $passArray);
	}else{
		$passProwseArray = file("prowsePass.txt", FILE_IGNORE_NEW_LINES);
		$passProwseArray[0]=$newPass;
		$passProwseArray = implode("\n", $passProwseArray);
		fwrite(fopen("prowsePass.txt","w"), $passProwseArray);
	}
	header("Location: index.php");
	?>
</body>	
</html>