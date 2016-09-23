<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Page 1</title>
</head>

<body>
<h1>Page 1</h1>
<!-- php koden forneden linker til menu.php, så menuen kommer til at blive vist her -->
<?php include 'menu.php'; ?>

<?php
// En masse øvelser:
$txt1="Hello World!";
$txt2="What a nice day!";
echo $txt1 . " " . $txt2;
echo "<br>";

// Fjern tag mulighed --- er god som sikkerhed mht kommentarfelter
$str = "a <b> c";
echo htmlspecialchars($str);
echo "<br>";
$str = "a <b> c";
echo htmlentities($str);
echo "<br>";

// if-else
$d=date("D");
if ($d=="Fri") { echo "Have a nice weekend!"; }
else {echo "Today is ".$d; }
echo "<br>";
?>
<hr>
<?php
//hent server iformation - stien der fører til der man er.
	echo $_SERVER['PHP_SELF'];
?>
<hr>
<!-- Billede tilføjet for at se tydelig forskel på siderne -->
<img src="https://i.ytimg.com/vi/tntOCGkgt98/maxresdefault.jpg" width="500px">
<!-- footer her: linker til seperat footer.php dokument -->
<?php include 'footer.php'; ?>