<html>
<head>
	<title>Mengurutkan Array secara Ascending</title>
</head>
<body>
	<h2><font face="lucida"color="blue">
	Demo 2 Penggunaan Array pada PHP</font></h2>
	<?php
	function judul(){
		echo "<h3>Contoh ke 2 Mengurutkan Array dengan fungsi SORT</h3>";
	}
	judul();
	$suku=array("Jawa","Sunda","Batak","Minang","Dayak");
	echo "<strong>Sebelum Diurutkan:</strong><br>";
	foreach ($suku as $key=>$value){
		echo "$key:$value","<br>";
	}
	sort($suku);
	echo "<br><strong>Setelah Diurutkan:</strong><br>";
	foreach ($suku as $key=>$value){
		echo "$key:$value","<br>";
	}
	?>
	</body>
	</html>