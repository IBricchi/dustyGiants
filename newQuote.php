<html>
<body>

<?php
$user = $_POST["u"];
$quote = $_POST["quote"];
$author = $_POST["author"];
$txt = $quote . " -" . $author;
$myfile = file_put_contents('quoteOwn.txt', $user.PHP_EOL , FILE_APPEND | LOCK_EX);
$myfile2 = file_put_contents('quotes.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
header("location: index.php")
?>

</body>
</html>