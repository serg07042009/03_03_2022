<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		$transport = [
			'Авто' => ['Лада','BMW','GAZ'],
			'Самолеты' => ['Il-2', 'I-16', 'Cruzer'],
			'Корабли' => ['Avianos', 'Freegat', 'Esmines']
		];
		echo '<pre>';
		print_r($transport);
		echo '<pre>';
		echo $transport['Авто'][1];
	?>
</body>
</html>