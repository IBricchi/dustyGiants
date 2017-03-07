<html>
	<body>
	<?php
	$location = $_POST["num"];

	$file = '../img/no-img.jpg';
	$newfile = '../img/'.$location.'.jpg';

	if (!copy($file, $newfile)) {
    	echo "failed to copy";
	}

	$filename = "../students.txt";
	$changename = $_POST["name"];
	$arrayname = file($filename, FILE_IGNORE_NEW_LINES);
	$arrayname[$location] = $changename;
	$arrayname = implode("\n", $arrayname);
	fwrite(fopen($filename,"w"), $arrayname);

	$file = "desc.txt";
	$changetext = "Click the little blue button to add a description";
	$array = file($file, FILE_IGNORE_NEW_LINES);
	$array[$location] = $changetext;
	$array = implode("\n", $array);
	fwrite(fopen($file,"w"), $array);

	$filepass = "../pass.txt";
	$changetextpass = "password1";
	$arraypass = file($filepass, FILE_IGNORE_NEW_LINES);
	$arraypass[$location] = $changetextpass;
	$arraypass = implode("\n", $arraypass);
	fwrite(fopen($filepass,"w"), $arraypass);
	
	header("location: index.php");
	?>
	</body>
</html>