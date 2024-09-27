<html>
<head>
	<title>Struktur Pengulangan FOR</title>
</head>
<body>
	<h2><font face="tahoma"color="blue"><li>
	Demo 1 Menggunakan Statment FOR</li></font></h2>
	<form action="for.php"method="post">
		Masukkan Bilangan Bulat Positif:
		<input type="text"name="n"value="">
		<input type="submit"name="submit"value="PROSES">
	</form>
	<?php
	$n=$_POST["n"];
	if(isset($n)){
		$jumlah=0;
		for($i=1;$i<=$n;$i++){
			if($i!=$n){
				echo "$i+";
			}else{
				echo "$i=";
			}
			$jumlah+=$i;
		}echo "$jumlah";
	}
	?>
	</body>
	</html>