<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
	$homepage = file_get_contents('text.txt');
	$homepage .= "\n\tЕщё одна стока";
	$date = date("Y-m-d-H-i-s")
	file_put_contents('text1.txt', $homepage);
	?>
</body>
</html>