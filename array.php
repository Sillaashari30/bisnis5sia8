<html>
<head>
	<title>Bekerja dengan Array</title>
</head>
<body>
	<h2><font face="comic sans ms"color="blue">
	Demo 1 Penggunaan Array pada PHP</font></h2>
	<?php
	function judul(){
		echo "<h3>Contoh ke 1 Array </h3>";
	}
	judul();
	$suku[0]="Jawa";
	$suku[1]="Sunda";
	$suku[2]="Batak";
	$suku[3]="Minang";
	$suku[4]="Dayak";
	echo "Beberapa suku di Indonesia<br>";
	echo "$suku[0]<br>";
	echo "$suku[1]<br>";
	echo "$suku[2]<br>";
	echo "$suku[3]<br>";
	echo "$suku[4]<br>";
	?>
</body>
</html>