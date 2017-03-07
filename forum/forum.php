<!DOCTYPE html>
<html>
<body>
<?php
	$mydate=getdate(date("U"));
	$date = "$mydate[weekday], $mydate[month] $mydate[mday], $mydate[year], $mydate[hours] : $mydate[minutes]";

	$title = " - ".$_POST["title"]." - ".$date;
	$own = $_POST["u"];
	$stuff = $_POST["stuff"];
	echo $stuff;
	$stuff = trim(preg_replace('/\s\s+/', '<br>', $stuff));
	echo $stuff;

	$filename = "stuffTitle.txt";
	$changename = $title;
	$arrayname = file($filename, FILE_IGNORE_NEW_LINES);
	$location = count($arrayname);
	$arrayname[$location] = $changename;
	$arrayname = implode("\n", $arrayname);
	fwrite(fopen($filename,"w"), $arrayname);

	$filepass = "stuff.txt";
	$changetextpass = $stuff;
	$arraypass = file($filepass, FILE_IGNORE_NEW_LINES);
	$arraypass[$location] = $changetextpass;
	$arraypass = implode("\n", $arraypass);
	fwrite(fopen($filepass,"w"), $arraypass);

	$filepass = "stuffOwn.txt";
	$changetextpass = $own;
	$arraypass = file($filepass, FILE_IGNORE_NEW_LINES);
	$arraypass[$location] = $changetextpass;
	$arraypass = implode("\n", $arraypass);
	fwrite(fopen($filepass,"w"), $arraypass);

	header("location: index.php");
?>
</body>
</html>