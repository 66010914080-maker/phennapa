<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</title>
</head>

<body>
<h1>เพ็ญนภา เรืองชม (ตุ๊กตั๊ก)</h1>

<?php
	
	echo "บทที่ 10 PHP เบื้องต้น <br>";
	print "วิชา Web Programming <br>";
	
	$name = "Phennapa Ruachom";
	$age = 21.2;
	//$name .= "Yuki";
	
	echo gettype($age);
	echo "<hr>";
	var_dump($name);
	echo "<hr>";
	
	echo $name;
	echo "<hr>";
	
	$a = 10;
	$b = 5;
	$c = 2;
	$x = ($a + $b) * $c;
	echo $x;
	
?>

</body>
</html>