<html>
<head>
	<title>Mengurutkan Array secara Descending</title>
</head>
<body>
	<h2><font face="lucida"color="blue">
	Demo 3 Penggunaan Array pada PHP</font></h2>
	<?php
	function judul(){
		echo "<h3>Contoh ke 3 Mengurutkan Array dengan fungsi RSORT</h3>";
	}
	judul();
	$suku=array("Jawa","Sunda","Batak","Minang","Dayak");
	echo "<strong>Sebelum Diurutkan:</strong><br>";
	foreach ($suku as $key=>$value){
		echo "$key:$value","<br>";
	}
	rsort($suku);
	echo "<br><strong>Setelah Diurutkan:</strong><br>";
	foreach ($suku as $key=>$value){
		echo "$key:$value","<br>";
	}
	?>
	</body>
	</html>