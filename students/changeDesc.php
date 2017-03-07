<html>
<body>
	<?php
	$file = "desc.txt";
	$changetext = htmlspecialchars($_GET["desc"]);
	$location = htmlspecialchars($_GET["loc"]);
	$array = file($file, FILE_IGNORE_NEW_LINES);
	$array[$location] = $changetext;
	$array = implode("\n", $array);
	fwrite(fopen($file,"w"), $array);
	header("Location: index.php");
	?>
</body>
</html>